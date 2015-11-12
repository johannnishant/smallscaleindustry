<html>

<body>

<?php
// define variables and set to empty values
$name = $pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["username"]);
  $pass = test_input($_POST["passwordcheck"]);

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo $name.$pass
  // NEW CODE

if ($name && $pass)
{

	$user = 'root';
	$password = 'root';
	$db = 'test';
	$host = 'localhost';
	$port = 8889;

	$link = mysqli_init();
	$success = mysqli_real_connect(
	   $link, 
	   $host, 
	   $user, 
	   $password, 
	   $db,
	   $port
	);

	if(success=="false")
		die("Error In Connecting to Database");

	// echo $name.$pass;

	$sql= "INSERT INTO `test`.`userinfo` (`usernames`, `passwords`) VALUES ('$name', '$pass');";
	$result=mysqli_query($link,$sql);



	?>
  		<script>window.location = 'login_suc.html';</script>
	<?php 
	// exit;

	}

	// else{
	// 	?>
 //  		<script>window.location = 'login_fail.html';</script>
	// 	<?php 
	// }

}



?>

</body>

</html>