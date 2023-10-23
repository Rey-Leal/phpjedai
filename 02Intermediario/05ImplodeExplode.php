<html>

<head>
    <title>05 Implode Explode</title>
</head>

<body>
    <header>
        <h2>05 Implode Explode</h2>
    </header>

    <?php
    // explode transforma texto em array informando o delimitador
    $todosNomes = 'Rey Ana Lara Raul João José Maria Elias Malaquias';
    echo ($todosNomes . '<br>');
    $nomes = explode(' ', $todosNomes);
    print_r($nomes); //print_r permite imprimir arrays completos em tela
    echo ('<br>');

    // implode transforma array em texto informando o delimitador
    $texto = implode('-', $nomes);
    echo ($texto . '<br>');
    ?>
</body>

</html>