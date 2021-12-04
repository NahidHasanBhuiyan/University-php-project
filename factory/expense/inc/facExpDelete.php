<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `factoryexpense` WHERE `factoryexpense`.`sl` = $key");

		header("location: ../fexpense.php");
	

?>