<html>

<head>
    <title>01 Static Keyword</title>
</head>

<body>
    <header>
        <h2>01 Static Keyword</h2>
    </header>

    <?php
    function contarAcessos()
    {
        // Uma variavel de funcao Static e referenciada apenas na primeira execucao
        static $acessos = 0;
        $acessos++;
        return $acessos;
    }

    try {
        echo (contarAcessos() . '<br>');
        echo (contarAcessos() . '<br>');
        echo (contarAcessos() . '<br>');
        echo (contarAcessos() . '<br>');
        echo (contarAcessos() . '<br>');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>