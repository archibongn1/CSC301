<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add new pet</title>
</head>
<body>
<form method="POST">
	<a href="index.php">Back</a>
	<p>
		<label for="name">Name</label>
		<input type="text" id="name" name="name">
	</p>
    	<p>
		<label for="picture">Picture</label>
		<input type="picture" id="picture" name="picture">
	</p>
	<p>
		<label for="type">Type</label>
		<input type="text" id="type" name="type">
	</p>
	<p>
		<label for="age">Age</label>
		<input type="number" id="age" name="age">
	</p>
	<p>
	</p>
	<input type="submit" name="save" value="Save">
</form>
 
<?php
	if(isset($_POST['save'])){
		//open the json file
		$data = file_get_contents('data.json');
		$data = json_decode($data);
 
		//data in out POST
		$input = array(
			'name' => $_POST['name'],
            'picture' => $_POST['picture'],
			'type' => $_POST['type'],
			'age' => $_POST['age']
		);
 
		//append the input to our array
		$data[] = $input;
		//encode back to json
		$data = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('data.json', $data);
 
		header('location: index.php');
	}
?>
</body>
</html>