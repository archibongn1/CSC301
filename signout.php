<?php

include('userFunctions.php');
userFunctions::signout();
header("Location: index.php");
?>