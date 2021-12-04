<?php
		include_once "../../../inc/function.php";

		$key  = $_GET['sl'];

		$conn-> query("DELETE FROM `usedrm` WHERE `usedrm`.`sl` = $key");

		header("location: ../usedRm.php");
	

?>