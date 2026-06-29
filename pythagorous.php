<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Triangle</title>
</head>     
<body>
    <form action="pythagorous.php" method="post">
        <label >SideA</label>
        <input type="number" name="sideA"><br>
        <label >SideB</label>
        <input type="number" name="sideB"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php 

    $sideA= $_POST["sideA"];
    $sideB = $_POST["sideB"];

    function hypo(int $sideA ,int  $sideB){
        $hypo = sqrt(($sideA**2 + $sideB**2));
        return  $hypo;
    }
    if($_POST["submit"]){
        echo hypo($sideA,$sideB);
    
    }
?>