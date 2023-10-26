<html>

<head>
    <title>05 Variáveis Externas</title>
</head>

<body>
    <header>
        <h2>05 Variáveis Externas</h2>
        <p>Variaveis externas permitem acessar as mesmas em funcoes</p>
    </header>

    <?php
    try {
        $nome = "Cobausqui";
        $sexo = 'M';

        $imprimir = function () use ($nome, $sexo) {
            echo ($nome . ' ' . $sexo . '<br>');
        };

        $imprimir();
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>