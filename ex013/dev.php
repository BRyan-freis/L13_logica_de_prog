<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laço For e Foreach</title>
</head>
<body>
    <?php 
    echo "<br>For<br>";
    //For 
    for ($i = 1; $i <= 5; $i++){
        echo $i. "<br>"; //imrime o valor de $i e pula para a próxima linha
    }
    echo "<br>";

    for ($a = 1; $a <= 5; $a++){
        echo "O quadrado de $a é " . ($a * $a) . "<br>";
    }

    echo "<br>Foreach<br>";
    //Foreach
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];

    foreach ($frutas as $fruta) {
        echo $fruta ."<br>"; //imprime o nome de cada fruta
    }

    echo "<br>";
    $idades = [ //Array associativo ou lista associativa
        "João" => 25,
        "Maria" => 30,
        "Pedro" => 22,
        
    ];

    foreach ($idades as $nome => $idade) {
        echo "$nome tem $idade anos. <br>"; //exibe o nome e idade

       /*Loop, ele acessa a array associativa e 
       reditribui os valores da variável 
       Idades que é também uma array associativa 
       para as duas outras variáveis $nome e $idade. */
       
       

    }
        

    ?>
</body>
</html>