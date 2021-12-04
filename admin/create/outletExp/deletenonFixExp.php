<?php

	include_once "../../../inc/function.php";

	$key = $_GET['sl'];

	
	$conn->query("DELETE FROM `outnonfixexpense` WHERE `outnonfixexpense`.`sl` = $key");

	header("location: nonFixExp.php");

	

?>