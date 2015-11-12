<html>

<body>

<?php



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



	$sql= "INSERT INTO `test`.`orders` (`order_name`, `order_cost`) VALUES ('Emperor DTS', '4000');
";
	$result=mysqli_query($link,$sql);


	?>
  		<script>window.location = 'insert_succ.html';</script>
	<?php 

	// 	?>
 	//  	<script>window.location = 'login_fail.html';</script>
	// 	<?php 
	// }





?>

</body>

</html>