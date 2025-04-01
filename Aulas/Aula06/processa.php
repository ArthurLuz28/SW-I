<?php
    $linhas = $_POST['linha'];
    $colunas = $_POST['coluna'];
    
        echo "<h2>Tabela Gerada</h2>";
        echo "<table border='1'>";


        $i = 1;
        while ($i <= $linhas) {
            echo "<tr>";
            $j = 1;

            while ($j <= $colunas) {
                echo "<td>Conteúdo $i,$j</td>";
                $j++;
            }

            echo "</tr>";
            $i++;
        }

        echo "</table>";

?>