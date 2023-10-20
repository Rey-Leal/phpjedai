<html>

<head>
    <title>01 Comandos PDO</title>
    <?php include_once('head.php'); ?>
</head>

<body>
    <header>
        <h4>01 Comandos PDO</h4>
        <?php
        // Alerta de mensagens
        if (isset($_GET["mensagem"])) {
            $msg = $_GET["mensagem"];
            echo ($msg);
        } else {
            $msg = "";
        } ?>
    </header>

    <!-- Cadastro de clientes -->
    <form action="inserirClientes.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required />
        <input type="text" name="sobrenome" placeholder="Sobrenome" required />
        <button class="btn-large" type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
    </form>

    <?php
    // Lista de clientes
    include_once('selectClientes.php');
    ?>

    <form action="truncateClientes.php" method="post">
        <button class="btn-large" type="submit" name="limpar" value="limpar">Limpar Tabela</button>
    </form>
</body>

</html>