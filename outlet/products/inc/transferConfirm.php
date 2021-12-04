
<?php
		include_once "../../../inc/function.php";

		$sll  = $_GET['sll'];
		$sl = $_GET['sl'];
		$key = $_GET['key'];

		$conn-> query("UPDATE productdistribution SET outletStatus='Pending', prDistStatus='Confirmed' WHERE sl=$sll");

		header("location: ../prDist.php?sl=$sl&key=$key");
	

?>