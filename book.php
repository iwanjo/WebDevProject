<!doctype html>
<html lang="en">
<head>
    <title>Booking - AfricaExplored</title>
    <link rel="icon" type="image/ico" href="images/logo.png"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link type="text/css" rel="stylesheet" href="css-booking/book.css" />
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
        <img src="./images/logo.png" style="height: 40px">
        <a class="navbar-brand" href="index.php">AfricaExplored</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="index_signedin.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                <li class="nav-item active"><a href="book.php" class="nav-link">Book Now</a></li>
                <li class="nav-item cta"><a href="signup.php" class="nav-link"><span>Join Us</span></a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

<div class="hero-wrap js-fullheight" style="background-image: url('images/a8.jpeg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
            <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.php">Home</a></span> <span>Book</span></p>
                <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Book With Us</h1>
            </div>
        </div>
    </div>
</div>

<!--Booking Form for users-->
<section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
        <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
                <h2 class="h4">Welcome to AfricaExplored's Booking Arena. Use the form below to choose your next magical holiday location</h2>
                <h4>Fill in all the required details and proceed to the checkout page next.</h4>
            </div>
            <div class="w-100"></div>




        </div>
        <div class="row block-9">
<!--            <div class="col-md-6 pr-md-5">-->
            <div class="col-12">
                <form action="./bookform.php"method="post">
                    <?php
                    if (isset($_GET['booking'])) {
                        if ($_GET['booking'] == "successful") {
                            echo '<p class = "empty">Welcome</p>';
                        }
                    }
                    ?>
                    <div class="form-group">
<!--                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>-->
                        <select name="" id="" class="form-control" placeholder="Keyword search">
                            <option value="">Where</option>
                            <option value="">Djemaa el Fna, Morocco</option>
                            <option value="">Victoria Falls, Zambia and Zimbabwe</option>
                            <option value=""> Spitzkoppe, Namibia</option>
                            <option value="">Mount Mulanje, Malawi</option>
                            <option value="">Lower Zambezi, Zambia</option>
                            <option value="">Bazaruto Archipelago, Mozambique</option>
                            <option value="">Virunga National Park, Democratic Republic of Congo</option>
                            <option value="">Lake Malawi, Malawi</option>
                            <option value="">African Renaissance Monument, Senegal</option>
                            <option value="">Lake Retba (Lac Rose), Senegal</option>
                            <option value="">Avenue of the Baobabs, Madagascar</option>
                            <option value="">Lake Naivasha, Kenya</option>
                            <option value="">Maletsunyane Falls, Lesotho</option>
                            <option value="">Great Mosque of Djenné, Mali</option>
                            <option value="">Nabiyotum Crater, Kenya</option>


                        </select>
                    </div>
                    <div class="form-group">
                        <input type="email" name="user-email" class="form-control" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <span class = "form-label">Check In Date</span>
                        <input class="form-control" type="date" name="check-in" required>
                    </div>
                    <div class="form-group">
                        <span class = "form-label">Check Out Date</span>
                        <input class="form-control" type="date" name="check-out" required>
                    </div>


                        <div class="form-group">
                            <span class="form-label">Adults</span>
                            <select class="form-control">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>


                        <div class="form-group">
                            <span class="form-label">Children</span>
                            <select class="form-control">
                                <option>0</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                            </select>
                            <span class="select-arrow"></span>
                        </div>
                    </div>



                    <div class="form-group">

                        <button type="submit" name="submit-checkout" class="btn btn-primary py-3 px-5">Proceed to Checkout</button>
                    </div>
            </form>


            </div>

        </div>
    </div>
</section>
<!--footer section-->
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
                        <li><a href="about.html" class="py-2 d-block">About</a></li>
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
                        <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
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
