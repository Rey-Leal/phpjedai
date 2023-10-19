<html>

<head>
    <title>01 Insert PDO</title>
    <?php include_once('head.php'); ?>
</head>

<body>
    <header>
        <h4>01 Insert PDO</h4>
         <!--
           Usando ? nos parametros da query o PDO consegue evitar SQL Injections
           retirando todos os caracteres maliciosos
         -->
    </header>

    <form action="inserirCliente.php" method="post">
        <input type="text" name="nome" placeholder="Nome" required />
        <input type="text" name="sobrenome" placeholder="Sobrenome" required />
        <button class="btn-large" type="submit" name="acao" value="enviar">Cadastrar</button>
    </form>
</body>

</html>