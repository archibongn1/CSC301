<?php

include('JSONUtility.php');
include('userFunctions.php');

if(userFunctions::isSignedIn()){
	die("Already logged in!");
}

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$database = jsonToArray('database.json');
	if(userFunctions::userExists($email, $database) != -1){
		die("Email already associated with existing account");
	}

		$input = array(
			'name' => $_POST['name'],
            'email' => $_POST['email'],
			'password' => $_POST['password'],
		);
 
		//append the input to our array
		$data[] = $input;
		//encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('database.json', $data);
        echo "Account created";
		//header('location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
</head>
    
<body>
<form method="POST">
	<a href="index.php">Back to home page</a>
	<p>
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
	</p>
    	<p>
		<label for="email">Email</label>
		<input type="email" id="email" name="email">
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" id="password" name="password">
	</p>
	<input type="submit" name="Submit" value="Submit">
    
    <?php echo "Already have an account? "?><a href="signin.php">Sign in </a>
</form>
</body>
</html>