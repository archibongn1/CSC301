<?php
	//get the index from URL
	$index = $_GET['id'];
 
	//get json data
	$data = file_get_contents('data.json');
	$data_array = json_decode($data);

    //delete the row with the index
	unset($data[$index]);
 
	//assign the data to selected index
	$row = $data_array[$index];

    $data = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('data.json', $data);
 
?>