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
        <?php
            $data = "Admin";
            //Create a template
            $sql = "SELECT * FROM users WHERE user_uid=?;";
            //Create a prepared statement
            $stmt = mysqli_stmt_init($conn);
            //Prepare the prepared statement
            if(!mysqli_stmt_prepare($stmt,$sql)){
                echo "Statement failed";
            } 
            else{
                //Bind parameters to the placeholder
                mysqli_stmt_bind_param($stmt, "s", $data);
                //Run parameters inside database
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while($row = mysqli_fetch_assoc($result)){
                    echo $row['user_uid'] . "<br />";
                }
            }
        ?>
    </body>
</html>