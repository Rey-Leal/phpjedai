<html>

<head>
    <title>01 Class</title>
</head>

<body>
    <header>
        <h2>01 Class</h2>
    </header>

    <?php
    class Pessoa
    {
        private $_nome;
        private $_idade;
        private $_peso;

        public static $varEstatica = 'Variável Estática';

        function __construct($nome, $idade, $peso)
        {
            $this->_nome = $nome;
            $this->_idade = $idade;
            $this->_peso = $peso;
        }

        public function nome()
        {
            return $this->_nome;
        }
        public function idade()
        {
            return $this->_idade;
        }
        public function peso()
        {
            return $this->_peso;
        }

        // Imprime dados em tela
        public function mostrarDados()
        {
            echo ($this->_nome . '</br>');
            echo ($this->_idade . '</br>');
            echo ($this->_peso . '</br>');
        }
        // Aumenta a idade em um ano
        public function fezAniversario()
        {
            $this->_idade++;
        }
    }

    // Se instancia a classe para acessar seus metodos e atributos 
    $pessoa = new Pessoa('Rey', 38, 81);
    $pessoa->mostrarDados();
    $pessoa->fezAniversario();
    $pessoa->mostrarDados();

    // Metodos estaticos nao necessitam de instancia
    echo (Pessoa::$varEstatica . '</br>')
    ?>
</body>

</html>