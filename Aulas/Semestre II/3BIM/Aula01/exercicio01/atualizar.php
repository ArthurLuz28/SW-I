<?php
    require 'conexao.php';

    $id = 2;
    $NovoAutor = "John Ronald Reuel Tolkien";

    $sql = "UPDATE livros SET autor = :autor WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':autor', $NovoAutor);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>