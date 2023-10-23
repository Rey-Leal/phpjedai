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
            // Imprime toda estrutura de retorno 
            echo ('<pre>');
            print_r($api);
            echo ('</pre>');

            // Imprime elementos
            if ($api != null) {
                foreach ($api as $i => $value) {
                    $nome = $api[$i]->nome;
                    $sobrenome = $api[$i]->sobrenome;
                    $sexo = $api[$i]->sexo;
                    echo ($i . ' ' . $nome . ' ' . $sobrenome . ' ' .  $sexo . ' ');
                    foreach ($api[$i]->cor as $y => $value) {
                        $cor = $api[$i]->cor[$y];
                        echo ($y . ' ' . $cor . ' ');
                    }
                    echo ('<br>');
                }
            } else {
                echo ("API não retornou!" . "<br>");
            }
        } else {
            echo ("Erro cURL: " . curl_errno($curl) . '<br>');
        }
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>