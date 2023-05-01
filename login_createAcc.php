<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo '<script>alert("You are already logged in.")</script>';
    echo("<script>location.href = 'index.php';</script>");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login/SignUp - Furry Friends</title>
    <link rel="stylesheet" href="styles/fixed_style.css">
    <link rel="stylesheet" href="styles/login_style.css">
</head>

<body>

    <div class="navbar">
        
		<ul class="sidebar">
			<li><a class="active" href="login_createAcc.php">Login \ Create an Account</a></li>
			<li><a href="index.php">Home</a></li>
			<li><a href="DogCare.php">Dog Care</a></li>
			<li><a href="CatCare.php">Cat Care</a></li>
			<li><a href="FindCatDog.php">Find a Dog/Cat</a></li>
			<li><a href="HaveCatDog.php">Have a Pet to Give Away?</a></li>
			<li><a href="Contact.php">Contact Us</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>

    </div>

    <div class="header">
		<?php include 'header.php' ?>
    </div>

    <div class="login_create">

	<div class="form1">

	<h2>Login</h2>
	<form class="f1" method="post" action="login.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>

		<input type="submit" name="login" value="Login">
	</form>

	</div>

	<div class="form2">

	<h2>Create Account</h2>
	<form class="f2" method="post" action="create_account.php">
		<label for="username">Username:</label>
		<input type="text" id="username" name="username"><br><br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password"><br><br>

		<label for="confirm_password">Confirm Password:</label>
		<input type="password" id="confirm_password" name="confirm_password"><br><br>

		<input type="submit" name="create_account" value="Create Account">
	</form>

	</div>

    </div>

	<div class="format">
	Username can only contain letters (both upper and lower case) and digits.
	Password must be at least 4 characters long (characters are to be letters and digits only), have at least one letter and at least one digit.
	</div>

    <div class="footer">
		<?php include 'footer.php' ?>
    </div>

    <script src="scripts/clock.js" onload="updateClock()"></script>

</body>
</html>