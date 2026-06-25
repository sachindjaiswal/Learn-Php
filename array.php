<?php
    $foods = array("apple","orange","banana" , "coconut" , "strawberry");
    echo $foods[0]. "<br>";

    $foods[0] = "pineapple";
    array_push($foods , "laptop");
    array_pop($foods);
    array_shift($foods);
    $reverseArray = array_reverse($foods);
    foreach ($reverseArray as $element) {
        echo $element . "<br>";
    }
    foreach($foods as $food){
        echo $food . "<br>" ;
    } 
?>