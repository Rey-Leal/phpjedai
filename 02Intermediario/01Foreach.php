<html>

<head>
    <title>01 For e Foreach</title>
</head>

<body>
    <header>
        <h2>01 For e Foreach</h2>
    </header>

    <?php
    $nomes = array('Rey', 'Ana', 'Lara', 'Raul');

    //Foreach
    foreach ($nomes as $key => $value) {
        echo ($key . ' = ' . $nomes[$key] . '<br>');
    }

    echo ('<br>');

    //For
    $total = count($nomes);
    for ($i = 0; $i < $total; $i++) {
        echo ($i . ' = ' . $nomes[$i] . '<br>');
    }
    ?>

    <script>
    </script>
</body>

</html>