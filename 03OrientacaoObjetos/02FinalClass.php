<html>

<head>
    <title>02 Final Class</title>
</head>

<body>
    <header>
        <h2>02 Final Class</h2>
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

    // Pode ser herdada em outras classes
    class Pai
    {
        public function gerarRenda()
        {
            echo ('Pai.gerarRenda' . '<br>');
        }
    }

    // Nao pode ser herdada em outras classes
    final class Filha extends Pai
    {
        public function cuidar()
        {
            echo ('Filha.cuidar' . '<br>');
        }
    }

    // ERRO! - Pois herdou uma classe 'final'
    class Neta extends Filha
    {
        public function fazerBagunca()
        {
            echo ('Neta.fazerBagunca' . '<br>');
        }
    }

    $filha = new Filha();
    $filha->cuidar();
    ?>
</body>

</html>