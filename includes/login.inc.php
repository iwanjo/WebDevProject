<?php

if (isset($_POST['login-submit'])){
    require 'dbh.inc.php';

    $mailuid = $_POST['user'];
    $password = $_POST['password'];

    if (empty($mailuid) || empty($password)){
        header("Location: ../index.php?error=emptyfields");
        exit();

    }
    else{
        $sql = "SELECT * FROM our_users WHERE user_name=?; ";
        $statement = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($statement, $sql)){
            header('Location: ../index.php?error=sqlerror');
            exit();


        }else{
            mysqli_stmt_bind_param($statement, "s", $mailuid);
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);

            if ($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['user_pass']);

                if ($pwdCheck == false){
                    header('Location: ../signup.php?error=wronguserpassword');
                    exit();

                }elseif ($pwdCheck == true){
                    session_start();
                    $_SESSION['userId'] = $row['user_id'];
                    $_SESSION['name_user'] = $row['user_name'];

                    header('Location: ../index_signedin.php?login=success');
                    exit();

                }else{
                    header('Location: ../index.php?error=wrongpassword');
                    exit();

                }

            }
            else{
                header('Location: ../signup.php?error=nouser');
                exit();
            }
        }
    }

}

else{
    header("Location: ../index.php");
    exit();
}