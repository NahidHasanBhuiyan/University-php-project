<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE outletexpense SET outExpStatus='Confirmed' WHERE sl=$sl");

		header("location: ../outExp.php");
	

?>