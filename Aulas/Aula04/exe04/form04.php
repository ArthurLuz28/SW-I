<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 Aula 4 - Post</title>
</head>
<body>
    <form action="exe04.php" method="POST">
        <p>Nome: <input type="Text" name="nome" required> </p>
        <p>Email: <input type="Email" name="email" required> </p>
        <p>Data de Nascimento: <input type="Date" name="data" required> </p>
        <p>Escolha um cartão de crédito: </p>
        <select name="cartoes">
        <option value="nubank">Nubank</option>
        <option value="magalu">Itaú Magalu</option>
        <option value="pago">Mercado Pago</option>
        <option value="carrefour">Carrefour</option>
        </select>
        <input type="submit" value="Submit">
</body>
</html>
