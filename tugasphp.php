<?php
include 'login.php';

if (isset($_SESSION['login'])) {
	header("location: datetime.php");
}

?>
<!DOCTYPE html>

<html>

<head>
	<title>PHP Login Form</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
	<h2>Login Disini</h2>
	
	<form action="login.php" method="post" class="form">
		
		<p class="name">
			<input type="text" name="username" id="name" placeholder="aisyahtria" />
			<label for="name">Username</label>
			
		</p><span><?php echo $userErr; ?></span>
		
		<p class="email">
			<input type="text" name="password" id="email" placeholder="ais2202" />
			<label for="email">Password</label>
		</p><span><?php echo $passErr; ?></span><br>

		<p class="submit">
			<input type="submit" value="Login" />
		</p>
		
	</form>

</body>

</html>

