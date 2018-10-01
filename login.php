
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
			if($user!="aisyahtria" && $pass!="ais2202"){
				header("location: tugasphp.php");
			}
			elseif (empty($_POST["username"]) && empty($_POST["password"])) {
				$userErr = "Username is required";
			} 
			
			elseif(!preg_match("/^[a-zA-Z ]*$/", $user)){
				$userErr = "Only letter and white space allowed";
			}
			else{
				$_SESSION['login'] = $user;
				header('location: datetime.php');
			}
		}
	?>
</body>
</html>
