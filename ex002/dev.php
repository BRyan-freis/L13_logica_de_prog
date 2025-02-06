<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introdução a Variáveis</title>
</head>
<body>
    <h2> 
    <?php 
    //variavel do tipo string 
    $sobrenome = "Bryan Ferreira,";

    //varivel dp tipo int
    $idade = "16 ano de idade,"; 

    //variavel do tipo float
    $peso = "72 kilos e ";

    //variavel do tipo boolean (verdadeiro ou falso)
    $casado = false; 

    echo "$sobrenome $idade $peso ";

    //Metódo 1: usando var_dump para exibir o valor booleano
    //var_dump($casado); // exibe 'bool(false)'

    //Metódo 2: Usando uma conversão booleana para string 
    echo ($casado ? "casado" : "Não é casado"); //Exibe 'Não e casada'

    ?>
    </h2>

</body>
</html>