<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: index.php");
    exit;
}
include 'connection.php';

$result = $con->query("select * from offer");

$rowcount = $result->num_rows;


 ?>
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
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<style>
    .content-mid {
        display: flex;
        justify-content: center;
    }

    .col-md-5 {
        /* Optional: Adjust width or other styles as needed */
    }
    th{
        color:white;
    }
</style>
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

<!--pie-chart--->
<script src="js/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="js/skycons.js"></script>
<!--//skycons-icons-->
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
				<span>View Offer</span>
				</h2>
		    </div>
		<!--//banner-->
		<!--content-->
	
		
		<!--//content-->

        <div class="grid-form">

  
<div class="grid-form1">
         <h3 class="alert alert-danger text-center">All Offers</h3>
          


<div class="table-responsive">
    <table class="table table-bordered">
        <thead class="thead-dark" style="color: white;">
            <tr style="background-color:#d95459;">
                <th>Offer Id</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Other</th>
                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = $result->fetch_object()) {
                ?>
                <tr>
                    <td><?php echo $row->id ?></td>
                    <td><?php echo $row->itemname ?></td>
                    <td><?php echo $row->description ?></td>
                    <td><?php echo $row->price ?></td>
                    <td><?php echo $row->other ?></td>
                    <td><img src="upload/offer/<?php echo $row->image_path;?>" height="90px" width="90px"></td>
                    <td><a href="editoffer.php?editofferid=<?php echo $row->id;?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="deleteoffer.php?delofferid=<?php echo $row->id;?>" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>



 