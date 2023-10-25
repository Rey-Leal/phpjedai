<html>

<head>
    <title>03 Recursividade</title>
</head>

<body>
    <header>
        <h2>03 Recursividade</h2>
    </header>

    <?php
    function contar($quantidade)
    {
        static $numero = 0;
        $numero++;
        echo ($numero . ' ' . numeroPorExtenso($numero) . '<br>');
        if ($numero < $quantidade) {
            contar($quantidade);
        }
    }

    function numeroPorExtenso($numero)
    {
        $unidades = array('zero', 'um', 'dois', 'três', 'quatro', 'cinco', 'seis', 'sete', 'oito', 'nove');
        $baseDez = array('dez', 'onze', 'doze', 'treze', 'catorze', 'quinze', 'dezesseis', 'dezessete', 'dezoito', 'dezenove');
        $dezenas = array('', 'dez', 'vinte', 'trinta', 'quarenta', 'cinquenta', 'sessenta', 'setenta', 'oitenta', 'noventa');
        $centenas = array('', 'cento', 'duzentos', 'trezentos', 'quatrocentos', 'quinhentos', 'seiscentos', 'setecentos', 'oitocentos', 'novecentos');
        $milhares = array('', 'mil');

        if ($numero < 10) {
            return $unidades[$numero];
        } elseif ($numero < 20) {
            return $baseDez[$numero - 10];
        } elseif ($numero < 100) {
            return $dezenas[($numero / 10)] . (($numero % 10 != 0) ? ' e ' . $unidades[$numero % 10] : '');
        } elseif ($numero < 1000) {
            return $centenas[($numero / 100)] . (($numero % 100 != 0) ? ' e ' . numeroPorExtenso($numero % 100) : '');
        } elseif ($numero < 1000000) {
            $milhar = floor($numero / 1000);
            $restante = $numero % 1000;
            return numeroPorExtenso($milhar) . ' ' . $milhares[(strlen($numero) < 4) ? 0 : 1] . (($restante != 0) ? ' e ' . numeroPorExtenso($restante) : '');
        }
    }

    try {
        contar(30);
    } catch (Exception $e) {
        die("Erro: " . $e->getMessage() . "<br>");
    }
    ?>
</body>

</html>