<?php

    $nome = $_GET["name"];
    $n1 = $_GET["n1"];
    $n2 = $_GET["n2"];
    $n3 = $_GET["n3"];

    $media = ($n1 + $n2 + $n3)/3;

    echo "Olá $nome, sua média é: $media";
