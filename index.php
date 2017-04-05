<?php
	ini_set('display_errors', 'On');
	error_reporting(E_ALL);
?>


<html>
<head>
	<title>Login example</title>
</head>
<body>
	<h1>Login Example</h1>


	<form form action="login.php" method="POST">
		<input type="text" name="username" placeholder="Username">
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<button type ="submit">Login</button>
	</form>

	<?php

	
		if (isset($_SESSION['id'])) {
			header('Location: logedin.php');
		} else {
			echo "You are not logged in";
		}
	?>

	<br>
	<br>
	<br>

	<form action="signUp.php" method="POST"> 
		<input type="text" name="first" placeholder="First Name">
		<br>
		<input type="text" name="last" placeholder="Last Name">
		<br>
		<input type="text" name="username" placeholder="Username">
		<br>
		<input type="password" name="password" placeholder="Password">
		<br>
		<button type ="submit">SIGN UP</button>
	</form>

</body>
</html>