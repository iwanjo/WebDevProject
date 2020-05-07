<?php

$server_name = "localhost";
$db_username = "id13523738_root";
$db_password = "Q0<r>2YwojuFll|6";
$db_name = "id13523738_africa_explored";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if (!$conn){
    die("Failed to connect to the database! ".mysqli_connect_error());

}