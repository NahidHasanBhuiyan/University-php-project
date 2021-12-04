<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `fixedexpense` WHERE `fixedexpense`.`sl` = $key");

	header("location: fixExp.php");

	

?>