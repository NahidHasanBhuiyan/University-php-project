<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `nonfixedexpense` WHERE `nonfixedexpense`.`sl` = $key");

	header("location: nonFixExp.php");

	

?>