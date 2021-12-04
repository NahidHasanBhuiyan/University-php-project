<?php
		include_once "../../../inc/function.php";

		$sll  = $_GET['sll'];
		$sl = $_GET['sl'];
		$key = $_GET['key'];

		$conn-> query("DELETE FROM `productdistribution` WHERE `productdistribution`.`sl` = $sll");

		header("location: ../prDist.php?sl=$sl&key=$key");
	

?>