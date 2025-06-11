<?php

    class Aluno {
        private $Nome;
        private $Nota1;
        private $Nota2;

        public function __construct($nomealuno, $nota1 = 0, $nota2 = 0) {
            $this->Nome = $nomealuno;
            $this->Nota1 = $nota1;
            $this->Nota2 = $nota2;
        }

        public function retornarNome() {
            return $this->Nome;
        }

        public function  retornarMedia() {
            return ($this->Nota1 + $this->Nota2) / 2;
        }

        public function retornarSituacao() {
            echo "Nome do aluno: {$this->retornarNome()}" . "<br>";
            echo "Média do aluno: {$this->retornarMedia()}" . "<br>";
            if ($this->retornarMedia() >= 7) {
                echo "Aluno aprovado";
            } else {
                echo "Aluno reprovado";
            }
        }
    }
    
?>