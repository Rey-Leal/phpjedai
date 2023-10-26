<html>

<head>
    <title>03 Die Sleep</title>
</head>

<body>
    <header>
        <h2>03 Die Sleep</h2>
        <p>Força a aplicação a 'dormir' pelo intervalo estipulado</p>
    </header>

    <?php
    $nome = 'Rey';
    if ($nome == 'Ana') {
        //sleep forca a aguardar os segundos estipulados
        echo ('Iniciando App...' . '<br>');
        sleep(1);
        echo ('OK' . '<br>');
    } else {
        //die forca o encerramento do processamento
        die('Finalizou execução!');
    }
    ?>
</body>

</html>