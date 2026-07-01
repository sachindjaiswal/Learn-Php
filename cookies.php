<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cookies.php" method="post">
        <input type="submit" name="createCookie" value="create Cookie">
        <input type="submit" name="deleteCookie" value="delete Cookie">
        <input type="submit" name="printCookie" value="print Cookie">

    </form>
</body>
</html>


<?php
    function createCookie(){
        setcookie("access_token" ,"logged in" , time() +(60),"/");
        setcookie("refresh_token" , "please stay" , time() |+ 5634 , "/");
        echo $_COOKIE["access_token"] ;
        return ;
        }
    function deleteCookie(){
        setCookie("access_token" ,"logged in" , time() -0 , "/");
        return ;
    }

    function printAllCookies(){
        foreach($_COOKIE as $key => $value){
            echo " {$key} = {$value} <br> ";
        }
    }

    if(isset($_POST["createCookie"])){
        createCookie();
    }elseif(isset($_POST["deleteCookie"])){
        deleteCookie();
    }elseif(isset($_POST["printCookie"])){
        printAllCookies() ;
    }
?>