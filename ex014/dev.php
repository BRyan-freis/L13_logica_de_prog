<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    
    <?php 
    
    //evita repetição e torna o codigo mais elegível, elemento funcional com ações por trás.
    function saudacao() {
        echo "Olá, seja bem vindo ao PHP!";
    }

    saudacao(); // Chamando a função
    saudacao();
    echo "<br>";
    function somar ($a, $b){
        return $a + $b;
    }
    $resultado = somar(a: 5,b: 3); // Chamando a função e passando os argumentos
    echo "Resultado da soma:" . $resultado; //Saída
    echo"<br>";
    $resultado1 = somar (a: 8,b: -2);
    echo "Resultado da soma: ". $resultado1;
    echo "<br>";

    function saudacaoPersonalizada ($nome = "visitante"){
        echo "Olá $nome! Bem-Vindo ao PHP! ";
    }
    echo "<br>";
    saudacaoPersonalizada(); //Chamada sem argumento, usa o valor padrão
    echo "<br>";
    saudacaoPersonalizada(nome: "Carlos"); // Chamada com argumento
    ?>

</body>
</html>