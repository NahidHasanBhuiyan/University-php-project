<?php
		include_once "../../../inc/function.php";
		date_default_timezone_set("Asia/Dhaka");
		$soldDate = date('d-m-Y');
		$month = date('m');
		$year = date('Y');
		
		 

		$sl  = $_GET['sl'];
		$key  = $_GET['key'];

		$u  = $conn->query("SELECT * FROM stock WHERE sl='$key'");
		$find = $u->fetch_assoc();
		$outlet = $find['stockOutletName'];
		$stockPrName = $find['stockPrName'];
		$stockUnit = $find['stockUnit'];
		$mmm = $conn->query("SELECT MAX(stockDate) as stockDate from stock WHERE stockPrName='$stockPrName' AND stockOutletName='$outlet' AND stockDate<'$soldDate'");
		$mmmm = $mmm->fetch_assoc();
		 $maax = $mmmm['stockDate'];

		$uu  = $conn->query("SELECT * FROM stock WHERE stockDate='$maax' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$uuu = $uu->fetch_assoc();



		$stockQuantity = $uuu['stockQuantity'];

		$sss = $conn->query("SELECT * FROM stock WHERE stockDate='$soldDate' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$ssss = $sss->fetch_assoc();
		$stockQuantityUpdate = $ssss['stockQuantity'];



		$rec = $conn->query("SELECT SUM(prDistQuantity) AS prq FROM productdistribution WHERE prDistOutleName='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$soldDate' ");
													$recpr = $rec->fetch_assoc();
													$receive = $recpr['prq'];
													$was = $conn->query("SELECT SUM(wasOutQuantity) AS wasq FROM wastageoutlet WHERE wasOutlet='$outlet' AND wasOutPrName='$stockPrName' AND wasStatus='Confirmed' AND wasDate='$soldDate' ");
													$wasquery = $was->fetch_assoc();
													$wastage = $wasquery['wasq'];

													$dist = $conn->query("SELECT SUM(prDistQuantity) as distq FROM productdistribution WHERE prFrom='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$soldDate'");
													$distrib = $dist->fetch_assoc();
													$distribution = $distrib['distq'];
													
													$soldq = ($receive+$stockQuantity)-($stockQuantityUpdate+$wastage+$distribution);

													 $soldq;

		$pr = $conn->query("SELECT * FROM product WHERE prName = '$stockPrName' ");

												$prod = $pr->fetch_assoc();
												$prNameCheak = $prod['prName'];
												$prUnitCheak = $prod['prUnit'];
												
													 $perUnitPrice = $prod['prFixedPrice']/$prod['prQuantity'];
													 $totalPrice = $perUnitPrice*$soldq;

											
                                			
                                			
                                			$soldStatus = "Confirmed";
                                			

		$conn->query("INSERT INTO soldproduct (soldOutlet,soldPrName,soldPrQuantity,soldPrUnit,soldPerUnitPrice,soldTotal,soldStatus,soldDate,todaySold,totalQuantity,soldMonth,soldYear) VALUES('$outlet','$stockPrName','$soldq','$stockUnit','$perUnitPrice','$totalPrice','$soldStatus','$soldDate','$totalPrice','$soldq','$month','$year')");


		$conn-> query("UPDATE soldproduct SET soldYear='$year' WHERE indicator='indicator'");

		$conn->query("UPDATE stock SET stockStatus='Confirmed' WHERE sl='$key'");

		header("location: ../sold.php?sl=$sl");


		

		
	

?>