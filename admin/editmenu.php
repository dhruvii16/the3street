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

$result2 = $con->query("select * from mainfood where id='$id'");
$row2 = $result2->fetch_object();

if(isset($_POST['submit']))
{
	$foodname=$_POST['foodname'];
	

	$filename = $_FILES["logo"]["name"];
	$tmp = $_FILES["logo"]["tmp_name"];
	$path = "upload/$filename";
    move_uploaded_file($tmp, $path);

	
	$exe = $con->query("UPDATE mainfood SET image_path = '$filename' WHERE id = '$id'");


	if($exe)
	{
		header('location:viewsub.php');
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
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>Update MainMenu</span>
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
           <form class="form-horizontal" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label for="focusedinput" class="col-sm-2 control-label">Main Menu</label>
        <div class="col-sm-8">
            <input type="text" class="form-control1" value="<?php echo $row2->foodname;?>" name="foodname" id="focusedinput" placeholder="Add Menu Name" >
        </div>
    </div>
    <div class="form-group">
        <label for="exampleInputFile" class="col-sm-2 control-label">Image of Menu</label>
        <div class="col-sm-8">
            <input type="file" id="exampleInputFile" name="logo">
            <p class="help-block"></p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <button type="submit" name="submit" value="submit" class="btn-primary btn">Submit</button>
            <button type="reset" name="reset" class="btn-default btn">Reset</button>
      
        </div>
    </div>
</form>

        </div>
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

