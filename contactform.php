<?php

if (isset($_POST['submit'])){

    $name = $_POST['name'];
    $emailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "i.wanjohi@alustudent.com";
    $headers = "From: ".$emailFrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location:contact.php?message=sent");
    echo "Message sent successfully";
}