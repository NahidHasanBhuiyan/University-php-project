<?php

		include_once "../../inc/function.php";

		session_start();

		if(empty($_SESSION['facLayout'])){
			header("location: ../../factoryLogin.php");
		}

		date_default_timezone_set("Asia/Dhaka");
		$date = date('d-m-Y / D');







?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Factory | Research & Development</title>
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
									 <h1 class="text-center" style="padding: 5px; color: #fff"><b>R & D</b></h1> 
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

		

				
							    
                                <div class="panel panel-success" style="margin-top: 10px">
                                	<?php
                                		if(isset($_POST['addrNd'])){
                                			$rNdRmName = $_POST['rNdRmName'];
                                			$rNdQuantity = $_POST['rNdQuantity'];
                                			$rNdUnit = $_POST['rNdUnit'];
                                			$rNdPrice = $_POST['rNdPrice'];
                                			$rNdNotes = $_POST['rNdNotes'];
                                			$rNdStatus = "Pending";
                                			$rNdDate = date('d-m-Y');

                                			
                                			if(empty($rNdRmName) || empty($rNdQuantity) || empty($rNdUnit) || empty($rNdPrice)){
											$message = "<p class='alert alert-danger'>Field Must Not Be Empty</p>";

											}else{
												$pr = $conn->query("SELECT * FROM rowmaterial WHERE rmName = '$rNdRmName' ");

												$prod = $pr->fetch_assoc();
												$prNameCheak = $prod['rmName'];
												$prUnitCheak = $prod['rmUnit'];

												if($prNameCheak==$rNdRmName AND $prUnitCheak== $rNdUnit){
												
											$conn-> query("INSERT INTO rndusedrm (rNdRmName,rNdQuantity,rNdUnit,rNdPrice,rNdNotes,rNdStatus,rNdDate) VALUES('$rNdRmName','$rNdQuantity','$rNdUnit','$rNdPrice','$rNdNotes','$rNdStatus','$rNdDate')");
											$message = "<p class='alert alert-success'>Successfully added R&D Used RM!</p>";
											}else{
													$message = "<p class='alert alert-danger'>Danger! Product & Unit Mismatch!</p>";
												}
												
											}
											echo $message;
									}

                                	?>
								<form action="" method="POST">
                                    
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="div">
                                                	<h3 class="alert bg-primary">Research & Development</h3>
                                                </div>
                                                    <div class="chosen-select-single mg-b-20" style="margin-top: 8px;">
		                                                <label><i class="fa fa-list" aria-hidden="true"></i> Row Material</label>
		                                                <select name="rNdRmName" class="chosen-select" tabindex="-1">
																<option value="">Select</option>
																<?php
																	$row = $conn->query("SELECT DISTINCT rmName FROM rowmaterial");
																	while($material = $row->fetch_assoc()):
																?>
		                                                        	<option class="text-capitalize" value="<?php echo $material['rmName'];?>"><?php echo $material['rmName'];?></option>
		                                                        	<?php endwhile;?>
														</select>
		                                            </div>
                                                    <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-calculator" aria-hidden="true"></i> Quantity</label>
                                                        
                                                        <input name="rNdQuantity" type="text" class="form-control" placeholder="Ex: 5">
                                                    </div>
                                                    <div class="chosen-select-single mg-b-20" style="margin-top: 8px;">
		                                                <label><i class="fa fa-balance-scale" aria-hidden="true"></i> Unit</label>
		                                                <select name="rNdUnit" class="chosen-select" tabindex="-1">
																<option value="">Select</option>
																<?php
																	$un = $conn->query("SELECT DISTINCT unitName FROM unit");
																	while($unit = $un->fetch_assoc()):
																?>
		                                                        	<option class="text-capitalize" value="<?php echo $unit['unitName'];?>"><?php echo $unit['unitName'];?></option>
		                                                        	<?php endwhile;?>
														</select>
		                                            </div>
		                                            <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-money" aria-hidden="true"></i> Price (BDT)</label>
                                                        
                                                        <input name="rNdPrice" type="text" class="form-control" placeholder="Ex: 500">
                                                    </div>
                                                    
		                                            <div class="form-group" style="margin-top: 8px;">
                                                    	<label for=""><i class="fa fa-sticky-note-o" aria-hidden="true"></i> Notes (if any)</label>
                                                        
                                                        <input name="rNdNotes" type="text" class="form-control" placeholder="Ex: Not necessary">
                                                    </div>
                                                    
                                                   
                                            </div>
                                            
                                        </div>
                                        <div class="row" style="margin-top: 8px">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="text-center mg-b-pro-edt custom-pro-edt-ds">
                                                    
                                                    <input name="addrNd" class="btn btn-success" type="submit" value="Add Used Rm">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                   
                                  </form>
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
                                    <th>Used RM Name</th>
                                    <th>Quantity</th>
                                    <th>Unit</th>
                                    <th>Amount (BDT)</th>
                                    <th>Notes</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                	$row = $conn->query("SELECT * FROM rndusedrm WHERE rNdStatus='Pending'");
                                	$i=1;
                                	while($rNd=$row->fetch_assoc()):

                                ?>
                                <tr>
                                    <td><?php echo $i++;?></td>
                                    <td class="text-capitalize"><?php echo $rNd['rNdRmName']?></td>
                                    <td><?php echo $rNd['rNdQuantity']?></td>
                                    <td class="text-capitalize"><?php echo $rNd['rNdUnit']?></td>
                                    <td><?php echo $rNd['rNdPrice']?> <span>TK</span></td>
                                    <td><?php echo $rNd['rNdNotes']?></td>
                                    
                                    <td></td>

                                    <td>
                                         <a onclick="javascript: return confirm('Are You Sure?');" href="inc/rNdConfirm.php?sl=<?php echo $rNd['sl']?>"><button data-toggle="tooltip" title="All ok" class="pd-setting-ed"><i class="fa fa-check" aria-hidden="true"></i></button></a>
                                        <a onclick="javascript: return confirm('Please Confirm Delation');" href="inc/rNdDelete.php?sl=<?php echo $rNd['sl']?>"><button data-toggle="tooltip" title="Delete" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a>
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
                                    <h3 class="alert bg-success"><b>R & D RM List</b></h3>
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
                                                <th data-field="Used RM Name" data-editable="false">Used RM Name</th>
                                                <th data-field="Unit" data-editable="false">Unit</th>
                                                <th data-field="Quantity" data-editable="false">Quantity</th>
                                                <th data-field="Price (BDT)" data-editable="false">Price (BDT)</th>
                                                
                                                <th data-field="Notes" data-editable="false">Notes</th>
                                                
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                			<?php

                               					$today = date('d-m-Y');
												$previousDay = date('d-m-Y',strtotime($today.'-1 day'));
												$j=1;
                               					$was = $conn->query("SELECT * FROM rndusedrm WHERE (rNdStatus = 'Confirmed' AND rNdDate='$today' OR rNdDate='$previousDay') ORDER BY sl DESC");
                               					while($rmrnd= $was->fetch_assoc()):
                               				
                                			?>
											<tr>
												<td></td>
												<td><?php echo $j++;?></td>
			                                    <td class="text-capitalize"><?php echo $rmrnd['rNdRmName']?></td>
			                                    <td><?php echo $rmrnd['rNdQuantity']?></td>
			                                    <td class="text-capitalize"><?php echo $rmrnd['rNdUnit']?></td>
			                                    <td><?php echo $rmrnd['rNdPrice']?> <span>TK</span></td>
			                                    <td><?php echo $rmrnd['rNdNotes']?></td>
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