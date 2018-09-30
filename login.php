
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php 
	session_start();

		$userErr = $passErr = $user = $pass = "";
			if(isset($_POST['username'])){
				$user = $_POST['username'];
				$pass = $_POST['password'];
			}

		if ($_SERVER["REQUEST_METHOD"]=="POST") {
			if(empty($_POST["username"]) || $user!="aisyahtria" && $pass!="ais2202"){
				$userErr = "Username is required";
			} 
			else{
				$_SESSION['login'] = $user;
				header('location: datetime.php');
			}
			if(!preg_match("/^[a-zA-Z ]*$/", $user)){
				$userErr = "Only letter and white space allowed";
			}
		if (empty($_POST["password"]) || $pass!="ais2202" && $pass!="aisyahtria") {
			header("location: tugasphp.php");
			$passErr = "Password is required";

			}
			else{
				$_SESSION['login'] = $pass;
				header('location: datetime.php');
			}
			if(!preg_match("/^[a-zA-Z0-9]*$/", $pass)){
				$passErr = "Only letter and number format allowed";
			}
		}




 	
	?>
</body>
</html>