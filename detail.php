<?php
if(!isset($_GET['id'])){
	die('No id: please return to the <a href="index.php">Pets page</a>');
}
require_once('functions.php');
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
	</div>
<?php
require_once('footer.php');