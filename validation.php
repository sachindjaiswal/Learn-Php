<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sanitization</title>
</head>
<body>
    <form action="validation.php" method="post">
        <label>username</label>
        <input type="text" name="username">
        <label>Age</label>
        <input type="text" name="age">
        <label>EMAIL</label>
        <input type="text" name="email">
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){
        $age = filter_input(INPUT_POST , "age" , FILTER_VALIDATE_INT);
        if(empty($age)){
            echo "That age is not valid , please enter a valid number";
        }else{
            echo "your age is {$age}";
        }
    }

?>