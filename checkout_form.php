<?php
if (isset($_POST['submit-pay'])){

    $name = $_POST['usersname'];
    $card = $_POST['card'];
    header('Location:endgame.html?payment=success');
}