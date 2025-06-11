<?php

    include_once 'Livro.class.php';

    $livro = new Livro ("ManoSenchi", "ManoPhantom", TRUE);
    $livro->Emprestar();
    $livro->Devolver();
    $livro->exibirStatus();



?>