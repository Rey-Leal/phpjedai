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
        $url = "http://localhost:8080/phpjedai/06WebServicesAPI/request.php";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(array('request' => 'buscaUsuarios')));
        $api = json_decode(curl_exec($curl));
        curl_close($curl);

        if (!curl_errno($curl)) {
            echo ('<pre>');
            print_r($api);
            echo ('</pre>');

            foreach ($api as $key => $value) {
                $nome = $api[$key]->nome;
                $sobrenome = $api[$key]->sobrenome;
                $sexo = $api[$key]->sexo;
                echo ($key . ' ' . $nome . ' ' . $sobrenome . ' ' .  $sexo . '<br>');
            }
        } else {
            die("API não retornou!" . "<br>");
        }
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>