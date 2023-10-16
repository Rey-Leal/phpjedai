<html>

<head>
    <title>01 Classes</title>
</head>

<body>
    <header>
        <h2>01 Classes</h2>
    </header>

    <?php
    class Pessoa
    {
        private $_nome;
        private $_idade;
        private $_peso;

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

        public function mostrarDados()
        {
            echo ($this->_nome . '</br>');
            echo ($this->_idade . '</br>');
            echo ($this->_peso . '</br>');
        }
        public function fezAniversario()
        {
            $this->_idade++;
        }
    }

    $pessoa = new Pessoa('Rey', 38, 81);
    $pessoa->mostrarDados();
    $pessoa->fezAniversario();
    $pessoa->mostrarDados();
    ?>
</body>

</html>