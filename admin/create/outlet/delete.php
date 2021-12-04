<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `croutlet` WHERE `croutlet`.`sl` = $key");

	header("location: crOutlet.php");

	

?>