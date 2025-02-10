<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>processamento de pedidos de compras</title>
</head>
<body>
    <?php
    $numPedido = 10;

    $cont = 1;

    do{

        echo "processando pedido" . $cont;
        echo "<br>";
    
        $cont++;

    } while ($cont <= $numPedido);
    echo "<br>";
    echo "todos os pedidos foram processados";
    
    
    ?>
</body>
</html>