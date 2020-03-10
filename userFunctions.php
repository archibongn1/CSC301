<?php

class userFunctions{

    static function userExists($email, $accounts){
		$index = -1;
		for($i = 0; $i < count($accounts); $i++){
			if($accounts[$i]['email'] == $email){
				$index = $i;
				break;
			}
		}
		return $index;
	}
	
	static function isSignedIn(){
		session_start();
		if(isset($_SESSION['signedin'])){
			return true;
		}
		return false;
	}
	
	static function authenticateUser($email, $password){
		$accounts = jsonToArray('database.json');
		
		$index = self::userExists($email, $accounts);
		if($index == -1){
			//die("User doesn't exist");
            $error = "User doesn't exist. Please enter correct email and password.";
            echo $error;
		}else{
			if($_POST['password'] != $accounts[$index]['password']){
				$error ="Enter correct password";
                echo $error;
			}else{
				$_SESSION['signedin'] = true;
				$_SESSION['email'] = $email;
				die("Signed in");
			}
		}
	}
	static function signout(){
		session_start();
		if(isset($_SESSION['signedin'])){
			unset($_SESSION['signedin']);
			if(isset($_SESSION['email']))
				unset($_SESSION['email']);
			die("Signed out");
		}else{
			die("Already signed out");
		}
	}
}

?>

