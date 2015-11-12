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

	$sql= "SELECT * FROM test.userinfo WHERE usernames='$name' and passwords='$pass'";
	$result=mysqli_query($link,$sql);

	$count=mysqli_num_rows($result);


	if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	// session_register("myusername");
	// session_register("mypassword"); 
	// header('Location:inventory.html');
	?>
  		<script>window.location = 'login_suc.html';</script>
	<?php 
	// exit;

	}

	else{
		?>
  		<script>window.location = 'login_fail.html';</script>
		<?php 
	}

}



?>

</body>

</html>