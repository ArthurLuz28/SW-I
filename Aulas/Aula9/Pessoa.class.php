<!-- Criando uma classe -->

<?php
    class Pessoa{
        // Atributos
        public $Nome;
        public $Peso;
        public $Altura;

        // Métodos
        public function MostrarDados(){
            echo "O nome é: " . $this->Nome . "<br>";
            echo "O peso é: " . $this->Peso . "<br>";
            echo "A altura é: " . $this->Altura . "<br>";
            echo "<hr>";

        }
        public function ApresentarDados(){
            echo "Olá me chamo " . $this->Nome .", meu peso é " . $this->Peso . " e tenho" .  $this->Altura . "m de altura." . "<hr>";
        }
    }
?>
