<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução ao PHP</title>
</head>
<body>
    <h2>
    <?php echo "My first script in PHP"; 

    echo "<br> <br>" ?>; 
    
    
    <?php
    //declarando uma variável
    $nome = "Bryan";
    $sobrenome = " Dos Reis";

    // a variavél poode ser mudada
    $nome = "Bryan Fereira";
    echo "welcome to the mato, $nome $sobrenome";

    //quebra de linha antes do proximo echo
    echo "<br> <br>";

    //Declarando uma constante
    const time = "São paulo";
    const timenovo = "Barcelona";

    echo "Seja bem vindo, $nome $sobrenome <br> <br> seu time de futebol seria " . time . " ou " . timenovo . "?";

    echo "<br> <br>";
    print" Olá meu nobre";

     

    ?>
    </h2>
</body>
</html>