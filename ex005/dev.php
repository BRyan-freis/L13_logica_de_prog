<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <h2>
        <?php 
        //string 
        $rua = "Rua Amador Bueno";

        // Atribuição com concateção
        $rua .= " na cidade de são paulo";
        
        //float
        $preco = 2.45;
        // Atribuição por soma
        $preco += 2.30;
        //Atribuição por subtração
        $preco -= 1.30;

        // Formata o número par usar vírgula como separador decimal
        $preco_formatado = number_format($preco, 2, '.', ',');

        //Exibe o resultado por interpolação
        echo "$rua, <br> Preço R$ $preco_formatado"; 
        ?>
    </h2>
</body>
</html>