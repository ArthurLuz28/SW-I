<?php

    class Produto {
        private $Nome;
        private $Preco;
        private $Quantidade;

        public function __construct($nomeproduto, $precoproduto, $qtdproduto = 0) {
            $this->Nome = $nomeproduto;
            $this->Preco = $precoproduto;
            $this->Quantidade = $qtdproduto;
        }
        
        public function getNome() {
            return $this->Nome;
        }

        public function getPreco() {
            return $this->Preco;
        }

        public function setNome() {
            $this->Nome;
        }

        public function setPreco() {
            $this->Preco;
        }

        public function adicionarEstoque($qtd) {
            if ($qtd >= 0) {
                $this->Quantidade += $qtd;
            } else {
                echo "Não é possível adicionar um valor negativo.";
            }
        }

        public function removerEstoque($qtd) {
            if ($qtd >= 0 && $qtd <= $this->Quantidade) {
                $this->Quantidade -= $qtd;
            } else {
                echo "Não é possível remover um valor negativo.";
            }
        }

        public function mostrarDetalhes() {
            echo "Nome: {$this->Nome}" . "<br>";
            echo "Preço: {$this->Preco}" . "<br>";
            echo "Quantidade: {$this->Quantidade}";
        }
    }
?>