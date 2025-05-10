<?php
    // insere a classe criada - lampada
    include_once 'Lampada.class.php';

    // instancia de um novo objeto da classe lampada
    $lamp1 = new Lampada;
    $lamp2 = new Lampada;

    // atribuindo novos valores para o objeto criado
    $lamp1->Fabricante = "Philips";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 25;
    $lamp1->Cor = "Branca";

    $lamp2->Fabricante = "OSRAM";
    $lamp2->Tensao = "220";
    $lamp2->Potencia = "30";
    $lamp2->Cor = "Azul";

    // chamando o método para ligar a lampada
    $lamp1->Ligar();
    $lamp2->Desligar();

    // chamando o método que mostra os detalhes instanciados neste objeto
    $lamp1->ListaDetalhes();
    $lamp2->ListaDetalhes();