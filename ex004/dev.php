<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméricos</title>
</head>
<body>

    <h1>Operadores aritméricos</h1>

    <?php
    $soma = 156154 * 1954961564;
    $subtração = 4765 - 57698;
    $divisão = 54 / 465;
    $resto = 54 % 465; 
    $potenciação = 2**78;

    echo "Resultado da soma é $soma <br>";
    echo "Resultado da subtração é $subtração <br>";
    echo "Resultado da divisão é $divisão <br>";
    echo "Resultado do resto é $resto <br>";
    echo "Resultado da potenciação é $potenciação <br>";

    /*ordem de grandeza 
    Primeiro = ( )
    fora do parentese se calcula na ordem abaixo
    segundo = potenciação
    terceiro = multiplicação
    quarto = divisão
    quinto = soma 
    sexto = subtração
    */

    //Primeira expressão: (3 + 2) * 4
    $valor1 = (3 + 2) * 4;

    $a = 3; 
    $b = 2;
    $c = 4;
    $calculo = ($a + $b) * $c;

    // Segunda expressão: (2 * (2 + (2 - 1))) + 8
    $valor2 = (2 * (2 + (2 - 1))) + 8 * 2;
    
    // exibindo os resultados - concatenação
    echo "Resultado da primeira expressão: " . $valor1 . "<br>";
    echo "Resultado da segunda expressão:  " . $valor2 . "<br>";
    echo "Resultado da terceira expressão: " . $calculo . "<br>";
    // "\n" serve para pular uma linha na pagina web  
    ?>
</body>
</html>