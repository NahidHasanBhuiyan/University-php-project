<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$month = date('m');
		$year = date('Y');

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE wastagerm SET wastageRmStatus='Confirmed',wasMonth='$month',wasYear='$year' WHERE sl=$sl");
		$conn-> query("UPDATE wastagerm SET wasYear='$year' WHERE indicate='indicate'");

		header("location: ../wastageRm.php");
	

?>