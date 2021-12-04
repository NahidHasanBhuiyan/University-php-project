<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$month = date('m');
		$year = date('Y');

		$sl  = $_GET['sl'];
		$key =$_GET['key'];

		

		$conn-> query("UPDATE factorywastage SET facWasPrStatus='Confirmed' WHERE sl=$sl");
		
		

		header("location: ../wastagePr.php?sl=$key");
	

?>