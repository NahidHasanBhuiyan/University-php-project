<?php

		include_once "../../../inc/function.php";

		session_start();


		if(empty($_SESSION['layout'])){
			header("location: ../../../adminLogin.php");
		}
		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$today = date('d-m-Y');

		$sl = $_GET['sl'];
		$outlet123 = $conn->query("SELECT outName FROM croutlet WHERE sl='$sl'");
		$outlet321 = $outlet123->fetch_assoc();
		$outlet = $outlet321['outName'];





?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Reports | Summary</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../../../js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="../../../css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="../../../plugin/chosen/bootstrap-chosen.css">
  <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="../../../plugin/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../../../plugin/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="../../../plugin/data-table/style.css">


<script src="../../../js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="../../../js/chartinator.js" ></script>
    <script type="text/javascript">
        jQuery(function ($) {

            var chart3 = $('#geoChart').chartinator({
                tableSel: '.geoChart',

                columns: [{role: 'tooltip', type: 'string'}],
         
                colIndexes: [2],
             
                rows: [
                    ['China - 2015'],
                    ['Colombia - 2015'],
                    ['France - 2015'],
                    ['Italy - 2015'],
                    ['Japan - 2015'],
                    ['Kazakhstan - 2015'],
                    ['Mexico - 2015'],
                    ['Poland - 2015'],
                    ['Russia - 2015'],
                    ['Spain - 2015'],
                    ['Tanzania - 2015'],
                    ['Turkey - 2015']],
              
                ignoreCol: [2],
              
                chartType: 'GeoChart',
              
                chartAspectRatio: 1.5,
             
                chartZoom: 1.75,
             
                chartOffset: [-12,0],
             
                chartOptions: {
                  
                    width: null,
                 
                    backgroundColor: '#fff',
                 
                    datalessRegionColor: '#F5F5F5',
               
                    region: 'world',
                  
                    resolution: 'countries',
                 
                    legend: 'none',

                    colorAxis: {
                       
                        colors: ['#679CCA', '#337AB7']
                    },
                    tooltip: {
                     
                        trigger: 'focus',

                        isHtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="../../js/skycons.js"></script>
<!--//skycons-icons-->
<style>
	.form-control option{
		padding: 0px 15px;
	}
</style>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left" style="background-color: #00bfff; ">
							<div class="logo-nam">
									 <h1 class="text-center text-capitalize" style="padding: 5px; color: #fff"><b><?php echo $outlet?></b></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right" style="background-color: #00bfff; ">
							<!--notifications of menu start -->
							<div class="profile_details_left">

								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">8</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfile-img"><img src="../../../images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p><?php echo $_SESSION['layout'];?></p>
													<span>Bhuiyan Group</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="../../../inc/adminLogout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block" style="background-image: url('../../../images/bgimg.jpg'); background-size: cover; background-attachment: fixed;">
<!--market updates updates-->
	 <div class="container-fluid" >
		<p class="alert bg-success text-right">Date: <?php echo $date?></p>


		

		
		<div class="panel" >
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-success" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Products Received</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$total4 = $conn->query("SELECT SUM(distTotalPrice) as total5 FROM productdistribution WHERE outletStatus='Confirmed' AND prDistDate='$today' AND prDistOutleName='$outlet'");
                                        		$i=1;
                                        		$total6=$total4->fetch_assoc();
                                        	?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $total6['total5']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-success" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Products Sold</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$sold4 = $conn->query("SELECT SUM(soldTotal) as sold5 FROM soldproduct WHERE soldStatus='Confirmed' AND soldDate='$today' AND soldOutlet='$outlet'");
                                        		
                                        		$sold6=$sold4->fetch_assoc();
                                        	?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $sold6['sold5']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Current Stock</b></h3></button></a>
						
						<div class="panel-footer" >
																				<?php
		
			

			$c = $conn->query("SELECT DISTINCT prDistPrName,prDistUnit FROM productdistribution WHERE prDistOutleName='$outlet'AND outletStatus='Confirmed' ORDER BY sl DESC");
		
		$sum=0;
		while($d=$c->fetch_assoc()){
															                                        			

		 $stockPrName = $d['prDistPrName'];
		$stockUnit = $d['prDistUnit'];



		$mmm = $conn->query("SELECT MAX(stockDate) as stockDate from stock WHERE stockPrName='$stockPrName' AND stockOutletName='$outlet' AND stockStatus='Confirmed' AND stockDate<'$today'");
		$mmmm = $mmm->fetch_assoc();
		 $maax = $mmmm['stockDate'];

		$uu  = $conn->query("SELECT * FROM stock WHERE stockDate='$maax' AND stockStatus='Confirmed' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$uuu = $uu->fetch_assoc();



		$stockQuantity = $uuu['stockQuantity'];

		$sss = $conn->query("SELECT * FROM stock WHERE stockDate='$today' AND stockStatus='Confirmed' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$ssss = $sss->fetch_assoc();
		$stockQuantityUpdate = $ssss['stockQuantity'];



		$rec = $conn->query("SELECT SUM(prDistQuantity) AS prq FROM productdistribution WHERE prDistOutleName='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today' ");
													$recpr = $rec->fetch_assoc();
													$receive = $recpr['prq'];
													$was = $conn->query("SELECT SUM(wasOutQuantity) AS wasq FROM wastageoutlet WHERE wasOutlet='$outlet' AND wasOutPrName='$stockPrName' AND wasStatus='Confirmed' AND wasDate='$today' ");
													$wasquery = $was->fetch_assoc();
													$wastage = $wasquery['wasq'];

													$dist = $conn->query("SELECT SUM(prDistQuantity) as distq FROM productdistribution WHERE prFrom='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today'");
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
													 $sum = $sum+$totalPrice;
													 
		}

									                                        			




									                                        	?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $sum?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Expences</b></h3></button></a>
						
						<div class="panel-footer" >
																			<?php
									                                        		
																					

																					

																				if(empty($_SESSION['taxUser']) AND empty($_SESSION['taxPass']) ){
																					$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND (soldDate='$today') ORDER BY sl DESC");
																				}else{
																					$rr = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'");
																					$rrr = $rr-> num_rows;
																					 $rrrr = ceil(($rrr*30)/100);

																					$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'  ORDER BY sl DESC LIMIT $rrrr");
																				}
												                                	
												                                	$j=1;
												                                	$sum = 0;
												                                	while($pending1 = $pendi1->fetch_assoc()){
												                                		$sum = $sum + $pending1['soldTotal'];
												                                	}

												                                ?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $sum?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
																			<?php
								                                        		$orderr = $conn->query("SELECT COUNT(outlet) as row,outlet FROM advanceorder WHERE (orderStatus='Confirmed' OR orderStatus='Delivered') AND orderDate='$today' AND outlet='$outlet'");
								                                        		$roww = $orderr-> num_rows;
								                                        		

								                                        	?>
						<a href="#"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Advanced Ordes <span class="badge badge-success counter"><?php echo $roww?></span> </b></h3></button></a>
						
						<div class="panel-footer" >
																		
							<h5 class="text-right" ><b>Total <span class="counter"><?php echo $roww?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-danger" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Wastage</b></h3></button></a>
						
						<div class="panel-footer" >
															<?php
									                			$wast3 = $conn->query("SELECT SUM(wasOutPrice) as was1 FROM wastageoutlet WHERE wasStatus = 'Confirmed' AND wasOutlet='$outlet' AND(wasDate='$today' )");
									                			$wast4 = $wast3->fetch_assoc();
									                		?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $wast4['was1']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Product Transfer</b></h3></button></a>
						
						<div class="panel-footer" >
															<?php
									                			$dddd = $conn->query("SELECT SUM(distTotalPrice) as ddd FROM productdistribution WHERE prFrom='$outlet' AND prDistDate='$today' AND outletStatus='Confirmed'");
									                			$dd= $dddd->fetch_assoc();
									                		?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $dd['ddd']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="#"><button class="card-body btn btn-danger" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Distribution Mismatch</b></h3></button></a>
						
						<div class="panel-footer" >
															<?php
									                			$mis = $conn->query("SELECT SUM(mismatchPrice) as misTotal FROM productdistribution WHERE outletStatus='Confirmed' AND prDistOutleName='$outlet' AND prDistDate='$today' AND mismatchStatus='Mismatch'");
									                			$masM=$mis->fetch_assoc();
									                		?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $masM['misTotal']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			
    			

    	</div>
    	</div>
    	
		<div class="row" style="margin-top: 15px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-pro-accordion-wrap responsive-mg-b-30">
                            
                            <div class="panel-group adminpro-custon-design" id="accordion">
                                
                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">

                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									 			Click to view detail <span class="badge">Products Received</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Product Receive:</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo (int)$total6['total5']?></b></h4>
									                	</div>
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                <th data-field="sl">Sl</th>
								                                                
								                                                <th data-field="Product Name" data-editable="false">Product Name</th>
								                                                <th data-field="Unit" data-editable="false">Unit</th>
								                                                <th data-field="Quantity" data-editable="false">Quantity</th>
								                                                <th data-field="Per Unit (BDT)" data-editable="false">Per Unit (BDT)</th>
								                                                <th data-field="Amount(BDT)" data-editable="false">Amount(BDT)</th>
								                                                
								                                                
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                        	<?php
								                                        		$total1 = $conn->query("SELECT SUM(distTotalPrice) as total,prDistPrName,SUM(prDistQuantity) AS totalQuantity,prDistUnit,distPerUnitPrice FROM productdistribution WHERE outletStatus='Confirmed' AND prDistDate='$today' AND prDistOutleName='$outlet' GROUP BY prDistPrName ");
								                                        		$i=1;
								                                        		while($total2=$total1->fetch_assoc()):
								                                        	?>
								                                            
								                                            <tr>
											                                    <td></td>
											                                    <td><?php echo $i++?></td>
											                                    
											                                    <td class="text-capitalize"><?php echo $total2['prDistPrName']?></td>
											                                    <td><?php echo $total2['totalQuantity']?></td>
											                                    <td class="text-capitalize"><?php echo $total2['prDistUnit']?></td>
											                                    <td><?php echo $total2['distPerUnitPrice']?> <span>TK</span></td>
											                                    <td><?php echo $total2['total']?> <span>TK</span></td>
											                                    
											                                </tr>
								                                            <?php endwhile;?>
								                                
											                                
								                                </tbody>
								                                    </table>
									                                                                                                                                                                                                        
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									 			Click to view detail <span class="badge">Products Sold</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Total Sell:</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $sold6['sold5']?></b></h4>
									                	</div>
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  
									                                     <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
									                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
									                                        <thead>
									                                            <tr>
									                                                <th data-field="state" data-checkbox="true"></th>
									                                                <th data-field="sl">Sl</th>
									                                                
									                                                <th data-field="Product Name" data-editable="false">Product Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                
									                                                <th data-field="Per Unit (BDT)" data-editable="false">Per Unit (BDT)</th>
									                                                <th data-field="Amount(BDT)" data-editable="false">Amount(BDT)</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                		<?php
								                                        		$sold = $conn->query("SELECT SUM(soldTotal) as sold1,soldPrName,SUM(soldPrQuantity) AS soldQ,soldPrUnit,soldPerUnitPrice FROM soldproduct WHERE soldStatus='Confirmed' AND soldDate='$today' AND soldOutlet='$outlet' GROUP BY soldPrName ");
								                                        		$i=1;
								                                        		while($sold2=$sold->fetch_assoc()):
								                                        	?>
								                                            
								                                            	<tr>
												                                    <td></td>
												                                    <td><?php echo $i++;?></td>
												                                   
												                                    <td class="text-capitalize"><?php echo $sold2['soldPrName']?></td>
												                                    <td><?php echo $sold2['soldQ']?></td>
												                                    <td class="text-capitalize"><?php echo $sold2['soldPrUnit']?></td>
												                                    <td><?php echo $sold2['soldPerUnitPrice']?> <span>TK</span></td>
												                                    <td><?php echo $sold2['sold1']?> <span>TK</span></td>
												                                    
												                                </tr>
								                                            <?php endwhile;?>
												                               
									                                </tbody>
									                                    </table>
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
									 			Click to view detail <span class="badge">Day End Stock</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <?php
									                	$outlet2 = $conn->query("SELECT prCategoryName,sl FROM category GROUP BY prCategoryName");
													while($outlet1=$outlet2->fetch_assoc()):
														
														 $categor = $outlet1['prCategoryName'];

									                ?>
														<div class="panel panel-success">
						                                    <div class="panel-heading accordion-head">
						                                    	
						                                        <h4 class="panel-title text-center">
						                                            <a data-toggle="collapse" data-parent="#accordion1" href="#<?php echo $outlet1['sl']?>">
															 			Click to view stock of <span class="badge text-capitalize"><?php echo $categor?></span> </a>
						                                        </h4>
						                                    </div>
						                                    <div id="<?php echo $outlet1['sl']?>" class="panel-collapse panel-ic collapse">
						                                        <div class="panel-body admin-panel-content animated bounce">
						                                            <div class="data-table-area mg-tb-15" >
															            <div class="container-fluid">
															                <div class="row">
															                	
															                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
															                        <div class="sparkline13-list">
															                            
															                            <div class="sparkline13-graph">
															                                <div class="datatable-dashv1-list custom-datatable-overright">
															                                    
															                                  
															                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
															                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
															                                        <thead>
															                                            <tr>
															                                                <th data-field="state" data-checkbox="true"></th>
															                                                <th data-field="sl">Sl</th>
															                                                <th data-field="Product Name" data-editable="false">Product Name</th>
															                                                <th data-field="Quantity" data-editable="false">Quantity</th>
															                                                <th data-field="Unit" data-editable="false">Unit</th>
															                                                <th data-field="Paid Amount (BDT)" data-editable="false">Amount (BDT)</th>
															                                                
															                                                
															                                            </tr>
															                                        </thead>
															                                        <tbody>
	<?php
			$c = $conn->query("SELECT DISTINCT prDistPrName,prDistUnit FROM productdistribution WHERE prDistOutleName='$outlet'AND outletStatus='Confirmed' AND catName='$categor' ORDER BY sl DESC");
		$nu = 1;
		$sum=0;
		while($d=$c->fetch_assoc()):
															                                        			

		 $stockPrName = $d['prDistPrName'];
		$stockUnit = $d['prDistUnit'];



		$mmm = $conn->query("SELECT MAX(stockDate) as stockDate from stock WHERE stockPrName='$stockPrName' AND stockOutletName='$outlet' AND stockStatus='Confirmed' AND stockDate<'$today'");
		$mmmm = $mmm->fetch_assoc();
		 $maax = $mmmm['stockDate'];

		$uu  = $conn->query("SELECT * FROM stock WHERE stockDate='$maax' AND stockStatus='Confirmed' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$uuu = $uu->fetch_assoc();



		$stockQuantity = $uuu['stockQuantity'];

		$sss = $conn->query("SELECT * FROM stock WHERE stockDate='$today' AND stockStatus='Confirmed' AND stockOutletName='$outlet' AND stockPrName='$stockPrName'");
		$ssss = $sss->fetch_assoc();
		$stockQuantityUpdate = $ssss['stockQuantity'];



		$rec = $conn->query("SELECT SUM(prDistQuantity) AS prq FROM productdistribution WHERE prDistOutleName='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today' ");
													$recpr = $rec->fetch_assoc();
													$receive = $recpr['prq'];
													$was = $conn->query("SELECT SUM(wasOutQuantity) AS wasq FROM wastageoutlet WHERE wasOutlet='$outlet' AND wasOutPrName='$stockPrName' AND wasStatus='Confirmed' AND wasDate='$today' ");
													$wasquery = $was->fetch_assoc();
													$wastage = $wasquery['wasq'];

													$dist = $conn->query("SELECT SUM(prDistQuantity) as distq FROM productdistribution WHERE prFrom='$outlet' AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today'");
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
													 $sum = $sum+$totalPrice;

															                                        			
															                                        			
															                                        			




															                                        	?>
															                                            <tr>
															                                                <td></td>
															                                                <td><?php echo $nu++;?></td>
															                                                <td><?php echo $stockPrName?></td>
															                                                <td><?php echo $soldq?></td>
															                                                <td><?php echo $stockUnit?></td>
															                                                <td><?php echo $totalPrice?></td>
															                                            </tr>
															                                           <?php endwhile;?>

															                                            
															                                            
															                                            
															                                        </tbody>
															                                        <div class="col-md-6">
																				                		<h4 class="alert bg-success"><b>Todays <?php echo $categor?> Stock:</b></h4>
																				                	</div>
																				                	<div class="col-md-6">
																				                		<h4 class="alert bg-success"><b>BDT <?php echo $sum?></b></h4>
																				                	</div>
															                                    </table>
															                                   
															                                </div>
															                            </div>
															                        </div>
															                    </div>
															                </div>
															            </div>
						        									</div>
						                                        </div>
						                                    </div>
						                                </div>
						                            <?php endwhile;?>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="panel panel-danger">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									 			Click to view detail <span class="badge">Expenses</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  
									                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                <th data-field="sl">Sl</th>
								                                                
								                                                <th data-field="Expense Name" data-editable="false">Expense Name</th>
								                                                <th data-field="Details" data-editable="false">Details</th>
								                                                <th data-field="Amount(TK)" data-editable="false">Amount(BDT)</th>
								                                                <th data-field="Notes" data-editable="false">Notes</th>
								                                                <th data-field="Type" data-editable="false">Type</th>
								                                                
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                        	<?php
									                                        		
																					

																					

																				if(empty($_SESSION['taxUser']) AND empty($_SESSION['taxPass']) ){
																					$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND (soldDate='$today') ORDER BY sl DESC");
																				}else{
																					$rr = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'");
																					$rrr = $rr-> num_rows;
																					 $rrrr = ceil(($rrr*30)/100);

																					$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'  ORDER BY sl DESC LIMIT $rrrr");
																				}
												                                	
												                                	$j=1;
												                                	$sum = 0;
												                                	while($pending1 = $pendi1->fetch_assoc()):
												                                		$sum = $sum + $pending1['soldTotal'];

												                                ?>
									                                
												                                <tr>
												                                    <td></td>
												                                    <td><?php echo $j++?></td>
												                                   
												                                    <td class="text-capitalize"><?php echo $pending1['soldPrName']?></td>
												                                    <td><?php echo $pending1['soldPrQuantity']?></td>
												                                    <td class="text-capitalize"><?php echo $pending1['soldPrUnit']?></td>
												                                    <td><?php echo $pending1['soldPerUnitPrice']?> <span>TK</span></td>
												                                    <td><?php echo $pending1['soldTotal']?> <span>TK</span></td>
												                                    
												                                </tr>
												                                <?php endwhile?>
									                               			 </tbody>
									                               			 <div class="col-md-6">
									                               			 	
														                		<h4 class="alert bg-success"><b>Todays Total Sell:</b></h4>
														                	</div>
														                	<div class="col-md-6">
														                		<h4 class="alert bg-success"><b>BDT <?php echo $sum?></b></h4>
														                	</div>
									                                    </table>
                                   
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									 			Click to view detail <span class="badge">Advance Orders</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  
									                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                
								                                                <th data-field="Sl" data-editable="false">Sl</th>
								                                                <th data-field="Customer Name" data-editable="false">Customer Name</th>
								                                                <th data-field="Order Details" data-editable="false">Order Details</th>
								                                                <th data-field="Order Type" data-editable="false">Order Type</th>
								                                                <th data-field="Amount" data-editable="false">Amount</th>
								                                                
								                                               
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                        	<?php
								                                        		$orderr = $conn->query("SELECT COUNT(outlet) as row,outlet FROM advanceorder WHERE orderStatus='Confirmed' AND orderDate='$today' GROUP BY outlet");
								                                        		$row = $orderr->fetch_assoc();
								                                        		$order = $conn->query("SELECT orderDetails,orderAmount,orderType,orderCustomerName FROM advanceorder WHERE (orderStatus='Confirmed' OR orderStatus='Delivered') AND orderDate='$today' AND outlet='$outlet'");
								                                        		$i=1;
								                                        		$sum=0;
								                                        		while($order1=$order->fetch_assoc()):
								                                        			$sum=$sum+$order1['orderAmount'];
								                                        			

								                                        	?>
								                                            <tr>
								                                                <td></td>
								                                                <td><?php echo $i++;?></td>
								                                                <td class="text-capitalize"><?php echo $order1['orderCustomerName']?></td>
								                                                <td class="text-capitalize"><?php echo $order1['orderDetails']?></td>
								                                                <td class="text-capitalize"><?php echo $order1['orderType']?></td>
								                                                <td><?php echo $order1['orderAmount']?> <span>TK</span></td>
								                                                
								                                               
								                                                
								                                            </tr>
								                                            <?php endwhile;?>
								                                            
								                                        </tbody>
								                                        <div class="col-md-6">
													                		<h4 class="alert bg-success"><b>Todays Order :</b></h4>
													                	</div>
													                	<div class="col-md-6">
													                		<h4 class="alert bg-success">BDT <b><?php echo (int)$sum?></b></h4>
													                	</div>
								                                    </table>
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									 			Click to view detail <span class="badge">Wastage</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Wastage :</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		
									                		<h4 class="alert bg-success"><b>BDT <?php echo (double)$wast4['was1']?></b></h4>
									                	</div>
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                   

									                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                <th data-field="sl">Sl</th>
								                                                
								                                                <th data-field="Product Name" data-editable="false">Product Name</th>
								                                                <th data-field="Quantity" data-editable="false">Quantity</th>
								                                                <th data-field="Unit" data-editable="false">Unit</th>
								                                                
								                                                <th data-field="Price (BDT)" data-editable="false">Price (BDT)</th>
								                                                
								                                                <th data-field="Notes" data-editable="false">Notes</th>
								                                                
								                                                
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                
																			<?php
								                                        		$today = date('d-m-Y');
																				
																				
											                                	$wast2 = $conn->query("SELECT * FROM wastageoutlet WHERE wasStatus = 'Confirmed' AND wasOutlet='$outlet' AND(wasDate='$today' ) ORDER BY sl DESC");
								                            				$i=1;
								                            				while($wastage2 = $wast2->fetch_assoc() ):


											                                ?>
								                                
																			<tr>
																				<td></td>
																				<td><?php echo $i++;?></td>
								                                    			
								                                    			<td class="text-capitalize"><?php echo $wastage2['wasOutPrName']?></td>
								                                    			<td><?php echo $wastage2['wasOutQuantity']?></td>
								                                    			<td class="text-capitalize"><?php echo $wastage2['wasOutUnit']?></td>
								                                    			<td><?php echo $wastage2['wasOutPrice']?> <span>TK</span></td>
								                                    			<td><?php echo $wastage2['wasOutNotes']?></td>
											                                </tr>
											                            <?php endwhile;?>
								                                		</tbody>
								                                    </table>
								
									                                  
									                                    
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
									 			Click to view detail <span class="badge">Product Transfer</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Transfer :</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		
									                		<h4 class="alert bg-success"><b><?php echo (double)$dd['ddd']?></b></h4>
									                	</div>
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  
									                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                
								                                                <th data-field="Sl" data-editable="false">Sl</th>
								                                                <th data-field="To Outlet" data-editable="false">To Outlet</th>
								                                                <th data-field="Product Name" data-editable="false">Product Name</th>
								                                                <th data-field="Quantity" data-editable="false">Quantity</th>
								                                                <th data-field="Unit" data-editable="false">Unit</th>
								                                                <th data-field="Total Cash" data-editable="false">Amount</th>
								                                                
								                                               
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                        	<?php
								                                        		$dddd = $conn->query("SELECT SUM(distTotalPrice) as ddddd,prDistOutleName,prDistPrName,SUM(prDistQuantity) as aaa,prDistUnit FROM productdistribution WHERE prFrom='$outlet' AND prDistDate='$today' AND outletStatus='Confirmed' GROUP BY prDistPrName");
								                                        		while($aa=$dddd->fetch_assoc()):
								                                        	?>
								                                            <tr>
								                                                <td></td>
								                                                
								                                                <td>1</td>
								                                                <td class="text-capitalize"><?php echo $aa['prDistOutleName']?></td>
								                                                <td class="text-capitalize"><?php echo $aa['prDistPrName']?></td>
								                                                <td><?php echo $aa['aaa']?></td>
								                                                <td class="text-capitalize"><?php echo $aa['prDistUnit']?></td>
								                                                <td><?php echo $aa['ddddd']?> <span>TK</span></td>
								                                               
								                                            </tr>
								                                            <?php endwhile;?>
								                                        </tbody>
								                                    </table>
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">
									 			Click to view detail <span class="badge">Diatribution mismatch</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		
									                		<h4 class="alert bg-success"><b>Total Mismatch :</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b><?php echo (double)$masM['misTotal']?></b></h4>
									                	</div>
									                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									                        <div class="sparkline13-list">
									                            
									                            <div class="sparkline13-graph">
									                                <div class="datatable-dashv1-list custom-datatable-overright">
									                                    
									                                  
									                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
								                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
								                                        <thead>
								                                            <tr>
								                                                <th data-field="state" data-checkbox="true"></th>
								                                                
								                                                <th data-field="Sl" data-editable="false">Sl</th>
								                                                
								                                                <th data-field="Product From" data-editable="false">Product From</th>
								                                               
								                                                <th data-field="Product Name" data-editable="false">Product Name</th>
								                                                
								                                                <th data-field="New Price" data-editable="false">New Amount</th>
								                                                <th data-field="Mismatch" data-editable="false">Mismatch</th>
								                                                
								                                                
								                                               
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                        	<?php
													                			$miss = $conn->query("SELECT prFrom,prDistPrName,distTotalPrice,mismatchPrice FROM productdistribution WHERE outletStatus='Confirmed' AND mismatchStatus='Mismatch' AND prDistOutleName='$outlet' AND prDistDate='$today'");
													                			while($masMm=$miss->fetch_assoc()):
													                		?>
								                                            <tr>
								                                                <td></td>
								                                                
								                                                <td>1</td>
								                                                
								                                                <td class="text-capitalize"><?php echo $masMm['prFrom']?></td>
								                                                
								                                                <td class="text-capitalize"><?php echo $masMm['prDistPrName']?></td>
								                                                <td><?php echo $masMm['distTotalPrice']?> <span>TK</span></td>
								                                                <td>+ <?php echo $masMm['mismatchPrice']?> - <span>TK</span></td>
								                                               
								                                            </tr>
								                                        <?php endwhile;?>
								                                            
								                                            
								                                        </tbody>
								                                    </table>
									                                   
									                                </div>
									                            </div>
									                        </div>
									                    </div>
									                </div>
									            </div>
        									</div>
                                        </div>
                                    </div>
                                </div>

                                

                                
                                
                            </div>
                        </div>
                    </div>
                    
         </div>
	





		

		</div>
		<p class="alert bg-success " style="text-align: center; margin-top:100px">Powered By @ NAHID HASAN BHUIYAN & TEAM</p>
<!--market updates end here-->
<!--mainpage chit-chating-->

<!--main page chart layer2-->

<!--climate start here-->

<!--climate end here-->
</div>
<!--inner block end here-->

</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../../../admin.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="../../../admin/factory/ad_factory.php"><i class="fa fa-home"></i><span>Factory</span><span></span></a>
		        </li>
		        <li id="menu-comunicacao" ><a href="../../../admin/outlet/ad_outlet.php"><i class="fa fa-th-large nav_icon"></i><span>Outlet</span></a>
		        </li>
		        <li><a href="#"><i class="fa fa-edit"></i><span>Create Items</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../../admin/create/outlet/crOutlet.php">Create Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/rowMaterial/crSrc.php">Create Source</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/rowMaterial/crRm.php">Create RM</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/product/crPr.php">Create Product</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/factoryExp/fixExp.php">Factory Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/factoryExp/nonFixExp.php">Factory Non Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/outletExp/fixExp.php">Outlet Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/create/outletExp/nonFixExp.php">Outlet Non Fix Exp.</a></li>
		             </ul>
		         </li>
		          
		        <li id="menu-academico" ><a href="#"><i class="fa fa-list"></i><span>Reports</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="../../../admin/reports/ad_reports.php">Factory</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="../../../admin/reports/out_sum.php">Outlet Summary</a></li>		           
		            <li id="menu-academico-avaliacoes" ><a href="../../../admin/reports/byout_sum.php">By Outlet Summary</a></li>		           
		          </ul>
		        </li>
		        
		        
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Monthly Analysis</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../../admin/monthly/sell.php">Sell Graph By Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/monthly/distGap.php">RM Purchase</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/monthly/mismatch.php">Distribution Mismatch</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/monthly/facWastage.php">Factory Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/monthly/outWastage.php">Outlet Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="../../../admin/monthly/othWastage.php">Total Production</a></li>
		             </ul>
		        </li>
		         <li><a href="../../../admin/best/best.php"><i class="fa fa-star"></i><span>Best Performance</span></a></li>
		         
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="../../../js/jquery.nicescroll.js"></script>
		<script src="../../../js/scripts.js"></script>
		<!--//scrolling js-->
<script src="../../../js/bootstrap.js"> </script>
<!-- mother grid end here-->

<!-- data table JS
		============================================ -->
    <script src="../../../plugin/data-table/bootstrap-table.js"></script>
    <script src="../../../plugin/data-table/tableExport.js"></script>
    <script src="../../../plugin/data-table/data-table-active.js"></script>
    <script src="../../../plugin/data-table/bootstrap-table-editable.js"></script>
    <script src="../../../plugin/data-table/bootstrap-editable.js"></script>
    <script src="../../../plugin/data-table/bootstrap-table-resizable.js"></script>
    <script src="../../../plugin/data-table/colResizable-1.5.source.js"></script>
    <script src="../../../plugin/data-table/bootstrap-table-export.js"></script>


    <!-- chosen JS
		============================================ -->
    <script src="../../../plugin/chosen/chosen.jquery.js"></script>
    <script src="../../../plugin/chosen/chosen-active.js"></script>

    <!-- counter-->

	<script src="../../../plugin/js/jquery.min.js"></script>
	<script src="../../../plugin/js/jquery.counterup.js"></script>
	<script src="../../../plugin/js/waypoints.js"></script>
	<script src="../../../plugin/js/bootstrap.min.js"></script>
	<script src="../../../plugin/js/custom.js"></script>
	<script src="../../../plugin/js/slick.js"></script>




<!-- counter end-->
</body>
</html>               