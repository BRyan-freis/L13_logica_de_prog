<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores lógicos</title>
</head>
<body>
   <h2>
    <?php 
    //Condição true ou false 
    $idade = 20; 
    $tem_cnh = True; 

    echo ($idade <= 18 & $tem_cnh) ? "Você pode dirigir. " : "Você não pode dirigir. ";  

    echo "<br>"; 

    $tem_ingresso = false; 
    $tem_cortesia = true; 

    echo ($tem_ingresso || $tem_cortesia) ? "Você pode entrar na festa. " : "Você não pode 
    entrar na festa. ";

    print "<br>"; 

    //Ultilizando os Simbolos & e || 

    $sol = true; 
    $sem_chuva = false; 
    $feriado = true; 


        echo ($sol && $sem_chuva || $feriado) ? "Você pode passear. " : "Melhor não ir passear. ";
    ?>
   </h2> 
</body>
</html>