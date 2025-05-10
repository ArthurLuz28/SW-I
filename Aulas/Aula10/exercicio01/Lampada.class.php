<?php
    class Lampada{

        // atributos da lampada
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;
        
        // métodos da lampada
        public function Ligar(){
            $this->Status = True;
        }
        public function Desligar(){
            $this->Status = False;
        }
        public function ListaDetalhes(){
            echo "Fabricante: " . $this->Fabricante . "<br>";
            echo "Tensão: " . $this->Tensao . "<br>";
            echo "Potência: " . $this->Potencia . "<br>";
            echo "Cor: " . $this->Cor . "<br>";

            if ($this->Status == True){
                echo "Status: Ligada" . "<br>";
            }
            else{
                echo "Status: Desligada" . "<br>";
            }
            //echo "Status: " . $this->Status . "<br>";
            echo "<hr>";
        }
    }
?>