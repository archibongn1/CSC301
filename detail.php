<?php
if(!isset($_GET['id'])){
	die('No id: please return to the <a href="index.php">Pets page</a>');
}
require_once('JSONUtility.php');
$pets=jsonToArray('data.json');

if(!is_numeric($_GET['id']) || $_GET['id']<0 || $_GET['id']>=count($pets)){
	die('Invalid: please return to the <a href="index.php">Pets page</a>');
	
}

$title=$pets[$_GET['id']]['name'];

require_once('header.php');
?>
	<div class="container">
		<h1><?= $pets[$_GET['id']]['name'] ?></h1>
		<img src="<?= $pets[$_GET['id']]['picture'] ?>" style="max-width:500px" />
		<p>Age: <?= $pets[$_GET['id']]['age'] ?></p>
        <a href="edit.php?id='.$i.'">Edit </a>
        <a href="delete.php?id='.$i.'">Delete </a>
        <a href="index.php?id='.$i.'">Return to home page</a>
	</div>
<?php
require_once('footer.php');