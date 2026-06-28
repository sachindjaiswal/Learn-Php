<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check boxes </title>
</head>
<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="roti" value="Roti">Roti<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="dal" value="Dal">Dal<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php

    $submit = $_POST["submit"];
    // echo $submit ;
    // $pizza = $_POST["Pizza"];
    if(isset($submit)){
        if(isset($_POST["pizza"])){
            echo "You like pizza";
        }if(isset($_POST["roti"])){
            echo "You like roti";
        }if(isset($_POST["dal"])){
            echo "You like dal";
        }if(isset($_POST["burger"])){
            echo "You like burger";
        }

    }

?>