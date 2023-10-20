<?php
try {
    include_once('conexao.php');

    // TRUNCATE - Limpa todas linhas e contadores da tabela
    $sql = "TRUNCATE TABLE clientes;";
    $conexao = $pdo->prepare($sql);
    $conexao->execute();

    header("Location: 01ComandosPDO.php?mensagem=Tabela limpa com sucesso!");
    exit;
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}
