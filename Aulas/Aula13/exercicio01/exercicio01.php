<?php

    include_once 'Aluno.class.php';

    $aluno = new Aluno ("Luis", 10, 6);
    $aluno->retornarNome();
    $aluno->retornarMedia();
    $aluno->retornarSituacao();

?>