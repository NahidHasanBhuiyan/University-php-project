<?php

		include_once "../../inc/function.php";

		session_start();

		if(empty($_SESSION['facLayout'])){
			header("location: ../../factoryLogin.php");
		}

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$today = date('d-m-Y');







?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Reports | Factory Reports</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>Factory Reports</b></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right" style="background-color: #00bfff; ">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">0</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 0 new messages</h3>
												</div>
											
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<?php
											$ord = $conn->query("SELECT * FROM advanceorder WHERE factoryStatus='Pending' ORDER BY orderDelDate ASC");
											$row = $ord->num_rows;
										?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue"><?php echo $row;?></span></a>
										<ul class="dropdown-menu">

											<li>
												<div class="notification_header">
													<h3>You have <span><?php echo $row;?></span> new orders</h3>
												</div>
											</li>
											<?php
												while($order = $ord->fetch_assoc()):
											?>
											<li><a href="../../factory/order/order.php">
												
											   <div class="notification_desc">
												<p><?php echo $order['outlet'];?></p>
												<p><span><?php echo $order['orderDate'];?> / <?php echo $order['orderTime'];?> </span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a>
											</li>
											<?php endwhile;?>
											 
												<div class="notification_bottom">
													<a href="../../factory/order/order.php">See all orders</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<?php
											$ord1 = $conn->query("SELECT * FROM advanceorder WHERE factoryStatus='In Progress' ORDER BY orderDelDate ASC");
											$row1 = $ord1->num_rows;
										?>
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1"><?php echo $row1;?></span></a>
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
											<li><a href="../../factory/order/order.php">
												
											   <div class="notification_desc">
												<p><?php echo $order1['outlet'];?></p>
												<p><span><?php echo $order1['orderDelDate'];?> / <?php echo $order1['orderDelTime'];?> </span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a>
											</li>
											<?php endwhile;?>
											<li>
												<div class="notification_bottom">
													<a href="../../factory/order/order.php">See all pending orders</a>
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
													<p><p><?php echo $_SESSION['facLayout']?></p></p>
													<span>Bhuiyan Group</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="../../inc/factoryLogout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
		<p class="alert bg-info text-right">Date: <?php echo $date?></p>

		

				
							
                             
		
	
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
		                                    <h3 class="alert alert-info"><b class="text-left">Factory Today Reports :</b ></h3>
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
									 			Click to view detail <span class="badge">Stock RM</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1" class="panel-collapse panel-ic collapse">
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
									                                                <th data-field="RM Name" data-editable="false">RM Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php 
									                                        		$a = $conn->query("SELECT DISTINCT pRmName FROM purchaserm WHERE pStatus='Confirmed' ORDER BY sl DESC");
									                                        		$sum = 0;
									                                        		$nu=1;
									                                        		while($b=$a->fetch_assoc()):
									                                        			$item = $b['pRmName'];
									                                        			$d = $conn->query("SELECT SUM(pRmAmount) AS s,pRmUnit,SUM(pRmQuantity) AS c FROM purchaserm WHERE pRmName='$item' AND pStatus='Confirmed' GROUP BY pRmName");

									                                        			$e = $d->fetch_assoc();
									                                        			$unit = $e['pRmUnit'];
									                                        			$purchaseTk = $e['s'];
									                                        			$f = $e['c'];
									                                        			$g = $conn->query("SELECT SUM(usedRmPrice) AS t,SUM(usedRmQuantity) AS h FROM usedrm WHERE usedRmName='$item' AND usedRmStatus='Confirmed' GROUP BY usedRmName");
									                                        			$i=$g->fetch_assoc();
									                                        			$j = $i['h'];
									                                        			$usedTk = $i['t'];
									                                        			
									                                        			$k = $conn->query("SELECT SUM(wastageRmPrice) AS u,SUM(wastageRmQuantity) AS l FROM wastagerm WHERE wastageRmName='$item' AND wastageRmStatus='Confirmed' GROUP BY wastageRmName");
									                                        			$m = $k->fetch_assoc();
									                                        			$n = $m['l'];
									                                        			$wastageTk = $m['u'];


									                                        			$o = $conn->query("SELECT rNdPrice,SUM(rNdQuantity) AS p FROM rndusedrm WHERE rNdRmName='$item' AND rNdStatus='Confirmed' GROUP BY rNdRmName");
									                                        			$q = $o->fetch_assoc();
									                                        			$r = $q['p'];
									                                        			$rndTk = $q['rNdPrice'];

									                                        			$finalQuantity = $f-($j+$n+$r);
									                                        			$finalTaka = $purchaseTk-($usedTk+$wastageTk+$rndTk);
									                                        			$sum = $sum +  $finalTaka;

									                                        	?>
									                                        	<tr>
									                                        		<td></td>
									                                        		<td><?php echo $nu++?></td>
									                                        		<td class="text-capitalize"><?php echo $item?></td>
									                                        		<td><?php echo $finalQuantity?></td>
									                                        		<td class="text-capitalize"><?php echo $unit?></td>
									                                        		
									                                        	</tr>
									                                        <?php endwhile;?>
									                                        <div class="col-md-6">
														                		<h4 class="alert bg-success"><b>Todays Stock:</b></h4>
														                	</div>
														                	<div class="col-md-6">
														                		<h4 class="alert bg-success"><b>BDT </b></h4>
														                	</div>

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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse100">
									 			Click to view detail <span class="badge">Stock Product</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse100" class="panel-collapse panel-ic collapse">
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
									                                                <th data-field="RM Name" data-editable="false">Product Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                <th data-field="Price" data-editable="false">Price</th>
									                                                
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php 
									                                        		$abc = $conn->query("SELECT DISTINCT madePrName FROM madeproduct WHERE madePrStatus='Confirmed' ORDER BY sl DESC");
									                                        		$sum = 0;
									                                        		$nu=1;
									                                        		while($bca=$abc->fetch_assoc()):
									                                        			$item = $bca['madePrName'];
									                                        			$dab = $conn->query("SELECT SUM(totalPrice) AS sab,madePrUnit,SUM(madePrQuantity) AS cab FROM madeproduct WHERE madePrName='$item' AND madePrStatus='Confirmed' GROUP BY madePrName");

									                                        			$eab = $dab->fetch_assoc();
									                                        			$unit = $eab['madePrUnit'];
									                                        			$purchaseTk = $eab['sab'];
									                                        			$fab = $eab['cab'];
									                                        			$gab = $conn->query("SELECT SUM(distTotalPrice) AS tab,SUM(prDistQuantity) AS hab FROM productdistribution WHERE prDistPrName='$item' AND dist='0' AND outletStatus='Confirmed' GROUP BY prDistPrName");
									                                        			$iab=$gab->fetch_assoc();
									                                        			 $jab = $iab['hab'];
									                                        			 $usedTk = $iab['tab'];
									                                        			
									                                        			$kab = $conn->query("SELECT SUM(facWasPrPrice) AS uab,SUM(facWasPrQuantity) AS lab FROM factorywastage WHERE facWasPrName='$item' AND facWasPrStatus='Confirmed' GROUP BY facWasPrName");
									                                        			$mab = $kab->fetch_assoc();
									                                        			$nab = $mab['lab'];
									                                        			$wastageTk = $mab['uab'];


									                                        			

									                                        			$finalQuantity = $fab-($jab+$nab);
									                                        			$finalTaka = $purchaseTk-($usedTk+$wastageTk);
									                                        			$sum = $sum +  $finalTaka;

									                                        	?>
									                                        	<tr>
									                                        		<td></td>
									                                        		<td><?php echo $nu++?></td>
									                                        		<td class="text-capitalize"><?php echo $item?></td>
									                                        		<td><?php echo $finalQuantity?></td>
									                                        		<td class="text-capitalize"><?php echo $unit?></td>
									                                        		<td class="text-capitalize"><?php echo $finalTaka?> <span>TK</span></td>
									                                        		
									                                        	</tr>
									                                        <?php endwhile;?>
									                                        <div class="col-md-6">
														                		<h4 class="alert bg-success"><b>Todays Stock:</b></h4>
														                	</div>
														                	<div class="col-md-6">
														                		<h4 class="alert bg-success"><b>BDT </b><?php echo $sum?></h4>
														                	</div>

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
									 			Click to view detail <span class="badge">Purchased RM</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse2" class="panel-collapse panel-ic collapse">
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
									                                                <th data-field="RM Name" data-editable="false">RM Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                               
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                           
									                                            
												                                <?php
									                                        		$today = date('d-m-Y');
																					

																					

																				if(empty($_SESSION['facTaxUser']) AND empty($_SESSION['facTaxPass']) ){
																					$frm = $conn->query("SELECT * FROM purchaserm WHERE (pStatus= 'Confirmed' AND  pDate= '$today') ORDER BY sl DESC ");
																				}else{
																					$rr = $conn->query("SELECT * FROM purchaserm WHERE (pStatus= 'Confirmed' AND  pDate= '$today') ORDER BY sl DESC ");
																					$rrr = $rr-> num_rows;
																					 $rrrr = ceil(($rrr*30)/100);

																					$frm = $conn->query("SELECT * FROM purchaserm WHERE (pStatus= 'Confirmed' AND  pDate= '$today') ORDER BY sl DESC LIMIT $rrrr");
																				}
												                                	
												                                	$j=1;
												                                		$sum=0;
												                                	while($fpur=$frm->fetch_assoc()):
												                                			

												                                ?>
									                                
																				<tr >
																					<td></td>
												                                    <td><?php echo $j++;?></td>
												                                    <td><?php echo $fpur['pRmName']?></td>
												                                    <td><?php echo $fpur['pRmQuantity']?></td>
												                                    <td><?php echo $fpur['pRmUnit']?></td>
												                                   
												                                    
												                                    
												                                </tr>
												                                <?php endwhile;?>
									                                            

									                                            
									                                            
									                                            
									                                        </tbody>
									                                        <div class="col-md-6">
											                						<h4 class="alert bg-success"><b>Todays Purchased RM:</b></h4>
											                							</div>
											                	
											                					
											          						      	<div class="col-md-6">
											         					       		<h4 class="alert bg-success"><b>BDT </b></h4>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
									 			Click to view detail <span class="badge">Used RM</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse3" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Used RM:</b></h4>
									                	</div>
									                	<?php
									                		$usedRmTo = $conn->query("SELECT SUM(usedRmPrice) AS usedRmTotal FROM usedrm WHERE (usedRmStatus = 'Confirmed' AND usedRmDate='$today')");
									                		$usedRmTotal = $usedRmTo->fetch_assoc();
									                	?>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $usedRmTotal['usedRmTotal']?></b></h4>
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
									                                                <th data-field="RM Name" data-editable="false">RM Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                <th data-field="Paid Amount (BDT)" data-editable="false">Amount (BDT)</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php
									                               					$today = date('d-m-Y');
																					
																					$j=1;
									                               					$usedrm = $conn->query("SELECT * FROM usedrm WHERE (usedRmStatus = 'Confirmed' AND usedRmDate='$today') ORDER BY sl DESC");
									                               					while($used= $usedrm->fetch_assoc()):
									                               				?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
									                                                <td class="text-capitalize"><?php echo $used['usedRmName']?></td>
									                                                <td><?php echo $used['usedRmQuantity']?></td>
									                                                <td class="text-capitalize"><?php echo $used['usedRmUnit']?></td>
									                                                <td><?php echo $used['usedRmPrice']?> <span>TK</span></td>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
									 			Click to view detail <span class="badge">Total Production</span> </a>
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
									                                                <th data-field="Product Name" data-editable="false">Product Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                <th data-field="Paid Amount (BDT)" data-editable="false">Amount (BDT)</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	
                                												<?php
									                                        		$today = date('d-m-Y');
																					

																					

																				if(empty($_SESSION['facTaxUser']) AND empty($_SESSION['facTaxPass']) ){
																					$produ = $conn->query("SELECT * FROM madeproduct WHERE (madePrStatus = 'Confirmed' AND madePrDate='$today') ORDER BY sl DESC");
																				}else{
																					$rr = $conn->query("SELECT * FROM madeproduct WHERE (madePrStatus = 'Confirmed' AND madePrDate='$today')");
																					$rrr = $rr-> num_rows;
																					 $rrrr = ceil(($rrr*30)/100);

																					$produ = $conn->query("SELECT * FROM madeproduct WHERE (madePrStatus = 'Confirmed' AND madePrDate='$today') ORDER BY sl DESC LIMIT $rrrr");
																				}
												                                	
												                                	$j=1;
												                                	$sum=0;
												                                	while($expen= $produ->fetch_assoc()):
												                                		$sum = $sum+$expen['totalPrice'];


												                                ?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
												                                    <td class="text-capitalize"><?php echo $expen['madePrName']?></td>
												                                    <td><?php echo $expen['madePrQuantity']?></td>
												                                    <td class="text-capitalize"><?php echo $expen['madePrUnit']?></td>
												                                    
												                                    <td><?php echo $expen['totalPrice']?> <span>TK</span></td>
									                                            </tr>
									                                            <?php endwhile;?>
									                                            

									                                            
									                                            
									                                            
									                                        </tbody>
									                                        <div class="col-md-6">
														                		<h4 class="alert bg-success"><b>Todays Production:</b></h4>
														                	</div>
														                	<div class="col-md-6">
														                		<h4 class="alert bg-success"><b>BDT <?php echo $sum;?></b></h4>
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
									 			Click to view detail <span class="badge">Outlet Product Distribution</span> </a>
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
									                                                <th data-field="sl">Sl</th>
									                                                <th data-field="Outlet Name" data-editable="false">Outlet Name</th>
									                                                
									                                                <th data-field="Paid Amount (BDT)" data-editable="false">Amount (BDT)</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php
									                                        		$today = date('d-m-Y');
																					

																					

																				if(empty($_SESSION['facTaxUser']) AND empty($_SESSION['facTaxPass']) ){
																					$ddd = $conn->query("SELECT SUM(distTotalPrice) as distTo,prDistOutleName FROM productdistribution WHERE (prDistStatus = 'Confirmed' AND dist='0' AND prDistDate='$today') GROUP BY  prDistOutleName ORDER BY sl DESC");
																				}else{
																					$rr = $conn->query("SELECT SUM(distTotalPrice) as distTo,prDistOutleName FROM productdistribution WHERE (prDistStatus = 'Confirmed' AND dist='0' AND prDistDate='$today') GROUP BY  prDistOutleName");
																					$rrr = $rr-> num_rows;
																					 $rrrr = ceil(($rrr*30)/100);

																					$ddd = $conn->query("SELECT SUM(distTotalPrice) as distTo,prDistOutleName FROM productdistribution WHERE (prDistStatus = 'Confirmed' AND dist='0' AND prDistDate='$today') GROUP BY  prDistOutleName  ORDER BY sl DESC LIMIT $rrrr");
																				}
												                                	
												                                	$j=1;
												                                	$sum=0;
												                                	while($distr= $ddd->fetch_assoc()):
												                                	$sum=$sum+$distr['distTo'];


												                                ?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
																					<td class="text-capitalize"><?php echo $distr['prDistOutleName']?></td>
																					<td><?php echo $distr['distTo']?> <span>TK</span></td>
									                                            </tr>
									                                            <?php endwhile;?>
									                                            

									                                            
									                                            
									                                            
									                                        </tbody>
									                                        <div class="col-md-6">
														                		<h4 class="alert bg-success"><b>Todays Outlet Distribution :</b></h4>
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

                                <div class="panel panel-danger">
                                    <div class="panel-heading accordion-head">
                                    	
                                        <h4 class="panel-title text-center">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
									 			Click to view detail <span class="badge">RM Wastage</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Factory Wastage :</b></h4>
									                	</div>
									                	<?php

									                        $today = date('d-m-Y');
																
									                        $was = $conn->query("SELECT SUM(wastageRmPrice) AS totalWas FROM wastagerm WHERE (wastageRmStatus = 'Confirmed' AND wastageRmDate='$today')");
									                         $wast = $was->fetch_assoc();
									                               				
									                     ?>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $wast['totalWas']?></b></h4>
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
									                                                <th data-field="Unit " data-editable="false">Unit</th>
									                                                
									                                                <th data-field="Price" data-editable="false">Price</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php

									                               					$today = date('d-m-Y');
																					
																					$j=1;
									                               					$was = $conn->query("SELECT * FROM wastagerm WHERE (wastageRmStatus = 'Confirmed' AND wastageRmDate='$today') ORDER BY sl DESC");
									                               					while($prwastage= $was->fetch_assoc()):
									                               				
									                                			?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
												                                    <td class="text-capitalize"><?php echo $prwastage['wastageRmName']?></td>
												                                    <td><?php echo $prwastage['wastageRmQuantity']?></td>
												                                    <td class="text-capitalize"><?php echo $prwastage['wastageRmUnit']?></td>
												                                    <td><?php echo $prwastage['wastageRmPrice']?> <span>TK</span></td>
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
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse60">
									 			Click to view detail <span class="badge">Product Wastage</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse60" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>Todays Product Wastage :</b></h4>
									                	</div>
									                	<?php

									                        $today = date('d-m-Y');
																
									                        $was = $conn->query("SELECT SUM(facWasPrPrice) AS totalWas FROM factorywastage WHERE (facWasPrStatus = 'Confirmed' AND facWasPrDate='$today')");
									                         $wast = $was->fetch_assoc();
									                               				
									                     ?>
									                	<div class="col-md-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $wast['totalWas']?></b></h4>
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
									                                                <th data-field="Unit " data-editable="false">Unit</th>
									                                                
									                                                <th data-field="Price" data-editable="false">Price</th>
									                                                
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php

									                               					$today = date('d-m-Y');
																					
																					$j=1;
									                               					$was = $conn->query("SELECT * FROM factorywastage WHERE (facWasPrStatus = 'Confirmed' AND facWasPrDate='$today') ORDER BY sl DESC");
									                               					while($prwastage= $was->fetch_assoc()):
									                               				
									                                			?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
												                                    <td class="text-capitalize"><?php echo $prwastage['facWasPrName']?></td>
												                                    <td><?php echo $prwastage['facWasPrQuantity']?></td>
												                                    <td class="text-capitalize"><?php echo $prwastage['facWasPrUnit']?></td>
												                                    <td><?php echo $prwastage['facWasPrPrice']?> <span>TK</span></td>
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
									 			Click to view detail <span class="badge">Factory Expenses</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6 col-sm-6">
									                		<h4 class="alert bg-success"><b>Todays Factory Expenses :</b></h4>
									                	</div>
									                	<?php


									                        $today = date('d-m-Y');
																					
															
									                        $factory = $conn->query("SELECT SUM(facExpAmount) AS facExpTotal FROM factoryexpense WHERE (facExpStatus = 'Confirmed' AND facExpDate='$today')");
									                       $expense= $factory->fetch_assoc();
									                               				
									                                			
									                    ?>
									                	<div class="col-md-6 col-sm-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $expense['facExpTotal']?></b></h4>
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
									                                                <th data-field="Type" data-editable="false">Type</th>
									                                                <th data-field="Amount (BDT)" data-editable="false">Amount (BDT)</th>
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php


									                               					$today = date('d-m-Y');
																					
																					$j=1;
									                               					$factory = $conn->query("SELECT * FROM factoryexpense WHERE (facExpStatus = 'Confirmed' AND facExpDate='$today') ORDER BY sl DESC");
									                               					while($expense= $factory->fetch_assoc()):
									                               				
									                                			
									                                        	?>
									                                            <tr>
									                                                <td></td>
									                                                <td><?php echo $j++;?></td>
									                                                <td><?php echo $expense['facExpName']?></td>
									                                                <td><?php echo $expense['facExpType']?></td>
									                                                <td><?php echo $expense['facExpAmount']?> <span>TK</span></td>
									                                                
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
									 			Click to view detail <span class="badge">R & D Expense</span> </a>
                                        </h4>
                                    </div>
                                    <div id="collapse8" class="panel-collapse panel-ic collapse">
                                        <div class="panel-body admin-panel-content animated bounce">
                                            <div class="data-table-area mg-tb-15" >
									            <div class="container-fluid">
									                <div class="row">
									                	<div class="col-md-6 col-sm-6">
									                		<h4 class="alert bg-success"><b>R & D Expense :</b></h4>
									                	</div>
									                	<?php


									                        $today = date('d-m-Y');
																					
															
									                        $rrnd = $conn->query("SELECT SUM(rNdPrice) AS rNdExpTotal FROM rndusedrm WHERE (rNdStatus = 'Confirmed' AND rNdDate='$today')");
									                       $rndTotal= $rrnd->fetch_assoc();
									                               				
									                                			
									                    ?>
									                	<div class="col-md-6 col-sm-6">
									                		<h4 class="alert bg-success"><b>BDT <?php echo $rndTotal['rNdExpTotal']?></b></h4>
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
									                                                <th data-field="Used RM Name" data-editable="false">Used RM Name</th>
									                                                <th data-field="Quantity" data-editable="false">Quantity</th>
									                                                <th data-field="Unit" data-editable="false">Unit</th>
									                                                
									                                                <th data-field="Price (BDT)" data-editable="false">Price (BDT)</th>
									                                                
									                                            </tr>
									                                        </thead>
									                                        <tbody>
									                                        	<?php

										                               					$today = date('d-m-Y');
																						
																						$j=1;
										                               					$was = $conn->query("SELECT * FROM rndusedrm WHERE (rNdStatus = 'Confirmed' AND rNdDate='$today') ORDER BY sl DESC");
										                               					while($rmrnd= $was->fetch_assoc()):
										                               				
										                                			?>
									                                            <tr>
									                                                <td></td>
																					<td><?php echo $j++;?></td>
												                                    <td class="text-capitalize"><?php echo $rmrnd['rNdRmName']?></td>
												                                    <td><?php echo $rmrnd['rNdQuantity']?></td>
												                                    <td class="text-capitalize"><?php echo $rmrnd['rNdUnit']?></td>
												                                    <td><?php echo $rmrnd['rNdPrice']?> <span>TK</span></td>
												                                    
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
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="../../factory.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="../../factory/order/order.php"><i class="fa fa-cart-plus"></i><span>Ad. Orders</span><span></span></a>
		        </li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-industry"></i><span>Row Material</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="../../factory/rm/byout_sum.php">Purchased Row Material</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="../../factory/rm/usedRm.php">Used Row Material</a></li>		           
		            <li id="menu-academico-avaliacoes" ><a href="../../factory/rm/wastageRm.php">Wastage Row Material</a></li>		           
		          </ul>
		        </li>
		        
		        <li><a href="#"><i class="fa fa-money"></i><span>Expenses</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../factory/expense/fexpense.php">Factory Expenses</a></li>
			            <li id="menu-academico-boletim" ><a href="../../factory/expense/rNd.php">Research & Development</a></li>
			            
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-birthday-cake"></i><span>Product</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../factory/product/category.php">Product Made</a></li>
			            <li id="menu-academico-boletim" ><a href="../../factory/product/cat.php">Product Distribution</a></li>
			            
		             </ul>
		        </li>
		          
		        <li id="menu-comunicacao" ><a href="../../factory/facReports/facReports.php"><i class="fa fa-home nav_icon"></i><span>Factory Reports</span></a>
		        </li>
		        
		        
		        
		         <li><a href="../../factory/outReports/outReports.php"><i class="fa fa-bar-chart"></i><span>Outlet Reports</span></a></li>
		         
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