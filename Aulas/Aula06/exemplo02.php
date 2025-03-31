<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>nome</th>
            <th>telefone</th>
        </tr>
    
    <?php
        for ($i=1; $i <=3 ; $i++) {
            echo "
                <tr>
                    <td>Coluna 1 da linha $i</td>
                    <td>Coluna 2 da linha $i</td>
                    <td>Coluna 3 da linha $i</td>
                </tr>
            ";
        }

    ?>
    </table>

</body>
</html>