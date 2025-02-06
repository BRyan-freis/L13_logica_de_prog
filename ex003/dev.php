<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorando variável dentro de variável</title>
</head>
<body>
    <h2> Variável dentro de Variável </h2>
    <?php
    //para comentários de uma linha eu uso barra e barra 

    /*
    eu uso para 
    para comentar
    várias linhas
    ao mesmo tempo
    */
   
    $nome = "Bryan";
    $sobrenome = "Ferreira";

    //A váriavel a baixo recebe uma interpolação
    $frase = "Seu nome é $nome, seu sobrenome é $sobrenome";
    
    echo "$frase";

    //Concatenação - echo "Seu nome é, nome; 
    /* 
    Interpolação - echo "Seu nome é $nome textos grandes sobrenome $sobrenome sua $idade seu signo, você mora em $bairro";
    */

    ?>
</body>
</html>