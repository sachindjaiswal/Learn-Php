<?php
    $menu = "biryani";
    $price = 106;

    $order = $_GET["dishname"];
    $quantity = $_GET["dishquant"];
    $total = $price * $quantity;
    if ($menu === $order) {
        echo "you have order {$order} and the price pf its one plate is {$price} so your total is {$total}  ";
    }else{
        echo "we dont serve {$order}";
    }
?>