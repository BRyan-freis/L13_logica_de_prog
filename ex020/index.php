<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo</title>
</head>
<body>
    <h2>Polimorfismo</h2>
    <?php 
    // Superclasse
    class Animal{
        public function fazerSom(){
            return "O animal faz um som. ";
        }
    }
    //Subclasse
    class Cachorro extends Animal{
        public function fazerSom(){
            return "Au au au";
        }
    }

    //Outra subclasse
    class Gato extends Animal{
        public function fazerSom(){
            return "Miaaaaaaaaau";
        }
    }

    // Função que ultiliza poliformismo
    function emitirSomAnimal(Animal $animal){
        echo $animal-> fazerSom() . "<br>";
    }


    // Criar objetos - instâncias. 
    $cachorro1 = new Cachorro (null);
    $gato1 = new Gato (null);
    $gato3 = new Animal(null);

    // Chamando a função com diferentes objetos, mas com a mesma asssinatura
    emitirSomAnimal($cachorro1); 
    echo "<br>"; 
    emitirSomAnimal($gato1);
    echo "<br>"; 
    emitirSomAnimal($gato3);

    // Null = significa que não existe parametro para ser passado
    

    ?>
</body>
</html>