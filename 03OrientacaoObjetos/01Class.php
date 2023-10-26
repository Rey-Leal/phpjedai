<html>

<head>
    <title>01 Class</title>
</head>

<body>
    <header>
        <h2>01 Class</h2>
        <p>
            Visibilidade de Classes, Métodos e Atributos<br>
            public = pode ser acessado e alterado do lado de fora por qualquer pessoa<br>
            private = so pode ser acessado de dentro da classe<br>
            protected = existe somente dentro de seu escopo {...}<br>
            static = acessiveis sem a necessidade de instanciar a classe<br>
            final = nao pode ser herdada em outras classe<br>
            abstract = serve apenas para ser herdada, nao pode ser instanciada<br>
        </p>
    </header>

    <?php
    class Pessoa
    {
        private $_nome;
        private $_idade;
        private $_peso;

        public static $varEstatica = 'Variável Estática';

        // Primeiro metodo chamado automaticamente ao instanciar a Classe
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
            echo ($this->_nome . '<br>');
            echo ($this->_idade . '<br>');
            echo ($this->_peso . '<br>');
        }
        // Aumenta a idade em um ano
        public function fezAniversario()
        {
            $this->_idade++;
        }
    }

    // Se instancia a classe para acessar seus metodos e atributos 
    $pessoaA = new Pessoa('Rey', 38, 81);
    $pessoaA->fezAniversario();
    $pessoaA->mostrarDados();
    $pessoaB = new Pessoa('Ana', 39, 73);
    $pessoaB->mostrarDados();

    // Metodos estaticos nao necessitam de instancia
    echo (Pessoa::$varEstatica . '<br>')
    ?>
</body>

</html>