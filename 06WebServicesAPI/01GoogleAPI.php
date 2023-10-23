<html>

<head>
    <title>01 Google API</title>
</head>

<body>
    <header>
        <h2>01 Google API</h2>
    </header>

    <?php
    try {
        // Google Geocode API - Converte endereco em latitude e longitude (servico pago)
        $str = file_get_contents('https://maps.google.com/maps/api/geocode/json?address=rua%20desembargador%20ferreira%20bastso&sensor=false&key=0');
        $endereco = json_decode($str);
        echo ('<pre>');
        print_r($endereco);
        echo ('</pre>');
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>