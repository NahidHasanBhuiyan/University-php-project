<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `outfixedexpense` WHERE `outfixedexpense`.`sl` = $key");

	header("location: fixExp.php");

	

?>