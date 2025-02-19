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
    $produto1->exibirDetalhes();
    $produto2->exibirDetalhes();

    //Quando o script termina ou o objeto sai de escopo, o destruor é chamado
    unset($produto1); //Chama o destrutor explicitamente



    //mais uma classe construct e destruct

    class ConexaoBanco{
        private $conexao;

    //Construtor: simula abrir a conexão com o banco
        public function __construct(){
            $this->conexao = "Conexão ao banco de dados aberta!";
            echo $this->conexao . "<br>";
        }

    //Destrutor: simula fechar a conexão com o banco
        public function __destruct(){
            // Tempo de espera (em segundos)
            sleep(2); // Espera 2 segundos antes de exibir a mensagem

         echo "Conexão ao banco de dados fechada! <br>";   
        }
    }

    //Criando um objeto de conexão
    $conectado = new ConexaoBanco(); //Construtor é chamado aqui

    unset($conexao); //chama o destrutor explicitamente

    ?>
</body>
</html>
