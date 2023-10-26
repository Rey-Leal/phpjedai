<html>

<head>
    <title>01 Comandos PDO</title>
    <?php include_once('head.php'); ?>
</head>

<body>
    <header>
        <h4>01 Comandos PDO</h4>
        <p>
            Conexão segura e manipulação via PDO<br>
            Sempre usar '?' nos parametros da query o PDO consegue evitar SQL Injections, retirando caracteres maliciosos<br>
            Evitar mensagens completas ou padrão do PDO por questões de segurança
        </p>
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

    <?php
    // Alerta de mensagens
    if (isset($_GET["mensagem"])) {
        echo ($_GET["mensagem"]);
    } ?>
</body>

</html>