<?php

		include_once "inc/function.php";

		session_start();

		if(isset($_SESSION['outName'])){
			header("location: outlet.php");
		}

		







?>
<!DOCTYPE HTML>
<html>
<head>
<title>Bhuiyan Group | Outlet Login </title>
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
<!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="plugin/chosen/bootstrap-chosen.css">
</head>
<body >	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1><b>Outlet</b></h1>
			</div>
			<div class="login-block">
				<?php
					if(isset($_POST['outletLogin'])){
						$outletName = $_POST['outletName'];
						$outletUser = $_POST['outletUser'];
						$outletPass = $_POST['outletPass'];

						$out = $conn-> query("SELECT * FROM croutlet WHERE outName = '$outletName' AND outUser = '$outletUser' AND outPass = '$outletPass' ");

						$row = $out-> num_rows;

						$t = $conn-> query("SELECT * FROM croutlet WHERE outName = '$outletName' AND taxUser = '$outletUser' AND taxPass = '$outletPass' ");
						
						$tax = $t-> num_rows;

						if($row == 1){
							header('location: outlet.php');
							while($outlet = $out->fetch_assoc()){
								$_SESSION['outUser'] = $outlet['outUser'];
								$_SESSION['outPass'] = $outlet['outPass'];
								$_SESSION['outName'] = $outlet['outName'];
								$_SESSION['outAddress'] = $outlet['outAddress'];
								$_SESSION['outPhone'] = $outlet['outPhone'];




							}
							
						}else if($tax == 1){
							header('location: outlet.php');
							while($outlet = $t->fetch_assoc()){
								$_SESSION['taxUser'] = $outlet['taxUser'];
								$_SESSION['taxPass'] = $outlet['taxPass'];
								$_SESSION['outName'] = $outlet['outName'];
								$_SESSION['outAddress'] = $outlet['outAddress'];
								$_SESSION['outPhone'] = $outlet['outPhone'];




							}
						}


						else if(empty($outletName)){
							$message = "<p class='text-center alert alert-danger' >You must not empty Outlet Name</p>";

						}else if(empty($outletUser)){
							$message = "<p class='text-center alert alert-danger' >You must not empty User</p>";

						}else if(empty($outletPass)){
							$message = "<p class='text-center alert alert-danger' >You must not empty password</p>";

						}else{
							$message = "<p class='text-center alert alert-danger' >Your user id or password is wrong</p>";
						}
						echo $message;
					}

				?>
				<form action="" method="POST">
					<div class="chosen-select-single mg-b-20" style="margin-bottom: 18px; cursor: pointer; ">
		                    
		                        <select name="outletName" class="chosen-select form-control" tabindex="-1">
									<option value="">Select Outlet Name</option>
		                            <?php 
				                            $out = $conn->query("SELECT outName FROM croutlet");
				                            while($outlet = $out->fetch_assoc()):
				                     ?>
		                                <option value="<?php echo $outlet['outName'];?>" class="text-capitalize"><?php echo $outlet['outName'];?></option>
		                                                        	
		                            <?php endwhile;?>                            	
								</select>
							<div class="clearfix"> </div>
		             </div>
		            								 
					<input type="text" name="outletUser" placeholder="User" required="">
					<input type="password" name="outletPass" class="lock" placeholder="Password">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Remember me</label>
								</li>
							</ul>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="outletLogin" value="Login">	
					
					
				</form>
				<h5><a href="index.php">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights alert bg-success">
	 <p>© 2020 Bhuiyan Group. All Rights Reserved | Design by  <a href="#" target="_blank">NAHID HASAN BHUIYAN & TEAM</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->

 <!-- chosen JS
		============================================ -->
    <script src="plugin/chosen/chosen.jquery.js"></script>
    <script src="plugin/chosen/chosen-active.js"></script>
</body>
</html>


                      
						
