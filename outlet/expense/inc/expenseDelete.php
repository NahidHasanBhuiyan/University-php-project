<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `outletexpense` WHERE `outletexpense`.`sl` = $key");

		header("location: ../outExp.php");
	

?>