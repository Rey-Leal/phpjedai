<?php
try {
    include_once('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    if (isset($_POST['nome']) && isset($_POST['sobrenome'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $dataCadastro = date('Y-m-d H:i:s');

        $sql = "INSERT INTO clientes 
                VALUES (0, ?, ?, ?)";
        $conexao = $pdo->prepare($sql);
        $conexao->execute(array($nome, $sobrenome, $dataCadastro));

        header("Location: 01InsertPDO.php?mensagem=Cliente ($nome) salvo com sucesso!");
        exit;
    } else {
        echo ('Preencher dados de cadastro!' . '</br>');
    }
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}
