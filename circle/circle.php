<?php

    $radius = $_GET["radius"];
    $pi = pi();
    $circumference = 2*$pi*$radius;
    $area = $pi*$radius**2 ;
    $volume = (4/3)*$pi*$radius**3 ;
    echo "{$volume} <br>" ;
    echo "{$area} <br>" ;
    echo "{$circumference} <br>" ;
?>