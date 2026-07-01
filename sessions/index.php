<?php

    session_start() ;

    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
    <input type="submit" name="submit" value="logout">
    </form>
</body>
</html>

<?php

    $username =  $_SESSION["username"];
    echo "usernmae {$username}" ;
    if(isset($_GET["submit"])){
        session_destroy();
        header("Location: login.php");
    }
?>