<?php

		include_once "inc/function.php";

		session_start();

		if(isset($_SESSION['layout'])){
			header("location: admin.php");
		}






?>



<!DOCTYPE HTML>
<html>
<head>
<title> Bhuiyan Group | Admin Login </title>
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
</head>
<body>	
<div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1><b>Admin</b></h1>
			</div>
			<div class="login-block">


				<?php

					if(isset($_POST['submit'])){

						$user = $_POST['user'];
						$pass = $_POST['pass'];


						$ad_login = $conn-> query("SELECT * FROM admin WHERE user = '$user' AND pass = '$pass'");

						$row = $ad_login-> num_rows;

						if($row == 1){
							header("location: admin.php");
							while($admin = $ad_login->fetch_assoc()){
								$_SESSION['layout'] = $admin['layout'];


							}
							 


						}else if(empty($user)){
							$message = "<p class='text-center alert alert-danger' >Your must not empty user id</p>";

						}else if(empty($pass)){
							$message = "<p class='text-center alert alert-danger' >Your must not empty password</p>";

						}else{
							$message = "<p class='text-center alert alert-danger' >Your user id or password is wrong</p>";
						}
						echo $message;


					}



				?>
				


				<form action="" method="POST">
					<input type="text" name="user" placeholder="User" required="">
					<input type="password" name="pass" class="lock" required="" placeholder="Password">
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
					<input type="submit" name="submit" value="Login">	
					
					
				</form>
				<h5><a href="index.php">Go Back to Home</a></h5>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights alert bg-info">
	 <p>© 2020 Bhuiyan Group. All Rights Reserved | Design by  <a href="#" target="_blank">NAHID HASAN BHUIYAN & TEAM</a> </p>
</div>	
<!--COPY rights end here-->

<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
