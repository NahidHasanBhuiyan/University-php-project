<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];
		

		$conn-> query("UPDATE cash SET cashStatus='Confirmed' WHERE sl=$sl");

		header("location: ../ending.php");
	

?>