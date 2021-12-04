<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];
		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y');
		$time = date('h : i A');
		$factoryStatus = "Pending";

		$conn-> query("UPDATE advanceorder SET orderStatus='Confirmed',color='primary' , outOrderPassDate='$date', outOrderPassTime='$time', factoryStatus='$factoryStatus' WHERE sl=$sl");

		header("location: ../order.php");
	

?>