<html>

<head>
    <title>04 Datas Nativa</title>
</head>

<body>
    <header>
        <h2>04 Datas Nativa</h2>
        <p>Sempre usar date_default_timezone_set('America/Sao_Paulo') para ajustar o fuso horário</p>
    </header>

    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y H:i:s');
    echo ($data . '<br>')
    ?>
</body>

</html>