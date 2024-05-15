<?php
// Assuming you have a database connection stored in $con
include 'admin/connection.php';
// Check if the form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $message = $_POST['message'];
    $rating = $_POST['rating'];
    

    // Sanitize the data to prevent SQL injection
   $exe = $con->query("insert into feedback (message,rating) values ('$message','$rating')");

    if($exe)
    {
        echo "<script>alert('Message sent successfully');</script>";
    }
    else
    {
       echo "<script>alert('Failed to send message');</script>";
    }

   
}
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
    <style type="text/css">
        .rating-buttons {
    display: flex;
}

.rating-btn {
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    padding: 8px 16px;
    margin-right: 8px;
    cursor: pointer;
    border-radius: 10px;
}

.rating-btn:hover {
    background-color: lightpink;
}

.rating-btn.active {
    background-color: #007bff;
    color: #fff;
}

.rating-btn.active:hover {
    background-color: #0056b3;
}

.rating-btn:focus {
    outline: none;
}
.rating-buttons {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

.rating-btn {
    flex: 1 0 100px; /* Adjust the width as needed */
    margin: 5px;
}

@media screen and (max-width: 600px) {
    .rating-btn {
        flex-basis: 50%; /* Two buttons per row on smaller screens */
    }
}

    </style>
</head>

<body>
<?php include'header.php';?>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-3 mt-lg-5">Feedback</h1>
            <div class="d-inline-flex align-items-center text-white">
                <p class="m-0"><a class="text-white" href="index.php">Home</a></p>
                <i class="fa fa-circle px-3"></i>
                <p class="m-0">Feedback</p>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Feedback</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="contact-form bg-light rounded p-5">
                        <div id="success"></div>
                      <form method="post">
                            <div class="control-group">
                                <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message" name="message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                         <div class="form-group">
                                <label for="rating">Rating:</label><br>
                                <div class="rating-buttons">
                                    <button type="button" class="rating-btn" value="1">Bad</button>
                                    <button type="button" class="rating-btn" value="2">Average</button>
                                    <button type="button" class="rating-btn" value="3">Good</button>
                                    <button type="button" class="rating-btn" value="4">Very Good</button>
                                    <button type="button" class="rating-btn" value="5">Awesome</button>
                                    <input type="hidden" name="rating" id="rating-input">
                                </div>
                            </div>


                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="submit" name="submit">Send Feedback</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.rating-btn');
    const hiddenInput = document.getElementById('rating-input');

    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            buttons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            button.classList.add('active');
            hiddenInput.value = button.value;
        });
    });
});

    </script>
</body>

</html>