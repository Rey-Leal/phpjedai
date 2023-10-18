<html>

<head>
    <title>03 Abstract Class</title>
</head>

<body>
    <header>
        <h2>03 Abstract Class</h2>
        <!--
            Visibilidade de Classes, Métodos e Atributos 
            public   	pode ser acessado e alterado do lado de fora por qualquer pessoa
            private    	so pode ser acessado de dentro da classe
            protected 	existe somente dentro de seu escopo {...}
            static      acessiveis sem a necessidade de instanciar a classe
            final       nao pode ser herdada em outras classe
            abstract    serve apenas para ser herdada, nao pode ser instanciada
         -->
    </header>

    <?php
    // Nao pode ser instanciada
    abstract class Pai
    {
        public function gerarRenda()
        {
            echo ('Pai.gerarRenda' . '</br>');
        }
    }

    class Filha extends Pai
    {
        public function cuidar()
        {
            echo ('Filha.cuidar' . '</br>');
        }
    }

    $filha = new Filha();
    $filha->cuidar();
    $filha->gerarRenda();

    // ERRO! - Pois instanciou uma classe 'abstract'
    $pai = new Pai();
    $pai->gerarRenda();
    ?>
</body>

</html>