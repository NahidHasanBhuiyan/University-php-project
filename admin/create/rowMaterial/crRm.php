<?php

		include_once "../../../inc/function.php";

		session_start();


		if(empty($_SESSION['layout'])){
			header("location: ../../../adminLogin.php");
		}
		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');



?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Reports | Add RM</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>Create RM</b></h1> 
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
<div class="inner-block" >
<!--market updates updates-->
	 <div class="container-fluid" >
		<p class="alert bg-info text-right">Date: <?php echo $date;?></p>

		

							<?php

								if(isset($_POST['addUnit'])){
									$unitName = $_POST['unitName'];
									
									if(empty($unitName) ){
										$message = "<p class='alert alert-danger'>Field Must Not Be Empty</p>";

									}else{
										$conn->query("INSERT INTO unit(unitName) VALUES('$unitName')");
										$message = "<p class='alert alert-success'>Successfully added Unit!</p>";
									}
									echo $message;
								}

							?>
							<div class="panel panel-success">
								<form action="" method="POST">
                                    
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="div">
                                                	<h3 class="alert alert-success">Add Unit</h3>
                                                </div>
                                                    
                                                    <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-pencil" aria-hidden="true"></i> Unit Name</label>
                                                        
                                                        <input name="unitName" type="text" class="form-control" placeholder="Ex: Kg">
                                                    </div>
                                                    
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="row" style="margin-top: 8px">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input name="addUnit" type="submit" class="btn btn-success" value="Add Unit">

                                                    
                                                </div>
                                            </div>
                                        </div>
                                   
                                  </form>
                                </div>    
                                <div class="panel panel-success" style="margin-top: 10px">
								<?php
									if(isset($_POST['addRm'])){
										$rmName = $_POST['rmName'];
										$rmQuantity = $_POST['rmQuantity'];
										$rmUnit= $_POST['rmUnit'];
										$rmPrice = $_POST['rmPrice'];
										$rmSource = $_POST['rmSource'];

										
										if(empty($rmName) || empty($rmQuantity) || empty($rmUnit) || empty($rmPrice) || empty($rmSource) ){
										$message = "<p class='alert alert-danger'>Field Must Not Be Empty</p>";

										}else{
											$conn-> query("INSERT INTO rowmaterial(rmName,rmQuantity,rmUnit,rmPrice,rmSource) VALUES('$rmName','$rmQuantity','$rmUnit','$rmPrice','$rmSource')");
										$message = "<p class='alert alert-success'>Successfully added Row Material!</p>";
										}
										echo $message;
										}

								?>
								<form action="" method="POST">
                                    
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="div">
                                                	<h3 class="alert alert-success">Add Row Material</h3>
                                                </div>
                                                    
                                                    <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-pencil" aria-hidden="true"></i> RM Name</label>
                                                        
                                                        <input name="rmName" type="text" class="form-control" placeholder="Ex: Atta">
                                                    </div>
                                                    <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-calculator" aria-hidden="true"></i> Quantity</label>
                                                        
                                                        <input name="rmQuantity" type="text" class="form-control" placeholder="Ex: 2">
                                                    </div>
                                                    
                                                    <div class="chosen-select-single mg-b-20" style="margin-top: 8px;">
		                                                <label><i class="fa fa-balance-scale" aria-hidden="true"></i> Unit</label>
		                                                <select name="rmUnit" class="chosen-select" tabindex="-1">
																<option value="">--Select--</option>
																<?php
																	$un = $conn->query("SELECT DISTINCT unitName FROM unit");
																	while($unit = $un->fetch_assoc()):
																?>
		                                                        	<option class="text-capitalize" value="<?php echo $unit['unitName'];?>"><?php echo $unit['unitName'];?></option>
		                                                        	<?php endwhile;?>
														</select>
		                                            </div>
                                                    


                                                    <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-money" aria-hidden="true"></i> Price</label>
                                                        
                                                        <input name="rmPrice" type="text" class="form-control" placeholder="Ex: 2">
                                                    </div>
                                                    
                                                    <div class="chosen-select-single mg-b-20" style="margin-top: 8px;">
		                                                <label><i class="fa fa-user" aria-hidden="true"></i> Source</label>
		                                                <select name="rmSource" class="chosen-select" tabindex="-1">
															
                                                        	
																<option value="">--Select--</option>
																<?php
																	$cr = $conn->query("SELECT srcName FROM crsrc");
																	while($crsrc = $cr->fetch_assoc()):
																?>
		                                                        	<option class="text-capitalize" value="<?php echo $crsrc['srcName'];?>"><?php echo $crsrc['srcName'];?></option>
		                                                        	<?php endwhile;?>
														
														</select>
		                                            </div>

                                                    
                                                    
                                                    
                                                
                                            </div>
                                            
                                        </div>
                                        <div class="row" style="margin-top: 8px">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    <input name="addRm" type="submit" class="btn btn-success" value="Add RM">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                   
                                  </form>
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
                                    <h3 class="alert alert-info"><b>Row Material List</b></h3>
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
                                                <th data-field="RM Name" data-editable="false">RM Name</th>
                                                <th data-field="Quantity" data-editable="false">Quantity</th>
                                                <th data-field="Unit" data-editable="false">Unit</th>
                                                <th data-field="Price(TK)" data-editable="false">Price(TK)</th>
                                                <th data-field="Source" data-editable="false">Source</th>
                                                <th data-field="Action" data-editable="false">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        	<?php
                                        		$aaa = $conn->query("SELECT * FROM rowmaterial ORDER BY sl DESC");
                                        		$i=1;
                                        		while($material = $aaa->fetch_assoc()):
                                        	?>
                                            <tr>
                                                <td></td>
                                                <td><?php echo $i++;?></td>
                                                <td><?php echo $material['rmName'];?></td>
                                                <td><?php echo $material['rmQuantity'];?></td>
                                                <td><?php echo $material['rmUnit'];?></td>
                                                <td><?php echo $material['rmPrice'];?></td>
                                                <td><?php echo $material['rmSource'];?></td>
                                                <td>
			                                        
			                                        <a onclick="javascript: return confirm('Please Confirm Delation');" href="deleteRm.php?sl=<?php echo $material['sl']?>"><button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
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
</body>
</html>                     