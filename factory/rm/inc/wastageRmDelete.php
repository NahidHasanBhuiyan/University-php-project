<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `wastagerm` WHERE `wastagerm`.`sl` = $key");

		header("location: ../wastageRm.php");
	

?>