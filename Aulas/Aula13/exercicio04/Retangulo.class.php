<?php

    class Retangulo {
        private $Largura;
        private $Altura;

        public function __construct($larg, $alt) {
            $this->Largura = $larg;
            $this->Altura = $alt;
        }

        public function calcularArea() {
            return $this->Largura * $this->Altura;
        }

        public function calcularPerimetro() {
            return 2 * ($this->Largura + $this->Altura);
        }

        public function exibirDados() {
            echo "Medidas: Altura = {$this->Altura}, largura: {$this->Largura}" . "<br>";
            echo "Área: {$this->calcularArea()}" . "<br>";
            echo "Perímetro: {$this->calcularPerimetro()}";
        }
    }

?>