<?php

    class Funcionario {
        private $Nome;
        private $Salario;

        public function __construct($nomefunc, $salariofunc = 0) {
            $this->Nome = $nomefunc;
            $this->Salario = $salariofunc;
        }

        public function aumentarSalario($aumento) {
            $this->Salario *= (1+$aumento/100);
        }

        public function exibirInformacoes() {
            echo "Nome do Funcionário: {$this->Nome}" . "<br>";
            echo "Salário Atual: {$this->Salario}" . "<br>";
        }
    }