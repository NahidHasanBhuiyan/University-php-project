<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$month = date('m');
		$year = date('Y');

		$sl  = $_GET['sl'];
		$key =$_GET['key'];

		

		$conn-> query("UPDATE madeproduct SET madePrStatus='Confirmed',mMonth='$month',mYear='$year' WHERE sl=$sl");
		
		$conn-> query("UPDATE madeproduct SET mYear='$year' WHERE indicate='indicate'");

		header("location: ../prMade.php?sl=$key");
	

?>