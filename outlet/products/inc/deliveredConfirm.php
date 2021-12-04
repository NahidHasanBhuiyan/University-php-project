<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$today = date('d-m-Y');

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE advanceorder SET orderStatus='Delivered', delivered='$today' WHERE sl=$sl");

		header("location: ../order.php");
	

?>