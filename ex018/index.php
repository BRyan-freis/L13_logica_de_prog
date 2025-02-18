<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificadores de Acesso</title>
</head>
<body>
    <h2>Modificadores de Acesso</h2>
    <?php 
    class Funcionário{
        //Propriedades com diferentes modificadores de acesso
        public $nome ;//pode ser acessado de qualquer lugar
        protected $salario;//Pode ser acessado apenas dentro da superclasse e subclasse
        private $cpf;// Pode ser acessado apenas dentro da classe

        //Contrutor de inicalização dos valores ou atributos das classes; 
        public function __construct($nome, $salario, $cpf) {
            $this->nome = $nome;
            $this->salario = $salario;
            $this->cpf = $cpf;

        }

        //Método publico de exibição do nome do fucnionário.
        public function exibirNome(){
            echo "Nome: " . $this-> nome . "<br>";
        }
        //Método protegido para exibir o salario (somente para subclasses ou na propria classe)
        protected function exibirSalario(){
            echo "Salario:  R$" . $this-> salario ."<br>";
        }
        //Método privado para exibri o cpf (somente dentro da classe)
        private function exibirCPF(){
            echo "CPF: ". $this->cpf ."<br>";
        }

        //Método público para chamar todos os outros métodos (protected e private) na própria classe
        public function exibirDetalhes(){
            $this->exibirNome();
            $this->exibirSalario();
            $this->exibirCPF();

        } 
    }

    //Instanciar = atribuir dados ou inserir os elementos e informações da pessoa ou objeto. 

    //Criando uma instância da classe funcionario
    $funcionario1 = new Funcionário("Carlos Silva", 7000, "123.456.789-00");

    //Dentro da classe atributos e métodos, e fora da classe são instâncias e comando para chamar/exibir o método. 

    // Acessando o nome diretamente público
    $funcionario1-> exibirNome();

    //Acessando o sálario diretamente (protegido)
    //$funcionario1-> exibirSalario(); //comentado porque gera erro

    //Acessando o CPF diretamente (privado)
    // $funcionario-> exibircpf(); //comentado porque gera erro

    //Chamando o método público que acesso todos os dados
    $funcionario1-> exibirDetalhes();
    ?>
</body>
</html>