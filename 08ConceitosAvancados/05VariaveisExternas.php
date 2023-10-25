<!-- 
Variaveis externas permitem acessar as mesmas em funcoes
-->
<html>

<head>
    <title>05 Variáveis Externas</title>
</head>

<body>
    <header>
        <h2>05 Variáveis Externas</h2>
    </header>

    <?php
    try {
        $nome = "Cobausqui";
        $sexo = 'M';

        $imprimir = function () use ($nome, $sexo) {
            echo ($nome . ' ' . $sexo . '<br>');
        };

        $imprimir();
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>