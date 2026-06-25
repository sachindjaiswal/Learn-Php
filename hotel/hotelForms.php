<?php
    $menus = array("biryani"=>100 ,"Soup"=>50 , "Shwarma"=>90 , "Noodle"=>100 , "Triple Rice"=>150);
    

    $order = $_GET["dishname"];
    if ($menus[$order]) {
        $quantity = $_GET["dishquant"];
        $total = $menus[$order] * $quantity;
        echo "you have order {$order} and the price pf its one plate is {$menus[$order]} so your total is {$total}  ";
        
    }
    else{
        echo "we dont serve {$order}";
    }
?>