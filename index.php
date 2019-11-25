<?php
    include_once 'include/db.php';
?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>

        <form action="include/signup.php" method="POST">
            <input type="text" name="first" placeholder="Firstname" value="<?php echo isset($_GET["first"]) ? $_GET["first"]: "" ?>">
            <br />
            <input type="text" name="last" placeholder="Lastname" value="<?php echo isset($_GET["last"]) ? $_GET["last"]: "" ?>">
            <br />
            <input type="text" name="email" placeholder="Email" value="<?php echo isset($_GET["email"]) ? $_GET["email"]: "" ?>">
            <br />
            <input type="text" name="uid" placeholder="Username" value="<?php echo isset($_GET["uid"]) ? $_GET["uid"]: "" ?>">
            <br />
            <input type="password" name="pwd" placeholder="Password">
            <br />
            <button name="submit" type="submit" value="submit">Submit</button>
        </form>
        <?php

            /*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if(strpos($fullUrl, "signup=empty") == true){
                echo "<p>Please fill in all fields</p>";
            }
            else if(strpos($fullUrl, "signup=email") == true){
                echo "<p>Please enter a vallid email</p>";
            }
            else if(strpos($fullUrl, "signup=success") == true){
                echo "<p>Signup success</p>";
            }*/

            if(!isset($_GET["signup"])){
                exit();
            }

            else{
                $signupCheck = $_GET["signup"];

                if($signupCheck == "empty"){
                    echo "<p>Please fill in all fields</p>";
                    exit();
                }            
                else if($signupCheck == "email"){
                    echo "<p>Please enter a vallid email</p>";
                    exit();
                } 
                else if($signupCheck == "success"){
                    echo "<p>Signup success</p>";
                    exit();
                }
            }   
        ?>


    </body>
</html>