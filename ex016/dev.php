<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e objetos</title>
</head>
<body>
    <h2>Classes e objetivos</h2>
    <?php 
    class Carro {
        //Propriedades ou atributos
        public $marca;
        public $modelo;
        public $ano;

        // Métodos (função dentro da classe)
        public  function exibirDetalhes() {
           echo "Marca:" . $this->marca . "<br>";
            echo "Modelo:" . $this->modelo ."<br>";
            echo "Ano:" . $this->ano . "<br>";
        }
    }
        //instância
        $MeuCarro = new Carro();
        $MeuCarro->marca = "Toyota";
        $MeuCarro->modelo = "Corolla";
        $MeuCarro->ano = 2023;

        $MeuCarro->exibirdetalhes (); //exibir os detalhes do carro
        
     ?>
     <?php
        //Nova class
        class Pessoa{

            public $nome;
            public $idade;
            //Método
            public function saudacao() {
                echo "Olá, meu nome é " . $this->nome . " e tenho " .$this->idade . " anos. <br>";
            }
        }

        $joao = new Pessoa();
        $joao->nome = "João";
        $joao->idade = 30;

        $joao->saudacao (); //exibe a saudacao com os dados do joão
    ?>
</body>
</html>
