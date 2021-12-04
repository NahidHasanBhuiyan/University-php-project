<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];
		$key =$_GET['key'];

		$conn-> query("DELETE FROM `factorywastage` WHERE `factorywastage`.`sl` = $sl");

		header("location: ../wastagePr.php?sl=$key");

?>