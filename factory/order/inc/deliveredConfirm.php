<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['key'];
		$sl = $_GET['sl'];

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y');
		$time = date('h : i A');



		$conn-> query("UPDATE advanceorder SET factoryStatus='Delivered', color='success', facOrderPassDate='$date',facOrderPassTime='$time' WHERE sl=$key");

		header("location: ../outletOrder.php?sl=$sl");

		
	

?>