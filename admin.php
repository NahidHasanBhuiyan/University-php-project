<?php

		include_once "inc/function.php";

		session_start();


		if(empty($_SESSION['layout'])){
			header("location: adminLogin.php");
		}




?>

<!DOCTYPE html>
<html>
<head>
<title>Bhuiyan | Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
<script src="js/Chart.min.js"></script>
<!--//charts-->
<!-- geo chart -->
    <script src="//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    <!--<script src="lib/html5shiv/html5shiv.js"></script>-->
     <!-- Chartinator  -->
    <script src="js/chartinator.js" ></script>
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

                        ishtml: true
                    }
                }

               
            });                       
        });
    </script>
<!--geo chart-->

<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left" style="background-color: #00bfff; padding: 3px">
							<div class="logo-nam">
									 <h1 class="text-center text-uppercase" style="padding: 5px;color: #FFF;"><b>Bhuiyan</b></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  					
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right" style="background-color: #00bfff;">
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
												<span class="prfile-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p><?php echo $_SESSION['layout'];?></p>
													<span>Bhuiyan</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											
											<li> <a href="inc/adminLogout.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
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
<div class="inner-block" style="background-image: url('images/b1.jpg'); background-size: cover; background-attachment: fixed;">
<!--market updates updates-->
	 <div class="container-fluid" >
		

		



		<div class="row">
			<div class="col-md-4">
				<div class="card " style="margin-top: 18px">
					<a href="admin/factory/ad_factory.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-home fa-lg"></h1></i></h1><h3 style="padding-top: 10px;">Factory</h3></button></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card " style="margin-top: 18px" >

					<a href="admin/outlet/ad_outlet.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-th-large"></i></h1></h1><h3 style="padding-top: 10px">Outlet</h3></button></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card " style="margin-top: 18px" >
				<a href="admin/best/best.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-star fa-lg"></i></h1><h3 style="padding-top: 10px">Best Performance</h3></button></a>
				</div>
			</div>
			
		</div>
		<div class="row" style="margin-top: 17px;">
			<div class="col-md-4">
				<div class="card " style="margin-top: 18px" >
					<a href="admin/reports/reports.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-list-alt fa-lg"></i></h1><h3 style="padding-top: 10px">Reports</h3></button></a>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card " style="margin-top: 18px" >
					<a href="admin/monthly/monthly.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-signal fa-lg"></i></h1><h3 style="padding-top: 10px">Monthly Analysis</h3>
						
				</div>
			</div>
			<div class="col-md-4">
				<div class="card " style=" margin-top: 18px">
				<a href="admin/create/create.php"><button class="card-body btn btn-info text-uppercase" style="height: 190px; width: 100%"><h1><i class="fa fa-edit fa-lg"></i></h1></h1><h3 style="padding-top: 10px">Create An Item</h3></button></a>
				</div>
			</div>
			
		</div>
		
	





		<p class="alert" style="text-align: center; margin-top: 50px;background-color: #00bfff; color: #FFF">Powered By @ MD NAHID HASAN BHUIYAN & TEAM</p>

		</div>
<!--market updates end here-->


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
		        <li id="menu-home" ><a href="admin.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <li><a href="admin/factory/ad_factory.php"><i class="fa fa-home"></i><span>Factory</span><span></span></a>
		        </li>
		        <li id="menu-comunicacao" ><a href="admin/outlet/ad_outlet.php"><i class="fa fa-th-large nav_icon"></i><span>Outlet</span></a>
		        </li>
		        <li><a href="#"><i class="fa fa-edit"></i><span>Create Items</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="admin/create/outlet/crOutlet.php">Create Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/rowMaterial/crSrc.php">Create Source</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/rowMaterial/crRm.php">Create RM</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/product/crPr.php">Create Product</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/factoryExp/fixExp.php">Factory Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/factoryExp/nonFixExp.php">Factory Non Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/outletExp/fixExp.php">Outlet Fix Exp.</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/create/outletExp/nonFixExp.php">Outlet Non Fix Exp.</a></li>
		             </ul>
		         </li>
		          
		        <li id="menu-academico" ><a href="#"><i class="fa fa-list"></i><span>Reports</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="admin/reports/ad_reports.php">Factory</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="admin/reports/out_sum.php">Outlet Summary</a></li>		           
		            <li id="menu-academico-avaliacoes" ><a href="admin/reports/byout_sum.php">By Outlet Summary</a></li>		           
		          </ul>
		        </li>
		        
		        
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Monthly Analysis</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="admin/monthly/sell.php">Sell Graph By Outlet</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/monthly/distGap.php">RM Purchase</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/monthly/mismatch.php">Distribution Mismatch</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/monthly/facWastage.php">Factory Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/monthly/outWastage.php">Outlet Wastage</a></li>
			            <li id="menu-academico-boletim" ><a href="admin/monthly/othWastage.php">Total Production</a></li>
		             </ul>
		        </li>
		         <li><a href="admin/best/best.php"><i class="fa fa-star"></i><span>Best Performance</span></a></li>
		         
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
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>                     