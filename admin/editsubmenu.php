<?php 
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: index.php");
    exit;
}
include 'connection.php';


$id =$_GET["editid"];

$result1 = $con->query("select * from submenu where id='$id'");

$row1 = $result1->fetch_object();

$food_id1 = $row1->food_id;


$result = $con->query("select * from mainfood");

$rowcount = $result->num_rows;
 
if(isset($_POST['submit']))
{
	$nameofitem=$_POST['nameofitem'];
	$description=$_POST['description'];
	$price=$_POST['price'];
	$food=$_POST['mainfood'];
	

	
	$exe = $con->query("UPDATE submenu SET itemname='$nameofitem', description='$description', price='$price', food_id='$food' WHERE id='$id'");

	if($exe)
	{
		header('location:view.php');
	}
	else
	{
		echo "<script>alert('Something Went Wrong');</script>";
	}

}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Admin | The3rdStreet</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<script src="js/bootstrap.min.js"> </script>
  
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

</head>
<body>
<div id="wrapper">
     <!----->
     <?php include 'headersidebar.php'?>
        <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="dashboard.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Update Sub Menu</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">
 		
<!---->




<!---->
  <div class="grid-form1">
  	       <h3>Add Food Items</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" method="post">
							<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Name Of Item</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $row1->itemname;?>"class="form-control1" id="focusedinput" placeholder="Name Of Item" name="nameofitem">
									</div>
									
								</div>	
								
								
								
								<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Description</label>
									<div class="col-sm-8"><textarea name="description" id="txtarea1" placeholder="Add More details" cols="50" rows="5" class="form-control1"><?php echo $row1->description;?></textarea></div>
								</div>
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Price</label>
									<div class="col-sm-8">
										<input type="text" value="<?php echo $row1->price;?>"class="form-control1" id="focusedinput" placeholder="Default Input"  name="price">
									</div>
									
								</div>
								
								<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Main Categoty </label>
									<div class="col-sm-8"><select name="mainfood" id="selector1" class="form-control1">
										<option value="">--Select--</option>
										<?php
														while ($row = $result->fetch_object())
													    {
															?>
															
																<option value="<?php echo $row->id ?>" <?php if($food_id1 == $row->id) echo 'selected';?>><?php echo $row->foodname ?></option>
																
									
															<?php 
														} 
													?>
									</select></div>
								</div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <button class="btn-primary btn" name="submit" value="Submit">Submit</button>
                                        <button class="btn-default btn" >Reset</button>
                                        
                                    </div>
                                </div>
							</form>
						</div>
					</div>
					
				
 	<!--//grid-->
		<!---->

		</div>
		<div class="clearfix"> </div>
       </div>
     <!--scrolling js-->
	<script src="js/jquery.nicescroll.js"></script>
	<script src="js/scripts.js"></script>
	<!--//scrolling js-->
<!---->

</body>
</html>

