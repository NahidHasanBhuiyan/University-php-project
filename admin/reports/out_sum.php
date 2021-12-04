<?php

		include_once "../../inc/function.php";

		session_start();


		if(empty($_SESSION['layout'])){
			header("location: ../../adminLogin.php");
		}
		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$today = date('d-m-Y');




?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Reports | Outlet Summary</title>
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
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left" style="background-color: #00bfff; ">
							<div class="logo-nam">
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>Outlet Summary</b></h1> 
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
												<span class="prfile-img"><img src="../../images/p1.png" alt=""> </span> 
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
											
											<li> <a href="../../inc/adminLogout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
<div class="inner-block" style="background-image: url('../../images/bgimg.jpg'); background-size: cover; background-attachment: fixed;">
<!--market updates updates-->
	 <div class="container-fluid" >
		<p class="alert bg-success text-right">Date: <?php echo $date?></p>

		


		<div class="panel" >
			<div class="row">
				
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="outSum/proReceive.php"><button class="card-body btn btn-success" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Products Received</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$total4 = $conn->query("SELECT SUM(distTotalPrice) as total5 FROM productdistribution WHERE outletStatus='Confirmed' AND prDistDate='$today'");
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
						<a href="outSum/proSold.php"><button class="card-body btn btn-success" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Products Sold</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$sold4 = $conn->query("SELECT SUM(soldTotal) as sold5 FROM soldproduct WHERE soldStatus='Confirmed' AND soldDate='$today'");
                                        		
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
						<a href="outSum/proStock.php"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Current Stock</b></h3></button></a>
						
						<div class="panel-footer" >
		<?php
		 $c = $conn->query("SELECT DISTINCT prDistPrName,prDistUnit FROM productdistribution WHERE  outletStatus='Confirmed' ORDER BY sl DESC");
		$nu = 1;
		$sum=0;
		while($d=$c->fetch_assoc()){
															                                        			

		 $stockPrName = $d['prDistPrName'];
		



		$mmm = $conn->query("SELECT MAX(stockDate) as stockDate from stock WHERE stockPrName='$stockPrName' AND  stockStatus='Confirmed' AND stockDate<'$today'");
		$mmmm = $mmm->fetch_assoc();
		 $maax = $mmmm['stockDate'];

		$uu  = $conn->query("SELECT * FROM stock WHERE stockDate='$maax' AND stockStatus='Confirmed'  AND stockPrName='$stockPrName'");
		$uuu = $uu->fetch_assoc();



		$stockQuantity = $uuu['stockQuantity'];

		$sss = $conn->query("SELECT * FROM stock WHERE stockDate='$today' AND stockStatus='Confirmed'  AND stockPrName='$stockPrName'");
		$ssss = $sss->fetch_assoc();
		$stockQuantityUpdate = $ssss['stockQuantity'];



		$rec = $conn->query("SELECT SUM(prDistQuantity) AS prq FROM productdistribution WHERE  prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today' ");
		$recpr = $rec->fetch_assoc();
		$receive = $recpr['prq'];
		$was = $conn->query("SELECT SUM(wasOutQuantity) AS wasq FROM wastageoutlet WHERE  wasOutPrName='$stockPrName' AND wasStatus='Confirmed' AND wasDate='$today' ");
		$wasquery = $was->fetch_assoc();
		$wastage = $wasquery['wasq'];

		$dist = $conn->query("SELECT SUM(prDistQuantity) as distq FROM productdistribution WHERE dist='1'  AND prDistPrName='$stockPrName' AND outletStatus='Confirmed' AND prDistDate='$today'");
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
						<a href="outSum/expenses.php"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Expences</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$exp4 = $conn->query("SELECT SUM(outExpAmount) as exp5 FROM outletexpense WHERE outExpStatus='Confirmed' AND outExpDate='$today'");
                                        		
                                        		$exp6=$exp4->fetch_assoc();
                                        	?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $exp6['exp5']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
											<?php
                                        		$order4 = $conn->query("SELECT COUNT(outlet) as row1 FROM advanceorder WHERE (orderStatus='Confirmed' OR orderStatus='Delivered') AND orderDate='$today'");
                                        		$order5=$order4->fetch_assoc();
                                        			

                                        	?>
						<a href="outSum/order.php"><button class="card-body btn btn-info" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Advanced Orders <span class="badge badge-success counter"><?php echo $order5['row1']?></span> </b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$order6 = $conn->query("SELECT SUM(orderAmount) as order7 FROM advanceorder WHERE (orderStatus='Confirmed' OR orderStatus='Delivered') AND orderDate='$today'");
                                        		$order8=$order6->fetch_assoc();
                                        			

                                        	?>

							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $order8['order7']?></span></b></h5>
						</div>
						</div>
					</div>
    			</div>
    			<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="outSum/wastage.php"><button class="card-body btn btn-danger" style="height:100px; width: 100%"><h3 style="padding-top: 10px;"><b>Wastage</b></h3></button></a>
						
						<div class="panel-footer" >
											<?php
                                        		$was4 = $conn->query("SELECT SUM(wasOutPrice) as wasTotal1 FROM wastageoutlet WHERE wasStatus='Confirmed' AND wasDate='$today'");
                                        		$was5=$was4->fetch_assoc();
                                        	?>
							<h5 class="text-right" ><b>BDT <span class="counter"><?php echo $was5['wasTotal1']?></span></b></h5>
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
		        <li id="menu-home" ><a href="../../admin.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="../../admin/factory/ad_factory.php"><i class="fa fa-home"></i><span>Factory</span><span></span></a>
		        </li>
		        <li id="menu-comunicacao" ><a href="../../admin/outlet/ad_outlet.php"><i class="fa fa-th-large nav_icon"></i><span>Outlet</span></a>
		        </li>
		        <li><a href="#"><i class="fa fa-edit"></i><span>Create Items</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../admin/create/outlet/crOutlet.php">Create Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/rowMaterial/crSrc.php">Create Source</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/rowMaterial/crRm.php">Create RM</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/product/crPr.php">Create Product</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/factoryExp/fixExp.php">Factory Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/factoryExp/nonFixExp.php">Factory Non Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/outletExp/fixExp.php">Outlet Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/create/outletExp/nonFixExp.php">Outlet Non Fix Exp.</a></li>
		             </ul>
		         </li>
		          
		        <li id="menu-academico" ><a href="#"><i class="fa fa-list"></i><span>Reports</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="../../admin/reports/ad_reports.php">Factory</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="../../admin/reports/out_sum.php">Outlet Summary</a></li>		           
		            <li id="menu-academico-avaliacoes" ><a href="../../admin/reports/byout_sum.php">By Outlet Summary</a></li>		           
		          </ul>
		        </li>
		        
		        
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Monthly Analysis</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="../../admin/monthly/sell.php">Sell Graph By Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/monthly/distGap.php">RM Purchase</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/monthly/mismatch.php">Distribution Mismatch</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/monthly/facWastage.php">Factory Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/monthly/outWastage.php">Outlet Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="../../admin/monthly/othWastage.php">Total Production</a></li>
		             </ul>
		        </li>
		         <li><a href="../../admin/best/best.php"><i class="fa fa-star"></i><span>Best Performance</span></a></li>
		         
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
<!-- counter-->

	<script src="../../plugin/js/jquery.min.js"></script>
	<script src="../../plugin/js/jquery.counterup.js"></script>
	<script src="../../plugin/js/waypoints.js"></script>
	<script src="../../plugin/js/bootstrap.min.js"></script>
	<script src="../../plugin/js/custom.js"></script>
	<script src="../../plugin/js/slick.js"></script>




<!-- counter end-->
</body>
</html>                     