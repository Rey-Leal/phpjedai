<html>

<head>
    <title>06 GET e POST</title>
    <?php include('head.php'); ?>
</head>

<body>
    <header>
        <h4>06 GET e POST</h4>
    </header>

    <?php
    // GET = parametros enviados via URL visiveis ao usuario
    // POST = parametros enviados via requisicao ocultas ao usuario

    // Leitura GET
    if (isset($_GET['nome']) && isset($_GET['email'])) {
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo ('GET = ' . $nome . ' ' . $email . '</br>');
    }
    // Leitura POST
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['sexo'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $sexo = $_POST['sexo'];
        echo ('POST = ' . $nome . ' ' . $email . ' ' . $sexo . '</br>');
    }
    ?>

    <!-- Envio via GET -->
    <form method="get" id="get">
        <input type="text" name="nome" placeholder="Nome" />
        <input type="text" name="email" placeholder="Email" />
        <button class="btn-large" type="submit" name="acao" value="enviar">Enviar GET</button>
    </form>

    <!-- Envio via POST -->
    <form method="post" id="post">
        <input type="text" name="nome" placeholder="Nome" />
        <input type="text" name="email" placeholder="Email" />
        <button class="btn-large" type="submit" name="acao" value="enviar">Enviar POST</button>
    </form>
</body>

</html>