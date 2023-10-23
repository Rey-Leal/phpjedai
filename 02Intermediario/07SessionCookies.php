<html>

<head>
    <title>07 Session e Cookies</title>
</head>

<body>
    <header>
        <h2>07 Session e Cookies</h2>
    </header>

    <?php
    // Sessions - duram ate que se feche o navegador
    session_start();
    $_SESSION['usuario'] = 'Rey';
    if (isset($_SESSION['usuario'])) {
        echo ($_SESSION['usuario'] . '<br>');
    }
    session_destroy();

    // Cookies - duram por tempo determinado de expiracao em segundos
    //      o parametro '/' define que o cookie é acessivel em todas as paginas
    //      time() + 60 = 60 seg
    //      time() + (60 * 60) = 1 hs
    //      time() + (60 * 60 * 24) = 24 hs/1 dia
    setcookie('valor', 379, time() + (60 * 60), '/');
    if (isset($_COOKIE['valor'])) {
        echo ($_COOKIE['valor'] . '<br>');
    }

    // Para forcar a exclusao de um cookie informa-se um tempo negativo
    setcookie('valor', 379, time() - (60 * 60), '/');
    ?>
</body>

</html>