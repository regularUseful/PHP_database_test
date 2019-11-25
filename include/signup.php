<?php

include_once "db.php";

if(isset($_POST["submit"])){
    $first = mysqli_real_escape_string($_POST["first"]);
    $last = mysqli_real_escape_string($_POST["last"]);
    $email = mysqli_real_escape_string($_POST["email"]);
    $uid = mysqli_real_escape_string($_POST["uid"]);
    $pwd = mysqli_real_escape_string($_POST["pwd"]);

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$pwd')";
    mysqli_query($conn, $sql);


    header("Location: ../index.php?signup=success");


}

