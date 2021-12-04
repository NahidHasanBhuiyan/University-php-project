<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE factoryexpense SET facExpStatus='Confirmed' WHERE sl=$sl");

		header("location: ../fexpense.php");
	

?>