<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `advanceorder` WHERE `advanceorder`.`sl` = $key");

		header("location: ../order.php");
	

?>