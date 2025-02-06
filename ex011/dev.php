<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array e Matriz</title>
</head>
<body>
    <?php 
    //criando uma array associativo
    $associativo = [
        "nome" => "João",
        "idade" => 30,
        "cidade" => "São Paulo"
    ];

    //exibindo array associativo
    echo "Array Associativo. ";
    echo "<pre>";
    print_r($associativo);
    
    echo "<br>";
    print_r($associativo["cidade"]); //acessando João

    //Acessando o primeiro valor
    echo "<br>";
    $terceirovalor = reset($associativo);
    echo $terceirovalor; //Saida joão


    echo "<br>";

    //Criando um aarray multidirecional
    $multidirecional = [
       [1, 2, 3],
       [4, 5, 6],
       [7, 8, 9]
    ];
    
    //exibundo o valor na posição [1] [2] (4, 5, 6) -> 6
    echo "valor na posição [1] [2]: " . $multidirecional[1][2];

    echo "<br>";
    $array1 = [1, 2, 3];
    $array2 = [4, 5, 6];

    //Mesclando os dois arrays
    $novo_array = array_merge($array1, $array2);

    // exibindo o array mesclado
    echo "Array mesclado: ";
    print_r($novo_array);

    echo "<br>";

    $array = [10, 20, 30, 40 ];

    //procurando o valor 30 no array
    $indice = array_search(40, $array);

    //exibindo o índice onde o valor foi encontrado
    echo "O índice do valor 30 é: " . $indice;
    echo "<br>";

    //Verifiando se o valor 25 está no array
    $existe = in_array(11, $array);

    if($existe){
        echo "O valor está no array.";
    } else {
        echo "O valor não está no array.";
    }

    // Matriz 3x2
    $matriz = [
        [1, 2], //primeira linha = 0
        [4, 5], //segunda linha = 1
        [7, 8] //terceira linha = 2
    ];

   //Acessando elementos da matriz
   echo "<br>";

   echo "Elementos na posição  [0][1]: " . $matriz[1][1] . "<br>"; //Saída: 2
   echo  "Elementos na posição  [2][0]: " . $matriz[2][1] . "<br>"; //Saída: 7
   



    
    ?>
</body>
</html>