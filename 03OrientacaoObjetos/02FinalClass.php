<html>

<head>
    <title>02 Final Class</title>
</head>

<body>
    <header>
        <h2>02 Final Class</h2>
    </header>

    <?php

    // Pode ser herdada em outras classes
    class Pai
    {
        public function gerarRenda()
        {
            echo ('Pai.gerarRenda' . '</br>');
        }
    }

    // Nao pode ser herdada em outras classes
    final class Filha extends Pai
    {
        public function cuidar()
        {
            echo ('Filha.cuidar' . '</br>');
        }
    }

    // ERRO! - Pois herdou uma classe 'final'
    class Neta extends Filha
    {
        public function fazerBagunca()
        {
            echo ('Neta.fazerBagunca' . '</br>');
        }
    }

    $filha = new Filha();
    $filha->cuidar();
    ?>
</body>

</html>