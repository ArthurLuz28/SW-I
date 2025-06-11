<?php

    include_once 'Funcionario.class.php';

    $funcionario = new Funcionario ("Eu mesmo", 2);
    $funcionario->aumentarSalario(100);
    $funcionario->exibirInformacoes();
    
?>