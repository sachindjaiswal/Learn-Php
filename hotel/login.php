<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="login.php" method="post"> 
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){
        $username = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST , "password" , FILTER_SANITIZE_SPECIAL_CHARS);

        $_SESSION["username"] = $username ;
        $_SESSION["password"] = $password ;
        // echo "{$username}  , {$password}" ;
        header("Location: hotelOrder.php");
        // if()){

        // }
    }

?>