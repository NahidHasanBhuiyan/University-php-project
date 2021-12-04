<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$month = date('m');
		$year = date('Y');

		$sl  = $_GET['sl'];
		$key = $_GET['key'];

		$conn-> query("UPDATE purchaserm SET pStatus='Confirmed',pDisplay='none',pMonth='$month',pYear='$year' WHERE sl=$sl");
		
		$conn-> query("UPDATE purchaserm SET pYear='$year' WHERE indicate='indicate'");

		header("location: ../purchaseRm.php?sl=$key");
	

?>