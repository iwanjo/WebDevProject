<?php

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "new_users";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (!$conn){
    die("Failed to connect to the database! ".mysqli_connect_error());

}