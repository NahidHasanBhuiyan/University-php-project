<?php

		include_once "../../inc/function.php";

		session_start();


		if(empty($_SESSION['layout'])){
			header("location: ../../adminLogin.php");
		}
		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');
		$year = date('Y');




?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Monthly Analysis | RM Purchase</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>RM Purchase</b></h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  								
							</div>
							<!--search-box-->
								
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right" style="background-color: #00bfff">
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
		<p class="alert bg-info text-right">Date: <?php echo $date;?></p>

		


		<div class="main-page-charts">
			<div class="row">
					
	   			<div class="main-page-chart-layer1">
						<div class="col-md-12 chart-layer1-left"> 
							<div class="glocy-chart">
							<div class="span-2c">  
								<?php

										$query1 = $conn->query("SELECT SUM(pRmAmount) as Total1 FROM purchaserm WHERE pMonth='01' AND pYear='$year'  GROUP BY pMonth");
										$fetch1 = $query1-> fetch_assoc();
										$month1 = $fetch1['Total1'];

										$query2 = $conn->query("SELECT SUM(pRmAmount) as Total2 FROM purchaserm WHERE pMonth='02' AND pYear='$year'  GROUP BY pMonth");
										$fetch2 = $query2-> fetch_assoc();
										$month2 = $fetch2['Total2'];

										$query3 = $conn->query("SELECT SUM(pRmAmount) as Total3 FROM purchaserm WHERE pMonth='03' AND pYear='$year' GROUP BY pMonth");
										$fetch3 = $query3-> fetch_assoc();
										$month3 = $fetch3['Total3'];

										$query4 = $conn->query("SELECT SUM(pRmAmount) as Total4 FROM purchaserm WHERE pMonth='04' AND pYear='$year' GROUP BY pMonth");
										$fetch4 = $query4-> fetch_assoc();
										$month4 = $fetch4['Total4'];

										$query5 = $conn->query("SELECT SUM(pRmAmount) as Total5 FROM purchaserm WHERE pMonth='05' AND pYear='$year' GROUP BY pMonth");
										$fetch5 = $query5-> fetch_assoc();
										$month5 = $fetch5['Total5'];

										$query6 = $conn->query("SELECT SUM(pRmAmount) as Total6 FROM purchaserm WHERE pMonth='06' AND pYear='$year' GROUP BY pMonth");
										$fetch6 = $query6-> fetch_assoc();
										$month6 = $fetch6                              ['Total6'];

										$query7 = $conn->query("SELECT SUM(pRmAmount) as Total7 FROM purchaserm WHERE pMonth='07'AND pYear='$year' GROUP BY pMonth");
										$fetch7 = $query7-> fetch_assoc();
										$month7 = $fetch7['Total7'];

										$query8 = $conn->query("SELECT SUM(pRmAmount) as Total8 FROM purchaserm WHERE pMonth='08' AND pYear='$year' GROUP BY pMonth");
										$fetch8 = $query8-> fetch_assoc();
										$month8 = $fetch8['Total8'];

										$query9 = $conn->query("SELECT SUM(pRmAmount) as Total9 FROM purchaserm WHERE pMonth='09' AND pYear='$year' GROUP BY pMonth");
										$fetch9 = $query9-> fetch_assoc();
										$month9 = $fetch9['Total9'];

										$query10 = $conn->query("SELECT SUM(pRmAmount) as Total10 FROM purchaserm WHERE pMonth='10' AND pYear='$year' GROUP BY pMonth");
										$fetch10 = $query10-> fetch_assoc();
										$month10 = $fetch10['Total10'];

										$query11 = $conn->query("SELECT SUM(pRmAmount) as Total11 FROM purchaserm WHERE pMonth='11' AND pYear='$year' GROUP BY pMonth");
										$fetch11 = $query11-> fetch_assoc();
										$month11 = $fetch11['Total11'];

										$query12 = $conn->query("SELECT SUM(pRmAmount) as Total12 FROM purchaserm WHERE pMonth='12' AND pYear='$year' GROUP BY pMonth");
										$fetch12 = $query12-> fetch_assoc();
										$month12 = $fetch12['Total12'];

										

								?>
	                        		<h3 class="tlt">RM Purchase</h3>
	                        		<canvas id="bar" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
	                        		<script>
			                            var barChartData = {
			                            labels : ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
			                            datasets : [
			                                {
			                                    fillColor : "red",
			                                    data : [<?php echo $month1?>,<?php echo $month2?>,<?php echo $month3?>,<?php echo $month4?>,<?php echo $month5?>,<?php echo $month6?>,<?php echo $month7?>,<?php echo $month8?>,<?php echo $month9?>,<?php echo $month10?>,<?php echo $month11?>,<?php echo $month12?>]
			                                }
			                            ]

			                        };
			                            new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);

		                        </script>
	                   	 </div> 			  		   			
						</div>
					</div>
				</div>
				

				<!--main page chart layer2-->
				
					
					
				</div>

				
				<div class="row">
					<div class="col-md-12 chart-layer2-left" style="margin-top: 30px">
							<div class="prograc-blocks">
						     <!--Progress bars-->
					        
					        <div class='bar_group'>


					        		<div class='bar_group__bar ' label='' value=''><h1 class="alert">January</h1></div>
					        		<?php
					        			$jan = $conn->query("SELECT SUM(pRmAmount) as janTotal FROM purchaserm WHERE pMonth='01' AND pYear='$year' GROUP BY pMonth");
					        			$jan1 = $jan->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $jan1['janTotal']?>'></div>
									



									<div class='bar_group__bar ' label='' value=''><h1 class="alert">February</h1></div>
									<?php
					        			$feb = $conn->query("SELECT SUM(pRmAmount) as febTotal FROM purchaserm WHERE pMonth='02' AND pYear='$year' GROUP BY pMonth");
					        			$feb1 = $feb->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $feb1['febTotal']?>'></div>
									

									

									<div class='bar_group__bar ' label='' value=''><h1 class="alert">March</h1></div>
									<?php
					        			$mar = $conn->query("SELECT SUM(pRmAmount) as marTotal FROM purchaserm WHERE pMonth='03' AND pYear='$year' GROUP BY pMonth");
					        			$mar1 = $mar->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $mar1['marTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">April</h1></div>
									<?php
					        			$apr = $conn->query("SELECT SUM(pRmAmount) as aprTotal FROM purchaserm WHERE pMonth='04' AND pYear='$year' GROUP BY pMonth");
					        			$apr1 = $apr->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $apr1['aprTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">May</h1></div>
									<?php
					        			$may = $conn->query("SELECT SUM(pRmAmount) as mayTotal FROM purchaserm WHERE pMonth='05' AND pYear='$year' GROUP BY pMonth");
					        			$may1 = $may->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $may1['mayTotal']?>'></div>
									

									<div class='bar_group__bar ' label='' value=''><h1 class="alert">June</h1></div>
									<?php
					        			$june = $conn->query("SELECT SUM(pRmAmount) as juneTotal FROM purchaserm WHERE pMonth='06' AND pYear='$year' GROUP BY pMonth");
					        			$june1 = $june->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $june1['juneTotal']?>'></div>
									

									<div class='bar_group__bar ' label='' value=''><h1 class="alert">July</h1></div>
									<?php
					        			$july = $conn->query("SELECT SUM(pRmAmount) as julyTotal FROM purchaserm WHERE pMonth='07' AND pYear='$year' GROUP BY pMonth");
					        			$july1 = $july->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $july1['julyTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">August</h1></div>
									<?php
					        			$aug = $conn->query("SELECT SUM(pRmAmount) as augTotal FROM purchaserm WHERE pMonth='08' AND pYear='$year' GROUP BY pMonth");
					        			$aug1 = $aug->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $aug1['augTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">September</h1></div>
									<?php
					        			$sep = $conn->query("SELECT SUM(pRmAmount) as sepTotal FROM purchaserm WHERE pMonth='09' AND pYear='$year' GROUP BY pMonth");
					        			$sep1 = $sep->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $sep1['sepTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">October</h1></div>
									<?php
					        			$oct = $conn->query("SELECT SUM(pRmAmount) as octTotal FROM purchaserm WHERE pMonth='10' AND pYear='$year' GROUP BY pMonth");
					        			$oct1 = $oct->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $oct1['octTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">November</h1></div>
									<?php
					        			$nov = $conn->query("SELECT SUM(pRmAmount) as novTotal FROM purchaserm WHERE pMonth='11' AND pYear='$year' GROUP BY pMonth");
					        			$nov1 = $nov->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $nov1['novTotal']?>'></div>
									


									<div class='bar_group__bar ' label='' value=''><h1 class="alert">December</h1></div>
									<?php
					        			$dec = $conn->query("SELECT SUM(pRmAmount) as decTotal FROM purchaserm WHERE pMonth='12' AND pYear='$year' GROUP BY pMonth");
					        			$dec1 = $dec->fetch_assoc();
					        				
					        		?>
									<div class='bar_group__bar thin' label='RM Purchase' show_values='true' tooltip='true' value='<?php echo $dec1['decTotal']?>'></div>
									
									
						    </div>


								
					      </div>

					</div>
					
				</div>
			</div>
			

		
    	
		
	





		

		</div>
		<p class="alert bg-info " style="text-align: center; margin-top:20px">Powered By @ NAHID HASAN BHUIYAN & TEAM</p>
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



<!--//Progress bars-->
<script src="../../js/bars.js"></script>


</body>
</html>                     