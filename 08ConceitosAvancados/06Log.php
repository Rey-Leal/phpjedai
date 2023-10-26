<html>

<head>
    <title>06 Log</title>
</head>

<body>
    <header>
        <h2>06 Log</h2>
    </header>

    <?php
    try {
        $erro = "Não foi possível acessar os dados do usuário!";

        date_default_timezone_set('America/Sao_Paulo');
        error_log(date('d/m/Y H:i:s ') . $erro . "\n", 3, 'log.log');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>