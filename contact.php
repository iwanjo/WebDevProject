<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - AfricaExplored</title>
    <link rel="icon" type="image/ico" href="images/logo.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.php">AfricaExplored</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index_signedin.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <!-- <li class="nav-item"><a href="tour.html" class="nav-link">Tour</a></li> -->
                <!-- <li class="nav-item"><a href="hotel.html" class="nav-link">Hotels</a></li> -->
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item active"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="book.php" class="nav-link">Book Now</a></li>
                <li class="nav-item cta"><a href="signup.php" class="nav-link"><span>Join Us</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Contact Information</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
                <p><span>Address:</span> 2nd Floor Kigali Heights, The African Leadership University</p>
            </div>
            <div class="col-md-3">
                <p><span>Phone:</span> <a href="tel://1234567920">+254798765024</a></p>
            </div>
            <div class="col-md-3">
                <p><span>Email:</span> <a href="mailto:info@yoursite.com">i.wanjohi@alustudent.com</a></p>
            </div>

        </div>
        <div class="row block-9">
            <div class="col-md-6 pr-md-5">
                <form action="./contactform.php" method="post">
                    <?php
                    if (isset($_GET['message'])) {
                        if ($_GET['message'] == "sent") {
                            echo '<p class = "empty">Thanks for sending your message, give us upto 48 hours to respond!</p>';
                        }
                    }
                    ?>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
                    </div>
                    <div class="form-group">

                        <button type="submit" name="submit" class="btn btn-primary py-3 px-5">Send Your Message</button>
                    </div>
                </form>

            </div>

            <div class="col-md-6" id="map"></div>
        </div>
    </div>
</section>


<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">AfricaExplored</h2>
                    <p>Never lose your sense of wonder.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">About</a></li>
                        <li><a href="#" class="py-2 d-block">Service</a></li>
                        <li><a href="#" class="py-2 d-block">Terms and Conditions</a></li>
                        <li><a href="#" class="py-2 d-block">Become a partner</a></li>
                        <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Customer Support</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">FAQ</a></li>
                        <li><a href="#" class="py-2 d-block">Payment Option</a></li>
                        <li><a href="#" class="py-2 d-block">Booking Tips</a></li>
                        <li><a href="#" class="py-2 d-block">How it works</a></li>
                        <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">2nd Floor, Kigali Heights, The African Leadership University</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+254798765024</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">i.wanjohi@alustudent.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">


                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
            </div>
        </div>
    </div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
</html>