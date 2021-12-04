<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE usedrm SET usedRmStatus='Confirmed' WHERE sl=$sl");

		header("location: ../usedRm.php");
	

?>