<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $userName = $_POST['userId'];
    $userEmail = $_POST['emailId'];
    $userPass = $_POST['passwordId'];
    $userPassRepeat = $_POST['password-repeat'];

    if (empty($userName) || empty($userEmail) || empty($userPass) || empty($userPassRepeat)){
        header("Location: ../signup.php?error=emptyfields&userId=".$userName. "&email=".$userEmail);
        exit();

    }
    elseif (!filter_var($userEmail.FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error=invalidmail&userId=".$userName);
        exit();

    }
    elseif ($userPass !== $userPassRepeat){
        header("Location: ../signup.php?error=password-check&userId=".$userName . "&email = ". $userEmail);
        exit();

    }
    else{
        $sql = "SELECT user_email FROM our_users WHERE user_email =?";
        $statement = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($statement, $sql)){
            header("Location: ../signup.php?error=alreadyexistingaccount");
            exit();

        }

        else{
            mysqli_stmt_bind_param($statement, "s", $userEmail);
            mysqli_stmt_execute($statement);
            mysqli_stmt_store_result($statement);
            $resultCheck = mysqli_stmt_num_rows($statement);

            if ($resultCheck > 0){
                header("Location: ../signup.php?error=emailtaken&userId=".$userName);
                exit();

            }
            else{
                $sql = "INSERT INTO our_users (user_name, user_email, user_pass) VALUES (?, ?, ?)";
                $statement = mysqli_stmt_init($conn);

                if (!mysqli_stmt_prepare($statement, $sql)) {
                    header("Location: ../signup.php?error = sqlerror");
                    exit();
                }
                else{

                    $hashed_password = password_hash($userPass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($statement, "sss", $userName, $userEmail, $hashed_password);
                    mysqli_stmt_execute($statement);
                    header("Location: ../signup.php?signup=success");
                    exit();

                }
            }
        }
    }

    mysqli_stmt_close($statement);
    mysqli_close($conn);


}
else{
    header("Location: ../signup.php");
    exit();
}