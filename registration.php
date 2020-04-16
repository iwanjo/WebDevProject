<?php

session_start();

$con = mysqli_query('localhost', 'root', '');

mysqli_select_db($con, 'userregistration');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo "Account Already Taken";

}else{
    $reg = " insert into usertable(name, password) values ('$name', '$pass')";
    mysqli_query($con, $reg);
    echo "Successful Registration";

}
?>