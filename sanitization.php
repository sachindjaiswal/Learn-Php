<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization</title>
</head>
<body>
    <form action="sanitization.php" method="post">
        <label>username</label>
        <input type="text" name="username">
        <label>Age</label>
        <input type="number" name="age">
        <label>EMAIL</label>
        <input type="text" name="email">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>
<?php

    if(isset($_POST["submit"])){
        // $username = $_POST["username"];
        $username = filter_input(INPUT_POST , "username" ,FILTER_SANITIZE_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST , "age" , FILTER_SANITIZE_NUMBER_INT); 
        $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL);
        echo "Hello {$username} you are {$age} years old and you mail is {$email}";
        echo "Dummy";

    }

?>