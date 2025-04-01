<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios intermediários</title>
</head>
<body>
    <table>
        <tr>
            <th>nome</th>
            <th>cidade</th>
            <th>estado</th>
            <th>país</th>
        </tr>
        
        <?php
        
            for ($i = 1; $i <= 8; $i++) {
                if ($i % 2 == 0) {
                    echo "<tr style='background-color: red;'>";
                } else {
                    echo "<tr style='background-color: blue;'>";
                }
                echo "
                        <td>Coluna 1 da linha $i</td>
                        <td>Coluna 2 da linha $i</td>
                        <td>Coluna 3 da linha $i</td>
                        <td>Coluna 4 da linha $i</td>
                    </tr>
                ";
            }

        ?>
    </table>
</body>
</html>