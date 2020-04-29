<?php
if (isset($_POST['submit-checkout'])){

    $email = $_POST['user-email'];
    $checkin = $_POST['check-in'];
    $checkout = $_POST['check-out'];

    header('Location:checkout.php?booking=success');

}