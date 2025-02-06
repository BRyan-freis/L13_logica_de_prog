<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While e Do While</title>
    <h2>While e Do While</h2>
</head>
<body>
    <?php 
    // While - Enquanto (loop), Do - Faça ou fazer, Do white - faça enquanto ou faça enquanto estiver dando condição.,

    //While 
    $i = 1;
    while ($i <= 5) {
        echo $i . "<br>"; //imprime o valor do $i
        $i++; //i+1
    }

    echo "<br>";

    //Mostrar somente números pares
    $f = 2;

    while ($f <= 10) {
        echo $f . "<br>"; 
        $f += 2; //Atribui de 2 em 2
    }
    echo "<br>";

    //Do while 
    $g = 1;
    do {
        echo $g . "<br>";
        $g ++;
    } while ($g <= 8);

    

    ?>
</body>
</html>