<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];
		$key  = $_GET['key'];

		$conn-> query("DELETE FROM `stock` WHERE `stock`.`sl` = $key");

		header("location: ../sold.php?sl=$sl");
	

?>