<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $data = $_POST["data"];
    $cartao = $_POST["cartoes"];

    echo "Olá, seu nome é: $nome <br>";
    echo "Seu email: $email <br>";
    echo "Sua data de nascimento: $data <br>";
    echo "Seu cartão de crédito: $cartao";

?>
