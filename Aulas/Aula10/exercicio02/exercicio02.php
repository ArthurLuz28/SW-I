<?php

    include_once 'Carro.class.php';

    $carro1 = new Carro;
    $carro2 = new Carro;
    $carro3 = new Carro;
    $carro4 = new Carro;
    $carro5 = new Carro;

    $carro1->Marca = "A";
    $carro1->Modelo = "One";
    $carro1->Combustivel = "Etanol";
    $carro1->Portas = 4;
    $carro1->Capacidade_tanque = "175 Litros";
    
    $carro2->Marca = "B";
    $carro2->Modelo = "Two";
    $carro2->Combustivel = "Diesel";
    $carro2->Portas = 2;
    $carro2->Capacidade_tanque = "125 Litros";

    $carro3->Marca = "C";
    $carro3->Modelo = "Three";
    $carro3->Combustivel = "Etanol";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = "225 Litros";

    $carro4->Marca = "D";
    $carro4->Modelo = "Four";
    $carro4->Combustivel = "Diesel";
    $carro4->Portas = 2;
    $carro4->Capacidade_tanque = "100 Litros";

    $carro5->Marca = "E";
    $carro5->Modelo = "Five";
    $carro5->Combustivel = "Etanol";
    $carro5->Portas = 4;
    $carro5->Capacidade_tanque = "150 Litros";

    $carro1->MostrarDetalhes();
    $carro2->MostrarDetalhes();
    $carro3->MostrarDetalhes();
    $carro4->MostrarDetalhes();
    $carro5->MostrarDetalhes();