<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label >x : </label>
        <input type="number" name="x">
        <label >y : </label>
        <input type="number" name="y">

        <label >z : </label>
        <input type="number" name="z">
        <input type="submit" value="total">

        
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];

    $total = null;
    // $total = abs($x);
    // $total = round($x);
    // $total = floor($x);
    $power = $x**$y;
    $total = ceil($x);
    $max = max($x , $y ,$z);
    $max = min($x , $y ,$z);
    $random = rand(1,6);
    echo $random; 
?>