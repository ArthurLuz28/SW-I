<?php
    require 'conexao.php';

    $sql = "SELECT * FROM livros";
    $stmt = $pdo->query($sql);

    while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
        //PDO::FETCH_ASSOC --> faz com que seja retornado um array associativo
        //que será relacionado a variável $produto. Os índices deste array
        //associativo serão os nomes dos campos da tabela do banco de dados

        //Ver diferenças no uso de:
        //  fetch(PDO::FETCH_ASSOC)
        //  fetchAll(PDO::FETCH_ASSOC)


        echo "<pre>";
        // print_r($livros[0]);        
        echo "ID: " . $livros['id'] . "<br>";
        echo "Título: " . $livros['titulo'] . "<br>";
        echo "Gênero: " . $livros['genero'] . "<br>";
        echo "Ano: " . $livros['ano'] . "<br>";
        echo "Autor: " . $livros['autor'] . "<br>";
        echo "Páginas: " . $livros['paginas'] . "<br>";
    }
?>