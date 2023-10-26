<html>

<head>
    <title>04 Expressões Regulares</title>
</head>

<body>
    <header>
        <h2>04 Expressões Regulares</h2>
        <p>
            Expressoes Regulares permitem localizar parte de textos definidas,<br>
            atraves do texto ou tipo, ou intervalo de letras e numeros
        </p>
    </header>

    <?php
    try {
        $nome = 'Rey Leal';

        // Busca incidencias da palavra 'Le'
        if (preg_match("/(.*?)Le(.*)/", $nome)) {
            echo ('Encontrou incidência!' . '<br>');
        } else {
            echo ('Não encontrou incidência!' . '<br>');
        }

        // Separa em array pela incidencias da palavra 'Le'
        preg_match("/(.*?)Le(.*)/", $nome, $retorno);
        echo ('<pre>');
        print_r($retorno);
        echo ('</pre>');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>