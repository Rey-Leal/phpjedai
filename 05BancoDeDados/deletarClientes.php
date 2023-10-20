<?php
try {
    include_once('conexao.php');

    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // DELETE
        $sql = "DELETE FROM clientes 
                WHERE id = ?;";
        $conexao = $pdo->prepare($sql);
        $conexao->execute(array($id));

        header("Location: 01ComandosPDO.php?mensagem=Cliente deletado com sucesso!");
        exit;
    } else {
        header("Location: 01ComandosPDO.php?mensagem=Selecione um cliente!");
    }
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}
