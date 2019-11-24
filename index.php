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
            <input type="text" name="first" placeholder="Firstname">
            <br />
            <input type="text" name="last" placeholder="Lastname">
            <br />
            <input type="text" name="email" placeholder="Email">
            <br />
            <input type="text" name="uid" placeholder="Username">
            <br />
            <input type="password" name="pwd" placeholder="Password">
            <br />
            <button name="submit" type="submit" value="submit">Submit</button>
        </form>


    </body>
</html>