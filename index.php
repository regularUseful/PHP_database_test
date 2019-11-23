<?php

    include_once 'db.php';

?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php

            $sql = "SELECT * FROM users;";
            $result = mysqli_query($conn, $sql);
            $resultCheck = mysqli_num_rows($result);
            
            if($resultCheck > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo $row["user_uid"] . " ";
                };
            };
        ?>

    </body>
</html>