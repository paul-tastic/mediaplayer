<?php
	include("includes/classes/account.php");
	$account = new Account();

	include("includes/handlers/register-handler.php");
	include("includes/handlers/login-handler.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>NMP Registration Page</title>
</head>
<body>
		<div id="inputContainer">
			<form id="loginForm" action="register.php" method="POST">
				<h2>Login to your account</h2>
				<p>
					<label for="username">Username:</label>
					<input id="username" type="text" name="loginUsername" placeholder="username" required>
				</p>
				<p>
					<label for="password">Password:</label>
					<input id="password" type="password" name="password" placeholder="password" required>
				</p>
				<button type="submit" name="loginButton">Log In</button>
			</form>

			<form id="registerForm" action="register.php" method="POST">
				<h2>Login to your account</h2>
				<p>
					<label for="rUsername">Username:</label>
					<input id="rUsername" type="text" name="rUsername" placeholder="username" required>
				</p>
				<p>
					<label for="rFirstname">First Name:</label>
					<input id="rFirstname" type="text" name="rFirstname" placeholder="first name" required>
				</p>
				<p>
					<label for="rLastname">Last Name:</label>
					<input id="rLastname" type="text" name="rLastname" placeholder="last name" required>
				</p>
				<p>
					<label for="rEmail">Email:</label>
					<input id="rEmail" type="email" name="rEmail" placeholder="email" required>
				</p>
				<p>
					<label for="r2Email">Confirm Email:</label>
					<input id="r2Email" type="email" name="r2Email" placeholder="confirm email" required>
				</p>
				<p>
					<label for="rPassword">Password:</label>
					<input id="rPassword" type="password" name="rPassword" placeholder="password" required>
				</p>
				<p>
					<label for="r2Password">Confirm Password:</label>
					<input id="r2Password" type="password" name="r2Password" placeholder="confirm password" required>
				</p>
				<button type="submit" name="registerButton">Sign Up</button>
			</form>
		</div>
</body>
</html>