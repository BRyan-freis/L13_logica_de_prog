<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <h2>Herança</h2>

    <?php 
    // Classe base (superclasse)
    class Animal{
        // Propriedade ou atributo
        public $nome;

        // Método
        public function __construct($nome){ 
            $this-> nome = $nome;
        }

        public function falar() {
            return "O animal faz um som.";
        }
    }

    //Subclasse que herda de Animal
    class Cachorro extends Animal{

        // Sobrescrevendo o método falar
        public function falar() {
            return "O cachorro late. ";
        }
    }

        // Criando um objeto de classe cachorro
        $cachorro = new Cachorro("Rex");
        echo $cachorro->nome; 
        echo "<br>";

        // Chamando o método sobrescrito da subclasse
        echo $cachorro->falar();

        echo "<br>";
        // Monstrando método falar da superclasse
        $cachorro = new Cachorro("Dudu");
        echo $cachorro->falar();

    ?>
</body>
</html>