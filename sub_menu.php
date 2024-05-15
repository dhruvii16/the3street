<?php
include 'admin/connection.php';
$id = $_GET["menuid"];

$submenu = $con->query("SELECT * FROM submenu WHERE food_id = $id");


$subcount = $submenu->num_rows;


$foodname = $con->query("SELECT * FROM mainfood WHERE id = $id");
$food = $foodname->fetch_object();

$result = $con->query("select * from mainfood");

$rowcount = $result->num_rows;
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The3rdStreet</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<?php include'header.php';?>
<div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5"><?php echo $food->foodname;?></h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0"><?php echo $food->foodname;?></p>
            </div>
        </div>
    </div>
   

  
    <div class="container">
    <div class="row">
         
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading uppercase" style="font-size:30px;"><b><?php echo $food->foodname;?></b></div>
                <br>
                <div class="panel-body">
                    <div class="list-group">
                               <?php
            while ($sub = $submenu->fetch_object()) {
                ?>
                        <div class="list-group-item">
                            <h5 class="list-group-item-heading"><?php echo $sub->itemname; ?></h5>
                            <p class="list-group-item-text"><?php echo $sub->description; ?></p>
                            <h5><span class="pull-right bold" style="float:right;"> <?php echo $sub->price; ?></span></h5>
                        </div>
                         <?php
            }
            ?>
                        
                        <!-- Continue adding menu items using the same structure -->
                    </div>
                    <br>
                    <a class="btn btn-primary margin-top" href="#top"><i class="fa fa-caret-up"></i> back to top</a>
                </div>
            </div>
        </div>
            
    </div>
</div>
<div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                
            </div>
            <div class="row">
                
                 <?php

                 
            while ($row = $result->fetch_object()) {
                    $menuid=$row->id;
                    if($menuid!=$id)
                    {
                ?>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0"></h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-2" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="admin/upload/<?php echo $row->image_path ?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?php echo $row->foodname ?></h5>
                        <a href="sub_menu.php?menuid=<?php echo $row->id;?>" class="btn btn-sm btn-secondary">Menu</a>
                    </div>
                </div>
                 <?php
            }
            }
            ?>
               
          
                <!-- <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div> -->
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <?php include'footer.php';?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>