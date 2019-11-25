<?php

include_once "db.php";

if(isset($_POST["submit"])){

    $first = mysqli_real_escape_string($conn, $_POST["first"]);
    $last = mysqli_real_escape_string($conn, $_POST["last"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

   
    if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
        header("location: ../index.php?signup=empty&first=$first&last=$last&uid=$uid");
        exit();
    }
    else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../index.php?signup=email&first=$first&last=$last&uid=$uid");
            exit();
        }
        else{

            $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES (?, ?, ?, ?, ?)";
    
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                echo "Statment failed";
            }
            else{
                mysqli_stmt_bind_param($stmt, "sssss", $first, $last, $email, $uid, $pwd);
                mysqli_stmt_execute($stmt);
            }
        
            header("Location: ../index.php?signup=success");        

        }
    }
}
else{
    header("Location: ../index.php?signup=error");
}
