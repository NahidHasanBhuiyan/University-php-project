<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['key'];
		$sl  = $_GET['sl'];

		$conn-> query("DELETE FROM `wastageoutlet` WHERE `wastageoutlet`.`sl` = $key");

		header("location: ../wastagePro.php?sl=$sl");
	

?>