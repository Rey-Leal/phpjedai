<html>

<head>
    <title>01 Carbon Datas</title>
</head>

<body>
    <header>
        <h2>01 Carbon Datas</h2>
        <?php
        // Referenciar composer autoload
        include_once('vendor/autoload.php');

        // Instalar biblioteca
        // composer require nesbot/carbon 

        // Instanciar biblioteca
        use Carbon\Carbon;
        ?>
    </header>

    <?php

    try {
        echo ("Agora: " . Carbon::now() . '<br>');
        echo ("Amanhã: " . Carbon::now()->addDay() . '<br>');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>