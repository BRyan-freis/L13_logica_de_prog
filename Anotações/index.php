<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    // Para converter uma string atribuida a uma variável.
    $horario = "52"; 

    // converte o horário para o formato de hora (apenas a parte da hora)
    $horario = (int)date ('H', strtotime ( $variavel ));
    ?>
</body>
</html>