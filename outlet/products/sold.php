<?php

		include_once "../../inc/function.php";

		session_start();

		if(empty($_SESSION['outName'])){
			header("location: ../../outletLogin.php");
		}

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$outlet = $_SESSION['outName'];

		$sl = $_GET['sl'];

		$cate = $conn->query("SELECT prCategoryName FROM category WHERE sl='$sl'");
		$catte = $cate->fetch_assoc();
		$category = $catte['prCategoryName']; 







?>
<!DOCTYPE HTML>
<html>
<head>
<title>Diana | <?php echo $_SESSION['outName'];?> | Product Stock</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>Product Stock</b></h1> 
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

		

				
							    
                                 

                                <div class="panel panel-success" style="margin-top: 10px">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="div">
                                                	<h3 class="alert bg-primary text-capitalize"><?php echo $category?> Stock Update</h3>
                                                </div>
                                                <table class="table table-hover">
	                            	<thead class="thead thead-dark">
		                                <tr>
		                                    <th>Sl</th>
		                                    
		                                    <th>Product Name</th>
		                                    <th>Quantity</th>
		                                    <th>Unit</th>
		                                    
		                                </tr>
	                                </thead>
	                                <tbody>
	                                	<?php
	                                	$today = date('d-m-Y');
	                                		$dis = $conn->query("SELECT * FROM productdistribution WHERE outletStatus='Confirmed' AND catName='$category' AND prDistOutleName='$outlet' GROUP BY prDistPrName ORDER BY prDistPrName ");
	                                		$i=1;
	                                		while($dist= $dis->fetch_assoc()):
	                                			$num = $dist['sl'];



	                                			if(isset($_POST['addStock'][$num])){
	                                			$stockOutletName = $outlet;
	                                			$stockPrName = $_POST['stockPrName'];
	                                			$stockQuantity = $_POST['stockQuantity'];
	                                			$stockUnit = $_POST['stockUnit'];
	                                			$stockStatus = "Pending";
	                                			$stockDate = date('d-m-Y');

	                                			if(empty($stockQuantity) && $stockQuantity!='0' ){
												$message = "<p class='alert alert-danger'>Field Must Not Be Empty</p>";

												}else{
													

													

														 

														$d = $conn->query("SELECT categoryName FROM product WHERE prName='$stockPrName'");
														$e=$d->fetch_assoc();
														$p = $e['categoryName'];

														$conn->query("INSERT INTO stock (stockOutletName,stockPrName,stockQuantity,stockUnit,stockCategory,stockStatus,stockDate,color) VALUES('$stockOutletName','$stockPrName','$stockQuantity','$stockUnit','$p','$stockStatus','$stockDate','red')");

														
												
													$message = "<p class='alert alert-success'>Successfully Stock Updated!</p>";
													
													
												}
												echo $message;
	                                		}
	                                		$product = $dist['prDistPrName'];
	                                		$colo = $conn->query("SELECT * FROM stock WHERE stockOutletName='$outlet' AND stockDate='$today' AND stockPrName='$product'");
	                                		$coloo = $colo->fetch_assoc();
	                                		$color = $coloo['color']; 



	                                	?>
	                                	<form action="" method="POST">
		                                <tr>
		                                    <td><?php echo $i++;?></td>
		                                    
		                                    <td class="text-capitalize">
		                                    	<input name="stockPrName"  value="<?php echo $dist['prDistPrName']?>" type="text" class="form-control text-capitalize" readonly>
		                                    </td>
		                                    <td>
		                                    	
											
		                                    	
	                                            
	                                            <input  name="stockQuantity"   type="number" min="0" value="">
	                                        </td>
		                                    <td class="text-capitalize">
		                                    	
												
												<input name="stockUnit"  value="<?php echo $dist['prDistUnit']?>" type="text" class="form-control" readonly>

		                                    </td>
		                                    
		                                    <td>
		                                        <button name="addStock[<?php echo $num;?>]" style="background-color: <?php echo $color?>" data-toggle="tooltip" title="All Ok" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></button>
				                           		 
		                                    </td>
		                                </tr>
		                            </form>
		                            <?php endwhile;?>
		                                
	                                </tbody>

	                            </table>
	                                                
	                                                    
	                                </div>    
	                            </div>
                        		</div>  
                             
		<div class="product-status mg-tb-15" style="margin-top: 15px">
            
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h2 class="alert bg-danger"><b>Confirmation List</b></h2>
                            
                            <div class="table-responsive">
                            <table class="table table-hover">
                            	<thead class="thead thead-dark">
                                <tr>
                                    <th>Sl</th>
                                    <th>Date</th>
                                    <th class="text-capitalize">Product Name</th>
                                    <th>Quantity</th>
                                    <th class="text-capitalize">Unit</th>
                                    <th>Status</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                	$pendi = $conn->query("SELECT *FROM stock WHERE stockStatus='Pending' AND stockOutletName='$outlet' AND stockCategory='$category' ORDER BY sl DESC");
                                	$i=1;
                                	while($pending = $pendi->fetch_assoc()):


                                ?>
                                <tr>
                                    <td><?php echo $i++?></td>
                                    <td><?php echo $pending['stockDate']?></td>
                                    <td class="text-capitalize"><?php echo $pending['stockPrName']?></td>
                                    <td><?php echo $pending['stockQuantity']?></td>
                                    <td><?php echo $pending['stockUnit']?></td>
                                    
                                    <td>
                                        <a href="inc/soldConfirm.php?key=<?php echo $pending['sl']?>&sl=<?php echo $sl;?>" onclick="javascript: return confirm('All are OK??');"><button data-toggle="tooltip" title="All ok" class="pd-setting-ed"><i class="fa fa-check aria-hidden="true"></i></button></a>
                                        <a href="inc/soldDelete.php?key=<?php echo $pending['sl']?>&sl=<?php echo $sl;?>" onclick="javascript: return confirm('Please Confirm Delation??');"><button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
                                    </td>
                                </tr>
                                <?php endwhile;?>
                                
                                </tbody>

                            </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            
        </div>

        <div class="panel panel-info" style="margin-top: 20px">
			 <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15" style="margin-top: 15px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h3 class="alert bg-warning"><b>Total Stock List</b></h3>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                  
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="sl">Sl</th>
                                                <th data-field="Date" data-editable="false">Date</th>
                                                <th data-field="Product Name" data-editable="false">Product Name</th>
                                                <th data-field="Quantity" data-editable="false">Quantity</th>
                                                
                                                <th data-field="Unit" data-editable="false">Unit</th>

                                                
                                                
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php

                                        	
                                        		

												$pendi2 = $conn->query("SELECT * FROM stock WHERE stockStatus='Confirmed' AND stockOutletName='$outlet' AND stockDate='$today'  ORDER BY sl DESC");
											
			                                	
			                                	$j=1;

			                                	while($pending2 = $pendi2->fetch_assoc()):


			                                ?>
                                
			                                <tr>
			                                    <td></td>
			                                    <td><?php echo $j++?></td>
			                                    <td><?php echo $pending2['stockDate']?></td>
			                                    <td class="text-capitalize"><?php echo $pending2['stockPrName']?></td>
			                                    <td><?php echo $pending2['stockQuantity']?></td>
			                                    <td><?php echo $pending2['stockUnit']?></td>
			                                    
			                                    
			                                </tr>
			                                <?php endwhile?>
                                </tbody>


                                    </table>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
		</div>
	
		<div class="panel panel-info" style="margin-top: 20px">
			 <!-- Static Table Start -->
        <div class="data-table-area mg-tb-15" style="margin-top: 15px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h3 class="alert bg-success"><b>Total Selling List</b></h3>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                  
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                <th data-field="state" data-checkbox="true"></th>
                                                <th data-field="sl">Sl</th>
                                                <th data-field="Date" data-editable="false">Date</th>
                                                <th data-field="Product Name" data-editable="false">Product Name</th>
                                                <th data-field="Quantity" data-editable="false">Quantity</th>
                                                <th data-field="Unit" data-editable="false">Unit</th>
                                                
                                                <th data-field="Per Unit (BDT)" data-editable="false">Per Unit (BDT)</th>
                                                <th data-field="Amount(BDT)" data-editable="false">Amount(BDT)</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        		$today = date('d-m-Y');
												

												

											if(empty($_SESSION['taxUser']) AND empty($_SESSION['taxPass']) ){
												$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND (soldDate='$today') ORDER BY sl DESC");
											}else{
												$rr = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'");
												$rrr = $rr-> num_rows;
												 $rrrr = ceil(($rrr*30)/100);

												$pendi1 = $conn->query("SELECT * FROM soldproduct WHERE soldStatus='Confirmed' AND soldOutlet='$outlet' AND soldDate='$today'  ORDER BY sl DESC LIMIT $rrrr");
											}
			                                	
			                                	$j=1;

			                                	while($pending1 = $pendi1->fetch_assoc()):


			                                ?>
                                
			                                <tr>
			                                    <td></td>
			                                    <td><?php echo $j++?></td>
			                                    <td><?php echo $pending1['soldDate']?></td>
			                                    <td><?php echo $pending1['soldPrName']?></td>
			                                    <td><?php echo $pending1['soldPrQuantity']?></td>
			                                    <td><?php echo $pending1['soldPrUnit']?></td>
			                                    <td><?php echo $pending1['soldPerUnitPrice']?> <span>TK</span></td>
			                                    <td><?php echo $pending1['soldTotal']?> <span>TK</span></td>
			                                    
			                                </tr>
			                                <?php endwhile?>
                                </tbody>


                                    </table>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Static Table End -->
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