<html>

<head>
    <title>01 Variáveis Padrões do PHP</title>
</head>

<body>
    <header>
        <h2>01 Variáveis Padrões do PHP</h2>
    </header>

    <?php
    $array = array('A', 'B', 'C', 'D', 'E');
    echo ('Exibir Array organizado' . '</br>');
    echo ('<pre>');
    print_r($array);
    echo ('</pre>');

    echo ('Variáveis do Server' . '</br>');
    echo ($_SERVER['SERVER_NAME'] . '</br>');
    echo ($_SERVER['SERVER_PORT'] . '</br>');
    echo ($_SERVER['SERVER_SOFTWARE'] . '</br>');
    echo ($_SERVER['DOCUMENT_ROOT'] . '</br>');

    echo ('Todas variáveis do Server' . '</br>');
    echo ('<pre>');
    print_r($_SERVER);
    echo ('</pre>');
    ?>
</body>

</html>