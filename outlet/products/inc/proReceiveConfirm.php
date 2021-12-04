<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];
		$key = $_GET['key'];
		

		$conn-> query("UPDATE productdistribution SET outletStatus='Confirmed' WHERE sl=$sl");

		header("location: ../proReceive.php?sl=$key");
	

?>