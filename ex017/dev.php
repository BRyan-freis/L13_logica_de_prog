<!DOCTYPE html>
<html lang="pt-br
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor e Destrutor</title>
</head>
<body>
    <?php 
    class Produto{
        public $preço; 
        public $nome;

        //Construtor: Chamado quando o objeto é criado
        public function __construct($nome,$preço){
            $this->preço = $preço;
            $this->nome = $nome;
            echo "Produto $this->nome criado com sucesso! <br>";
        }
    }

    //Criando um objeto
    $produto1 = new Produto("Camiseta", 39.90);
    // Constructor chamado aqui
    $produto2 = new Produto("Tênis", 300.00);
    ?>
</body>
</html>