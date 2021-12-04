<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `rowmaterial` WHERE `rowmaterial`.`sl` = $key");

	header("location: crRm.php");

	

?>