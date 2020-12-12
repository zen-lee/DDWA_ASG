<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "school";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection occurred.
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
  else{ //continued within body tag

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
	
	</head>
	<body>
<?php 
	echo "<h1>Connection Successful!</h1>";
	}
	?>
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>