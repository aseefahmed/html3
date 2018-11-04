<?php
	$servername = "mydbinstance.ctbxu27wwpfh.us-east-1.rds.amazonaws.com";
	$username = "mydbinstance";
	$password = "mydbinstance";
	$dbname  = "mydbinstance";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employees Details: Server <?php echo $_SERVER['SERVER_ADDR']; ?></h2>
  
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <thead>
        <tr>
            <th>Firstname</th>
            <th>LastName</th>
        </tr>
    </thead>
    <?php
      $conn = mysqli_connect('mydbinstance.ctbxu27wwpfh.us-east-1.rds.amazonaws.com', 'mydbinstance', 'mydbinstance', 'mydbinstance');
      $result = mysqli_query($conn, 'Select * FROM employees') or die('Query fail: ' . mysqli_error());
    ?>
    <tbody>
      <?php while ($row = mysqli_fetch_array($result)) { ?>
          <tr>
            <td><?php echo $row[2]; ?></td>
            <td><?php echo $row[3]; ?></td>
          </tr>
      <?php } ?>
    </tbody>
</table>





</div>

</body>
</html>

