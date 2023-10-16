<html>

<head>
    <title>04 Datas e Include</title>
</head>

<body>
    <header>
        <h2>04 Datas e Include</h2>
    </header>

    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y H:i:s');
    echo ($data . '</br>')
    ?>
</body>

</html>