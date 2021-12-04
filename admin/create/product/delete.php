<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `product` WHERE `product`.`sl` = $key");

	header("location: crPr.php");

	

?>