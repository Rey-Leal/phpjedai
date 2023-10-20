<?php
try {
    include_once('conexao.php');

    if (isset($_POST['nome']) && isset($_POST['sobrenome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $dataCadastro = date('Y-m-d H:i:s');

        // Usando ? nos parametros da query o PDO consegue evitar SQL Injections, retirando caracteres maliciosos      

        // INSERT
        $sql = "INSERT INTO clientes 
                VALUES (0, ?, ?, ?);";
        $conexao = $pdo->prepare($sql);
        $conexao->execute(array($nome, $sobrenome, $dataCadastro));

        header("Location: 01ComandosPDO.php?mensagem=Cliente salvo com sucesso!");
        exit;
    } else {
        header("Location: 01ComandosPDO.php?mensagem=Preencher dados de cadastro!");
    }
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}
