<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['key'];
		$sl = $_GET['sl'];



		$conn-> query("UPDATE advanceorder SET factoryStatus='In Progress', color='warning' WHERE sl=$key");

		header("location: ../outletOrder.php?sl=$sl");

		
	

?>