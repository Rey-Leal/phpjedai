<html>

<head>
    <title>02 Array Multimensional</title>
</head>

<body>
    <header>
        <h2>02 Array Multimensional</h2>
    </header>

    <?php
    $usuarios = array(array('Rey', 'Ana'), array(38, 39));

    echo ($usuarios[0][0] . '</br>');
    echo ($usuarios[1][0] . '</br>');
    echo ('</br>');

    $pessoas = array(array('nome' => 'Rey', 'idade' => 38), array('nome' => 'Ana', 'idade' => 39));
    echo ($pessoas[1]['nome'] . '</br>');
    echo ($pessoas[1]['idade'] . '</br>');
    echo ('</br>');
    ?>
</body>

</html>