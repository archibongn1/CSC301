 <?php

    //get the index from URL
	$index = $_GET['id'];

	if(isset($_POST['save'])){
		//open the json file
		$data = file_get_contents('data.json');
		$data = json_decode($data, true);
 
		//data in out POST
		$input = array(
			'name' => $_POST['name'],
            'picture' => $_POST['picture'],
			'type' => $_POST['type'],
			'age' => $_POST['age']
		);
 
		//append the input to our array
		$data[$index] = $input;
		//encode back to json
		$data_array = json_encode($data, JSON_PRETTY_PRINT);
		file_put_contents('data.json', $data_array);
 
		//header('location: index.php');
	}
?>
<?php
	//get json data
	$data = file_get_contents('data.json');
    //decode json into php array
	$data_array = json_decode($data, true);
 
	//assign the data to selected index
	$row = $data_array[$index];
    print_r($row);
?>

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
		<input type="text" id="name" name="name" value= "<?php echo $data_array[$_GET['id']]['name']?>" >
	</p>
    	<p>
		<label for="picture">Picture</label>
		<input type="picture" id="picture" name="picture" value="<?php echo $data_array[$_GET['id']]['picture']?>">
	</p>
    
	<p>
		<label for="type">Type</label>
		<input type="text" id="type" name="type" value="<?php echo $data_array[$_GET['id']]['type']?>">
	</p>
	<p>
		<label for="age">Age</label>
		<input type="number" id="age" name="age" value="<?php echo $data_array[$_GET['id']]['age']?>">
	</p>
	<p>
	</p>
	<input type="submit" name="save" value="Save">
</form>
</body>
</html>