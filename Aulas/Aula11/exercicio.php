<?php

    include_once 'Produto.class.php';

    $produto = new Produto ("Banana", 6.00, 25);
    $produto->adicionarEstoque(5);
    $produto->removerEstoque(15);
    $produto->mostrarDetalhes();