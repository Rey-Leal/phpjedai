<html>

<head>
    <title>02 Correios</title>
</head>

<body>
    <header>
        <h2>02 Correios</h2>
        <?php
        // Referenciar composer autoload
        include_once('vendor/autoload.php');

        // Instalar biblioteca (esta funciona apenas ate o PHP 7.0.33)
        // composer require cagartner/correios-consulta": "0.3.*

        // Instanciar biblioteca
        use FlyingLuscas\Correios\Client;
        ?>
    </header>

    <?php
    try {
        // $correios = new Client;
        // $correios->zipcode()
        //     ->find('37971-124');

        // echo ('<pre>');
        // print_r($correios);
        // echo ('<pre>');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>