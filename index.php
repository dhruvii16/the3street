<?php
include 'admin/connection.php';

$result = $con->query("select * from mainfood");

$rowcount = $result->num_rows;

$result12 = $con->query("select * from offer");

$rowcount12 = $result12->num_rows;

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
    <style>
        .flavors-bg {
            background-color: #ffd1dc;
            padding: 20px;
            border-radius: 15px;
        }
        
        .featured-bar {
            background-color: royalblue;
            color: white;
            text-transform: uppercase;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        
        .featured-bar:hover {
            background-color: #4169e1;
        }
    </style>
</head>

<body>
<?php include'header.php';?>
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; height: 600px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h1 class="display-3 text-white mb-md-4"> Ice Cream </h1>
                            <a href="product.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Show Menu</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/burger.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Traditional & Delicious</h4>
                            <h3 class="display-4 text-white mb-md-4"> Best burger and refreshing drinks</h3>
                            <a href="product.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Show Menu</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Traditional & Delicious Ice Cream Since 1950</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">About Us</h4>
                    <h5 class="text-muted mb-3">Eos kasd eos dolor vero vero, lorem stet diam rebum. Ipsum amet sed vero dolor sea</h5>
                    <p>Takimata sed vero vero no sit sed, justo clita duo no duo amet et, nonumy kasd sed dolor eos diam lorem eirmod. Amet sit amet amet no. Est nonumy sed labore eirmod sit magna. Erat at est justo sit ut. Labor diam sed ipsum et eirmod</p>
                    <a href="" class="btn btn-secondary mt-2">Learn More</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Our Features</h4>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos, ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est dolor</p>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <h5 class="text-muted mb-3"><i class="fa fa-check text-secondary mr-3"></i>Eos kasd eos dolor</h5>
                    <a href="" class="btn btn-primary mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Promotion Start -->
    <!-- <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/promotion.jpg" style="object-fit: cover;">
                    <button type="button" class="btn-play" data-toggle="modal"
                        data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                        <span></span>
                    </button>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4"
                        style="width: 100px; height: 100px;">
                        <h3 class="font-weight-bold text-secondary mb-0">$199</h3>
                    </div>
                    <h3 class="font-weight-bold text-white mt-3 mb-4">Chocolate Ice Cream</h3>
                    <p class="text-white mb-4">Lorem justo clita dolor ipsum ut sed eos, ipsum et dolor kasd sit ea
                        justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum</p>
                    <a href="" class="btn btn-secondary py-3 px-5 mt-2">Order Now</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Promotion End -->
 


    <!-- Products Start -->
    <div class="container-fluid py-10">
        <div class="container py-10">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Best Prices We Offer For Food Lovers</h1>
                </div>
            </div>
            <div class="row">
           
                 <?php
            while ($row = $result->fetch_object()) {
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
            ?>
                
          
                <!-- <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


   

    <!-- Portfolio Start -->
  
    <!-- Portfolio End -->


  
    <div class="flavors-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 center-block">
                
                <div class="row">
                <div class="col-sm-12" align="center">
                    <a href="index.html" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary "> Ice-<span class="text-secondary">Cream</span> <i class='fas fa-ice-cream' style="color:royalblue;"></i> <span style="color:;"> Flavors</span></h1>
                    </a>
                    <br>
                </div>
                
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Chocolate Chip Cookie Dough</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Non Fat / No Sugar Strawberry Swirl</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Cotton Candy</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Jumping Jersey Cow</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Chocolate</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Blueberry Waffle Cone</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Birthday Cake</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Daily Grind</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Orange Pudding</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Deluxe Vanilla</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Blue Moon</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Mint Chocolate Chip</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Pirates Bounty</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Caramel Collision</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Coconut Explosion</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Strawberry</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Cookie Monster</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Superman</div>
                    </div>
                    <div class="col-sm-6">
                        <div data-toggle="tooltip" data-placement="right" title="" class="featured-bar">Butter Pecan</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  <!-- Products Start -->
  <?php if($rowcount12>0)
  {
  ?>
  <div class="container-fluid py-10">
        <div class="container py-10">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5"><br>Offer Section</h1>
                </div>
            </div>
            <div class="row">
           
                 <?php
            while ($row12 = $result12->fetch_object()) {
                ?>
                <div class="col-lg-3 col-md-6 mb-4 pb-2">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-3">
                        <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                            <h4 class="font-weight-bold text-white mb-0"><?php echo $row12->price; ?></h4>
                        </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-2" style="width: 150px; height: 150px;">
                            <img class="rounded-circle w-100 h-100" src="admin/upload/offer/<?php echo $row12->image_path ?>" style="object-fit: cover;">
                        </div>
                        <h5 class="font-weight-bold mb-4"><?php echo $row12->itemname; ?></h5>
                       <p><?php echo $row12->description; ?></p>
                              <p><b><?php echo $row12->other; ?></b></p> 
                    </div>
                </div>
                 <?php
            }
            ?>
                
          
                <!-- <div class="col-12 text-center">
                    <a href="" class="btn btn-primary py-3 px-5">Load More</a>
                </div> -->
            </div>
        </div>
    </div>

<?php 
  }
  ?>
    
    <!-- Products End -->

    <!-- Team Start -->
   
    <!-- Testimonial End -->
     <!-- Services Start -->
     <div class="container-fluid py-5">
        <div class="container py-8">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                    <h1 class=" position-relative mb-5" >FIND THE 3RD STREET STATION </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2950.3354163033937!2d-89.35914894202075!3d42.31404418023386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8808897fc48f00f1%3A0xc8ee32b365a49df7!2sThe%203rd%20Street%20Station!5e0!3m2!1sen!2sin!4v1715602446927!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <a href="https://maps.app.goo.gl/bsdKmhT37csLn94z6" class="btn btn-sm btn-primary">Get Map Directions</a>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Services End -->


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