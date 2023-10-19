<html>

<head>
    <title>04 Constantes Orientação a Objetos</title>
</head>

<body>
    <header>
        <h2>04 Constantes Orientação a Objetos</h2>
    </header>

    <?php
    class minhaClasse
    {
        const valor = 3699;

        function __construct()
        {
            self::valor;
        }
    }

    echo (minhaClasse::valor . '</br>');
    ?>
</body>

</html>