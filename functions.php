<?php

function jsonToArray($filename){
	$json_string=file_get_contents($filename);
	$array=json_decode($json_string,true);
	return $array;
}

function read($filename){
	$handle=fopen($filename,'r');
	$temp='';
	while(!feof($handle)) $temp.=fgets($handle);
	fclose($handle);
	return $temp;
}



function readCSV($filename,$target=null){
	$handle=fopen($filename,'r');
	$temp=[];
	$counter=0;
	while(!feof($handle)){
		echo $target.'-'.$counter.'<br>';
		if($target==null){
			$temp[]=explode(';',fgets($handle));
			
		}else{
			$temp=explode(';',fgets($handle));
			if($counter<$target){
				$counter++;
				continue;
			}else{
				fclose($handle);
				return $temp;
			}
		}
	}
	fclose($handle);
	return $temp;
}

