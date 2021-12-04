<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$wasDate = date('d-m-Y');
		$month=date('m');
		$year=date('Y');
		 

		$key  = $_GET['key'];
		$sl  = $_GET['sl'];


		$total = $conn->query("SELECT wasOutPrice,wasOutlet from wastageoutlet WHERE sl=$key");
		$totalPr=$total->fetch_assoc();
		$totalPrice = $totalPr['wasOutPrice'];
		$outlet = $totalPr['wasOutlet'];
		

		$sold1=$conn->query("SELECT SUM(wasOutPrice) as soo FROM wastageoutlet WHERE wasOutlet='$outlet' AND wasDate='$wasDate' AND wasStatus='Confirmed'");
		$sold2=$sold1->fetch_assoc();
		 $sold3 = $sold2['soo'];
		 $sold4 = $sold3+$totalPrice;

		$conn-> query("UPDATE wastageoutlet SET wasStatus='Confirmed',wasMonth='$month',wasYear='$year' WHERE sl=$key");

		$conn-> query("UPDATE wastageoutlet SET totalWastage='$sold4' WHERE wasDate='$wasDate' AND wasOutlet='$outlet'");
		$conn-> query("UPDATE wastageoutlet SET wasYear='$year' WHERE indicate='indicate'");

		header("location: ../wastagePro.php?sl=$sl");
	

?>