<?php
    $menus = array("biryani"=>100 ,"Soup"=>50 , "Shwarma"=>90 , "Noodle"=>100 , "Triple Rice"=>150);
    $menus["Rice"] = 90 ; 
    $menus["biryani"] = 150;

    echo $menus["biryani"];
    foreach($menus as $dish=>$price ){
         echo " {$dish} = {$price} <br> ";
         echo "difjdff" ;
    }


?>