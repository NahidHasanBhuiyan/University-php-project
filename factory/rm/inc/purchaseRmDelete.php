<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];
		$sl = $_GET['key'];

		$conn-> query("DELETE FROM `purchaserm` WHERE `purchaserm`.`sl` = $key");

		header("location: ../purchaseRm.php?sl=$sl");
	

?>