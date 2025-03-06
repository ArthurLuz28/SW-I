<?php

    $login = $_POST["Login"];
    $pass = $_POST["Pass"];

    if ($login == "etec"){
        if ($pass == "informática"){
            echo "Login Sucedido";
        }
    }else{
        echo "Login e/ou Senha incorreta!";
    }