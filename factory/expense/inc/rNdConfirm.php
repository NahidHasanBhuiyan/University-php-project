<?php
		include_once "../../../inc/function.php";

		$sl  = $_GET['sl'];

		$conn-> query("UPDATE rndusedrm SET rNdStatus='Confirmed' WHERE sl=$sl");

		header("location: ../rNd.php");
	

?>