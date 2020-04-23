<?php
include ('./config/database.php');
?>



<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Join the Community</title>
    <link rel="icon" type="image/ico" href="images/logo.png"/>
    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/02196bfd47.js" crossorigin="anonymous"></script>

</head>
<body>
<img src="./images/logo.png" style="height: 200px">
<a class="navbar-brand" href="index.php">Click here to return to the home page</a>

<?php

if (isset($_GET['error'])){
    if ($_GET['error'] == "emptyfields"){
        echo '<p class = "empty">Fill In All Fields!</p>';

    }
    elseif ($_GET['error'] == "invalidmail"){
        echo '<p>You have input an invalid email</p>';

    }elseif ($_GET['error'] == "password-check"){
        echo '<p>Error, Passwords do not match</p>';

    }elseif ($_GET['error'] == "emailtaken") {
        echo '<p>An account already exists with the same Email</p>';
    }


}
?>

<h2>Join the community at AfricaExplored</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="./includes/signnup.inc.php" method="post">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" name="userId" placeholder="Name" />
            <input type="email" name="emailId" placeholder="Email" required/>
            <input type="password" name="passwordId" placeholder="Password" required/>
            <input type="password" name="password-repeat" placeholder="Confirm Password" required/>
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="./includes/login.inc.php" method="post">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input type="text" name="user" placeholder="Name" required/>
            <input type="password"name="password" placeholder="Password" required/>
            <a href="#">Forgot your password?</a>
            <button type="submit" name="login-submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button type="submit" class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Fellow Adventurer!</h1>
                <p>Enter your personal details and never lose your sense of wonder</p>
                <button type="submit" class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<footer>
    <p>Africa's beauty is eternal</p>
</footer>

<script src="" async defer></script>
<script src = "script.js"></script>
</body>
</html>