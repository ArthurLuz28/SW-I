<?php
    require 'conexao.php';
    $titulo = "O Hobbit";
    $genero = "Fantasia";
    $ano = "1937";
    $autor = "J.R.R. Tolkien";
    $paginas = 310;
    $sql = "INSERT INTO livros (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Livro inserido com sucesso!";
    } else {
        echo "Erro ao inserir livro.";
    }
?>