<html>

<head>
    <title>01 Static Keyword</title>    
</head>

<body>
    <header>
        <h2>01 Static Keyword</h2>
        <p>Uma variavel de funcao Static e referenciada apenas na primeira execucao </p>
    </header>

    <?php
    function contarAcessos()
    {
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