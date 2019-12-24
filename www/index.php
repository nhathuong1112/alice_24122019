<?php
    $imgCat=array('animals','architecture','nature','people','tech');
    for ($x = 0; $x <15; $x++)   
    { $img="https://placeimg.com/30".($x%14)."/300/".$imgCat[rand(0,4)];
    echo "<img src='" . $img. "'/>".PHP_EOL;
    }
?>