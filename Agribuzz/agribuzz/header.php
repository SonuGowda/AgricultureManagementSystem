<?php
if(!isset($_SESSION)) { session_start(); }
error_reporting(0);
$dt = date("Y-m-d");
include("dbconnection.php");
?>
<!DOCTYPE HTML> 

<html>
	<head>
		<title>agribuzz - Change The Way You Trade</title>
<!--<style>
	@font-face {
    font-family: 'rupee';
    src: url('rupee_foradian-1-webfont.eot');
   src: local('Ã¢ËœÂº'), url(data:font/truetype;charset=utf-8;base64==);
    format('truetype');
    font-weight: normal;
    font-style: normal; 
}-->
</style>
        <style type="text/css">
.button {
   border-top: 1px solid #96d1f8;
   background: #65a9d7;
   background: -webkit-gradient(linear, left top, left bottom, from(#3e779d), to(#65a9d7));
   background: -webkit-linear-gradient(top, #3e779d, #65a9d7);
	background: -moz-linear-gradient(top, #3e779d, #65a9d7);
   background: -ms-linear-gradient(top, #3e779d, #65a9d7);
   background: -o-linear-gradient(top, #3e779d, #65a9d7);
   padding: 5px 10px;
   -webkit-border-radius: 15px;
   -moz-border-radius: 15px;
   border-radius: 15px;
   -webkit-box-shadow: rgba(0,0,0,1) 0 1px 0;
   -moz-box-shadow: rgba(0,0,0,1) 0 1px 0;
   box-shadow: rgba(0,0,0,1) 0 1px 0;
   text-shadow: rgba(0,0,0,.4) 0 1px 0;
   color: white;
   font-size: 24px;
   font-family: Georgia, serif;
   text-decoration: none;
   vertical-align: middle;
   }
.button:hover {
   border-top-color: #28597a;
   background: #28597a;
   color: #ccc;
   }
.button:active {
   border-top-color: #1b435e;
   background: #1b435e;
   }
   
<!--.tftable {font-size:12px;color:#333333;width:100%;border-width: 1px;border-color: #729ea5;border-collapse: collapse;}
.tftable th {font-size:12px;background-color:#acc8cc;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;text-align:left;}
.tftable tr {background-color:#d4e3e5;}
.tftable td {font-size:12px;border-width: 1px;padding: 8px;border-style: solid;border-color: #729ea5;}
.tftable tr:hover {background-color:#ffffff;}-->
</style>
<!--<style type="text/css">
.search_categories{
  font-size: 13px;
  padding: 10px 8px 10px 14px;
  background: #fff;
  border: 1px solid #ccc;
  border-radius: 6px;
  overflow: hidden;
  position: relative;
  width:250px;
}

.search_categories .select{
  width: 120%;
  background:url('arrow.png') no-repeat;
  background-position:80% center;
}

.search_categories .select select{
  background: transparent;
  line-height: 1;
  border: 0;
  padding: 0;
  border-radius: 0;
  width: 120%;
  position: relative;
  z-index: 10;
  font-size: 1em;
}
</style>-->
<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="agribuzz" />
		<meta name="keywords" content="agribuzz" />-->
		
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<!--
		<script src="js/jquery.min.js"></script>-->
		<script src="js/skel.min.js"></script>
		
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<!--
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" ++++
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">
		<!-- Header -->
		<div id="header" style="background-color:#e6d5cf;color:#a06450;" >
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a><img src="images/logo.png" width="303" height="91" alt="Logo"/></a>                  
                    </h1>
				</div>
			</div>
            <!-- Nav -->
				<nav id="nav" style="background-color:#e6d5cf;color:#A6905A;">
					<ul>
						<li
                        <?php
						if(basename($_SERVER['PHP_SELF']) == "index.php")
						{
                          echo ' class="active"';
						}
						?>><a href="index.php" style="color:#a06450;font-weight: bold;">Home</a></li>
                        
                        <?php
						if(isset($_SESSION[customerid]))
						{
						?>
                            <li
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "customerpanel.php")
                            {
                              echo ' class="active"';
                            }
                            ?>><a href="customerpanel.php"  style="color:#a06450;font-weight: bold;">Customer Panel</a></li>
                        <?php
						}
						?>
                        
                        <?php
						if(isset($_SESSION[sellerid]))
						{
						?>
                            <li
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "sellerpanel.php")
                            {
                              echo ' class="active"';
                            }
                            ?>><a href="sellerpanel.php"  style="color:#a06450;font-weight: bold;">Farmer Panel</a></li>
                        <?php
						}
						?>          
                         <?php
						if(isset($_SESSION[workerid]))
						{
						?>
                            <li
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "workerpanel.php")
                            {
                              echo ' class="active"';
                            }
                            ?>><a href="workerpanel.php"  style="color:#a06450;font-weight: bold;">Worker Panel</a></li>
                        <?php
						}
						?>              
                        
                        <?php
						if(isset($_SESSION[adminid]))
						{
						?>
                            <li
                            <?php
                            if(basename($_SERVER['PHP_SELF']) == "adminpanel.php")
                            {
                              echo ' class="active"';
                            }
                            ?>><a href="adminpanel.php"  style="color:#a06450;font-weight: bold;">Dashboard</a></li>
                        <?php
						}
						?>
                        
                        
                        <li
                      
				    <?php
						 if(basename($_SERVER['PHP_SELF']) == "displayarticles.php")
						{
							if($_GET[articletype] == "Blog" )
                          	{
							 echo ' class="active"';
							 }
						 }
						 ?>><a href="displayarticles.php?articletype=Blog"  style="color:#a06450;font-weight: bold;">Blogs</a></li> 
                   <!--    
				   <li 
                         // <?php
						// if(basename($_SERVER['PHP_SELF']) == "displayarticles.php")
						// {
							// if($_GET[articletype] == "News" )
                          	// {
							// echo ' class="active"';
							// }
						// }
						// ?>><a href="displayarticles.php?articletype=News"  style="color:#a06450;font-weight: bold;">News</a></li>-->
						<li
                        <?php
						if(basename($_SERVER['PHP_SELF']) == "displayproducts.php")
						{
                          echo ' class="active"';
						}
						?>><a href="displayproducts.php"  style="color:#a06450;font-weight: bold;">Farmer's Kit</a></li>
                        
                        
			<?php
            $sqlproduct_purchase_record = "SELECT * FROM  product_purchase_record WHERE customer_id='$_SESSION[customerid]' AND status='Pending'";
            $qsqlproduct_purchase_record = mysqli_query($con,$sqlproduct_purchase_record);
            if(mysqli_num_rows($qsqlproduct_purchase_record) >= 1)
            {
            ?>
                <li
                <?php
                if(basename($_SERVER['PHP_SELF']) == "displaycart.php")
                {
                  echo ' class="active"';
                }
                ?>><a href="displaycart.php"  style="color:#a06450;font-weight: bold;">View Cart</a></li>
            <?php
            }
            ?>                            
						<li
                        <?php
						if(basename($_SERVER['PHP_SELF']) == "displaysales.php")
						{
                          echo ' class="active"';
						}
						?>><a href="displaysales.php"  style="color:#a06450;font-weight: bold;">Farmer's Market</a></li>
                        <li
                        <?php
						if(basename($_SERVER['PHP_SELF']) == "displayworkers.php")
						{
                          echo ' class="active"';
						}
						?>><a href="displayworkers.php"  style="color:#a06450;font-weight: bold;">Hire</a></li>
						
                        <li
                          <?php
						 if(basename($_SERVER['PHP_SELF']) == "contact.php")
						{
                          echo ' class="active"';
						 }
						 ?>><a href="contact.php"  style="color:#a06450;font-weight: bold;">Contact Us</a></li>                    
					</ul>
				</nav>
		</div>
		<!--<?php
				// $rupeesymbol = '<span style="font-family:rupee;font-size:20px">R</span>';
				// ?>-->   