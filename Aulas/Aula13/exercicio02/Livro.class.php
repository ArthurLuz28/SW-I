<?php

class Livro {
    private $Titulo;
    private $Autor;
    private $Disponivel;

    public function __construct($titulolivro, $autorlivro, $livrodisponivel = TRUE) {
        $this->Titulo = $titulolivro;
        $this->Autor = $autorlivro;
        $this->Disponivel = $livrodisponivel;
    }

    public function Emprestar() {
        $this->Disponivel = FALSE;
    }

    public function Devolver() {
        $this->Disponivel = TRUE;
    }

    public function exibirStatus() {
        echo "Título: {$this->Titulo}" . "<br>";
        echo "Autor: {$this->Autor}" . "<br>";
        if ($this->Disponivel == TRUE) {
            echo "Disponibilidade: Livro Disponível";
        } else {
            echo "Disponibilidade: Livro Indisponível";
        }
    }
}

?>