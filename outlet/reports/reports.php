<?php

		include_once "../../inc/function.php";

		session_start();

		if(empty($_SESSION['outName'])){
			header("location: outletLogin.php");
		}

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$outlet = $_SESSION['outName'];
		$today = date('d-m-Y');







?>
<!DOCTYPE HTML>
<html>
<head>
<title>Diana | <?php echo $_SESSION['outName'];?> | Todays Reports</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="../../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="../../css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="../../js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="../../css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="../../plugin/chosen/bootstrap-chosen.css">
  <!-- data-table CSS
		============================================ -->
    <link rel="stylesheet" href="../../plugin/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../../plugin/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="../../plugin/data-table/style.css">


<script src="../../js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="../../js/chartinator.js" ></script>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>REPORTS</b></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right" style="background-color: #00bfff; ">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<?php
											$recei = $conn->query("SELECT * FROM productdistribution WHERE outletStatus='Pending' AND prDistOutleName='$outlet' ORDER BY prDistDate DESC");
											$rrow = $recei-> num_rows;
										?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge"><?php echo $rrow;?></span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have <?php echo $rrow;?> product receive</h3>
												</div>
												<?php
												while($receive = $recei->fetch_assoc()):
											?>
											<li><a href="../../outlet/products/recCategory.php">
												
											   <div class="notification_desc">
												<p><?php
													if(!empty($receive['prFrom'])){
														echo $receive['prFrom'];
													}else{
														echo "<b>Factory</b>";
													}
												?></p>
												<p><span><?php echo $receive['prDistPrName'];?> / <?php echo $receive['prDistDate'];?> </span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a>
											</li>
											<?php endwhile;?>
												<div class="notification_bottom">
													<a href="../../outlet/products/recCategory.php">See all products found</a>
												</div> 
											
										</ul>
									</li>
									<li class="dropdown head-dpdn">

										<?php
											$ord = $conn->query("SELECT * FROM advanceorder WHERE factoryStatus='In Progress'AND outlet='$outlet' ORDER BY orderDelDate ASC");
											$row = $ord->num_rows;
										?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue"><?php echo $row;?></span></a>
										<ul class="dropdown-menu">

											<li>
												<div class="notification_header">
													<h3>You have <span><?php echo $row;?></span> factory processing orders</h3>
												</div>
											</li>
											<?php
												while($order = $ord->fetch_assoc()):
											?>
											<li><a href="../../outlet/products/order.php">
												
											   <div class="notification_desc">
												<p style='color: blue; font-weight: bold'>Factory</p>
												<p><span><?php echo $order['orderDelDate'];?> / <?php echo $order['orderDelTime'];?> </span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a>
											</li>
											<?php endwhile;?>
											 
												<div class="notification_bottom">
													<a href="../../outlet/products/order.php">See all orders</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">

										<?php
											$ord1 = $conn->query("SELECT * FROM advanceorder WHERE factoryStatus='Delivered' AND orderStatus='Confirmed' AND outlet='$outlet' ORDER BY orderDelDate ASC");
											$row1 = $ord1->num_rows;
										?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue1"><?php echo $row1;?></span></a>
										<ul class="dropdown-menu">
											<li>
												<li>
													<div class="notification_header">
														<h3>You have <span><?php echo $row1;?></span> pending orders</h3>
													</div>
												</li>
											</li>
											<?php
												while($order1 = $ord1->fetch_assoc()):
											?>
											<li><a href="../../outlet/products/order.php">
												
											   <div class="notification_desc">
												<p style="color: green; font-weight: bold">Factory</p>
												<p><span><?php echo $order1['orderDelDate'];?> / <?php echo $order1['orderDelTime'];?> </span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a>
											</li>
											<?php endwhile;?>
											<li>
												<div class="notification_bottom">
													<a href="../../outlet/products/order.php">See all pending orders</a>
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
												<span class="prfil-img"><img src="../../images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p class="text-capitalize"><?php echo $_SESSION['outName'];?></p>
													<span>Diana</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../../inc/outletLogout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
<div class="inner-block" >
<!--market updates updates-->
	 <div class="container-fluid" >
		<p class="alert bg-info text-right">Date: <?php echo $date;?></p>

		

				
							
                             
		
	
		<div class="panel panel-info" style="margin-top: 20px">
			 <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15" style="margin-top: 15px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                	<div class="row">
                                		<div class="col-md-12">
		                                    <h3 class="alert alert-info"><b class="text-left">Today Reports :</b ></h3>
		                                    </div>
		                                
                                    </div>
                                    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
		</div>

		



		<div class="row" style="margin-top: 15px;">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="admin-pro-accordion-wrap responsive-mg-b-30">
                            
                            <div class="panel-group adminpro-custon-design" id="accordion">
                                
                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">

                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
									 			Click to view detail <span class="badge">Product Received</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<?php
								                                				
								                                				
								                                	$a = $conn->query("SELECT SUM(distTotalPrice) AS disTotal FROM productdistribution WHERE outletStatus='Confirmed' AND prDistOutleName='$outlet' AND (prDistDate='$today') " );
								                                	$b = $a->fetch_assoc();
								                                				
								                             ?>
									                		<h4 class="alert bg-success"><b>Todays Product Receive:</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $b['disTotal']?></b></h4>
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
								                                				
								                                				
								                                				$pr = $conn->query("SELECT * FROM productdistribution WHERE outletStatus='Confirmed' AND prDistOutleName='$outlet' AND (prDistDate='$today') ORDER BY sl DESC" );
								                                				$j=1;
								                                				while($produ = $pr->fetch_assoc()):
								                                			?>
											                                <tr>
											                                    <td></td>
											                                    <td><?php echo $j++;?></td>
											                                   
											                                    <td class="text-capitalize"><?php echo $produ['prDistPrName']?></td>
											                                    <td><?php echo $produ['prDistQuantity']?></td>
											                                    <td class="text-capitalize"><?php echo $produ['prDistUnit']?></td>
											                                    <td><?php echo $produ['distPerUnitPrice']?></td>
											                                    <td><?php echo $produ['distTotalPrice']?></td>
											                                    
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
                                <div class="panel panel-info">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									 			Click to view detail <span class="badge">Todays Sell</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse panel-ic collapse">
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
									                                                
									                                                <th data-field="Per Unit (BDT)" data-editable="false">Per Unit (BDT)</th>
									                                                <th data-field="Amount(BDT)" data-editable="false">Amount(BDT)</th>
									                                                
									                                                
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
												                                   
												                                    <td><?php echo $pending1['soldPrName']?></td>
												                                    <td><?php echo $pending1['soldPrQuantity']?></td>
												                                    <td><?php echo $pending1['soldPrUnit']?></td>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									 			Click to view detail <span class="badge">Total Expenses</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<?php
									                			$expaa = $conn->query("SELECT SUM(outExpAmount) AS Texp FROM outletexpense WHERE expOutlet='$outlet' AND outExpDate='$today' AND outExpStatus='Confirmed'");
									                			$expaaa = $expaa->fetch_assoc();
									                		?>
									                		<h4 class="alert bg-success"><b>Todays Expense:</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $expaaa['Texp']?></b></h4>
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
								                                                
								                                                <th data-field="Expense Name" data-editable="false">Expense Name</th>
								                                                <th data-field="Details" data-editable="false">Details</th>
								                                                <th data-field="Amount(BDT)" data-editable="false">Amount(BDT)</th>
								                                                <th data-field="Notes" data-editable="false">Notes</th>
								                                                <th data-field="Type" data-editable="false">Type</th>
								                                                
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                            <?php
								                                            	$ou = $conn->query("SELECT * FROM outletexpense WHERE expOutlet='$outlet' AND outExpDate='$today' AND outExpStatus='Confirmed' ORDER BY sl DESC");
								                                            	$nu=1;
								                                            	while($outexp = $ou->fetch_assoc()):
								                                            ?>
																		<tr>
								                                            <td></td>
							                                                <td><?php echo $nu++;?></td>
							                                                
							                                                <td class="text-capitalize"><?php echo $outexp['outExpName']?></td>
							                                                <td class="text-capitalize"><?php echo $outexp['OutExpDetails']?></td>
							                                                
							                                                <td><?php echo $outexp['OutExpAmount']?> <span>TK</span></td>
							                                                <td class="text-capitalize"><?php echo $outexp['OutExpNotes']?></td>
							                                                <td class="text-capitalize"><?php echo $outexp['outExpType']?></td>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
									 			Click to view detail <span class="badge">Ending Balance</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Cash Counter  :</b></h4>
									                	</div>
									                	<div class="col-md-6">
									                		<?php
									                			$Tcasha = $conn->query("SELECT totalCash FROM cash WHERE cashOutlet='$outlet' AND cashDate='$today' AND cashStatus='Confirmed'");
									                			$Tcashb = $Tcasha->fetch_assoc();
									                		?>
									                		<h4 class="alert bg-success"><b>BDT <?php echo $Tcashb['totalCash']?></b></h4>
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
								                                                
								                                                <th data-field="Ending Balance" data-editable="false">Ending Balance</th>
								                                                <th data-field="Cash Reserve" data-editable="false">Cash Reserve</th>
								                                                <th data-field="Total Cash" data-editable="false">Total Cash</th>
								                                                <th data-field="Expected Cash" data-editable="false">Expected Cash</th>
								                                                <th data-field="Cash Gap" data-editable="false">Cash Gap</th>
								                                                
								                                               
								                                            </tr>
								                                        </thead>
								                                        <tbody>
								                                            <?php

								                                        		$Tcash = $conn->query("SELECT * FROM cash WHERE cashOutlet='$outlet' AND cashDate='$today' AND cashStatus='Confirmed' ORDER BY sl DESC");
								                                        		
								                                        		while($Total = $Tcash->fetch_assoc()):
								                                        	?>
								                                            <tr>
								                                                <td></td>
								                                                
								                                                
								                                                <td><?php echo $Total['endingBalance']?></td>
								                                                <td><?php echo $Total['endingReserve']?></td>
								                                                <td><?php echo $Total['totalCash']?></td>
								                                                <td><?php echo $Total['expectedCash']?></td>
								                                                <td><?php echo $Total['cashGap']?></td>
								                                                
								                                                
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

                                <div class="panel panel-danger">
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
									                		<?php
									                			$wast3 = $conn->query("SELECT SUM(wasOutPrice) as was1 FROM wastageoutlet WHERE wasStatus = 'Confirmed' AND wasOutlet='$outlet' AND(wasDate='$today' )");
									                			$wast4 = $wast3->fetch_assoc();
									                		?>
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
								                                    			
								                                    			<td><?php echo $wastage2['wasOutPrName']?></td>
								                                    			<td><?php echo $wastage2['wasOutQuantity']?></td>
								                                    			<td><?php echo $wastage2['wasOutUnit']?></td>
								                                    			<td><?php echo $wastage2['wasOutPrice']?></td>
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

                                

                                
                                
                            </div>
                        </div>
                    </div>
                    
                </div>


		<p class="alert bg-info " style="text-align: center; margin-top:80px">Powered By @ NAHID HASAN BHUIYAN & TEAM</p>

		</div>
		
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
		    <div class="menu" style="margin-top: 150px">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../../outlet.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        
		        <li><a href="#"><i class="fa fa-cart-plus"></i><span>Products</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../outlet/products/recCategory.php">Products Received</a></li>
			            <li id="menu-academico-boletim" ><a href="../../outlet/products/stockCategory.php">Stock Product</a></li>
			            <li id="menu-academico-boletim" ><a href="../../outlet/products/wastageCategory.php">Product Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="../../outlet/products/cat.php">Product Transfer</a></li>
			            <li id="menu-academico-boletim" ><a href="../../outlet/products/order.php">New Advance Order</a></li>
			            
		             </ul>
		         </li>
		          
		        <li id="menu-academico" ><a href="#"><i class="fa fa-money"></i><span>Expenses</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="../../outlet/expense/ending.php">Ending balance</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="../../outlet/expense/outExp.php">Expense</a></li>
		          </ul>
		        </li>
		        
		        
		       
		         <li><a href="../../outlet/reports/reports.php"><i class="fa fa-bar-chart"></i><span>Reports</span></a></li>
		         
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
		<script src="../../js/jquery.nicescroll.js"></script>
		<script src="../../js/scripts.js"></script>
		<!--//scrolling js-->
<script src="../../js/bootstrap.js"> </script>
<!-- mother grid end here-->

<!-- data table JS
		============================================ -->
    <script src="../../plugin/data-table/bootstrap-table.js"></script>
    <script src="../../plugin/data-table/tableExport.js"></script>
    <script src="../../plugin/data-table/data-table-active.js"></script>
    <script src="../../plugin/data-table/bootstrap-table-editable.js"></script>
    <script src="../../plugin/data-table/bootstrap-editable.js"></script>
    <script src="../../plugin/data-table/bootstrap-table-resizable.js"></script>
    <script src="../../plugin/data-table/colResizable-1.5.source.js"></script>
    <script src="../../plugin/data-table/bootstrap-table-export.js"></script>


    <!-- chosen JS
		============================================ -->
    <script src="../../plugin/chosen/chosen.jquery.js"></script>
    <script src="../../plugin/chosen/chosen-active.js"></script>
</body>
</html>                     