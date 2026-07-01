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
    <form action="login.php" method="post"> 
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="username">
        <input type="submit" value="submit" name="submit">
    </form>
    <!-- <a href="index.php">see your password and username</a> -->
</body>
</html>

<?php

    if(isset($_POST["submit"])){
   $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];

    header("Location: index.php");
    }
?>