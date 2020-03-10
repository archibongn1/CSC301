<?php

include('JSONUtility.php');
include('userFunctions.php');

if(UserFunctions::isSignedIn()){
	die("Already signed in");
}

if(isset($_POST['email']) && isset($_POST['password'])){
	userFunctions::authenticateUser($_POST['email'], $_POST['password']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
</head>
    
<body>
<form method="POST">
	<a href="index.php">Back to home page</a>
    	<p>
		<label for="email">Email</label>
		<input type="email" id="email" name="email">
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
	</p>

	<input type="submit" name="Submit" value="Submit">
    
    <?php echo "Don't have an account? "?><a href="signup.php">Sign up </a>
</form>

</body>
</html>