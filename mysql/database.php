<?php

    $db_hostname = "localhost";
    $db_user = "root";
    $db_name = "businessDB";
    $conn ="";

    $conn = mysqli_connect($db_hostname , $db_user , "" ,$db_name);
    if($conn){
        echo "you are connected ";
    }else{
        echo "not connected ";
    }

?>