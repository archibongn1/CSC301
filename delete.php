<?php
	//get the index from URL
	$index = $_GET['id'];
 
	//get json data
	$data = file_get_contents('data.json');
	$data_array = json_decode($data, true);

    //delete the row with the index
	unset($data_array[$index]);
 
    
    print_r(array_values($data_array));
    $data=(array_values($data_array));
   
    $data = json_encode($data, JSON_PRETTY_PRINT);
    
    file_put_contents('data.json', $data);
 
?>