<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];
		$sl =$_GET['key'];

		$conn-> query("DELETE FROM `madeproduct` WHERE `madeproduct`.`sl` = $key");

		header("location: ../prMade.php?sl=$sl");
	

?>