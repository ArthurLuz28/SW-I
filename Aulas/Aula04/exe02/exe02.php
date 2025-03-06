<?php

    $n1 = $_GET["N1"];
    $n2 = $_GET["N2"];
    $n3 = $_GET["N3"];

    if ($n1 > $n2){
        if ($n1 > $n3){
            echo "$n1";
        }
    }
    if ($n2 > $n1){
        if ($n2 > $n3){
            echo "$n2";
        }
    }
    if ($n3 > $n1){
        if ($n3 > $n2){
            echo "$n3";
        }
    }
?>