<html>

<head>
    <title>02 Web Services</title>
</head>

<body>
    <header>
        <h2>02 Web Services</h2>
    </header>

    <?php
    try {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, "http://localhost:8080/phpjedai/06WebServicesAPI/request.php");
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('var1' => 'val1')));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $api = json_decode(curl_exec($curl));
        curl_close($curl);

        if (!curl_errno($curl)) {
            $nome = $api->nome;
            $sobrenome = $api->sobrenome;
            echo ($nome . ' ' . $sobrenome . '<br>');
        } else {
            die("API não retornou!" . "<br>");
        }
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>