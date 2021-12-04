<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `rndusedrm` WHERE `rndusedrm`.`sl` = $key");

		header("location: ../rNd.php");
	

?>