<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dados = [
            [
                "nome" => "Arthur",
                "idade" => 16,
                "tel" => "21321431241",
                "cidade" => "Ribeirão Pires"
            ],
            [
                "nome" => "Maria",
                "idade" => 34,
                "tel" => "9787831245467",
                "cidade" => "Mauá"
            ],
        ];
        


        //echo $dados[0]["nome"];
        //($dados[1]);
        //for ($i=0; $i <=3 ; $i++){
        //    echo $dados[$i]."<br>";
        //}

        foreach ($dados as $chave => $valor){
            //echo "Chave externa: ".$chave."<br>";
            foreach ($dados[$chave] as $key => $valor) {
                echo "$key: ".$valor."<br>";
            }
            echo "<hr>";
        }
    ?>
</body>
</html>