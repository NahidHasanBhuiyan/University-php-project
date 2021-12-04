<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `crsrc` WHERE `crsrc`.`sl` = $key");

	header("location: crSrc.php");

	

?>