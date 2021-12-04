<?php

		include_once "../../inc/function.php";

		session_start();

		if(empty($_SESSION['facLayout'])){
			header("location: ../../factoryLogin.php");
		}

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');

		$sl=$_GET['sl'];








?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Factory | Sources</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>To Outlet</b></h1> 
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
												<div class="user-name" style="margin-left: 150px">
													<p><p><?php echo $_SESSION['facLayout']?></p></p>
													<span>Bhuiyan Group</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu" style="margin-left: 7px">
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
<div class="inner-block" style="background-image: url('../../images/bgimg.jpg'); background-size: cover; background-attachment: fixed;">
<!--market updates updates-->
	 <div class="container-fluid" >
		<p class="alert bg-success text-right">Date: <?php echo $date?></p>


		


		<div class="panel" >
			<div class="row">
				<?php
					$outlet = $conn->query("SELECT outName,sl FROM croutlet");
					while($outlet1=$outlet->fetch_assoc()):

				?>
				<div class="col-md-4">
					<div class="card">
						<div class="card-body " style="margin-top: 18px">
						<a href="prDist.php?key=<?php echo $outlet1['sl']?>&sl=<?php echo $sl?>"><button class="card-body btn btn-success text-capitalize" style="height:150px; width: 100%"><h3 style="padding-top: 10px;"><b><?php echo $outlet1['outName']?></b></h3></button></a>
						
						</div>
					</div>
    			</div>
    			<?php endwhile;?>
    			
    			

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
</body>
</html>                     