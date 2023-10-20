<?php
try {
    include_once('conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    // SELECT
    $sql = "SELECT * FROM clientes;";
    $conexao = $pdo->prepare($sql);
    $conexao->execute();
    $resultado = $conexao->fetchAll(); ?>

    <form action="deletarClientes.php" method="POST" enctype="multipart/form-data">
        <table class="striped" id="tabela">
            <thead>
                <th>Id</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Ação</th>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $linha) { ?>
                    <tr>
                        <td><?= $linha['id'] ?></td>
                        <td><?= $linha['nome'] ?></td>
                        <td><?= $linha['sobrenome'] ?></td>
                        <td>
                            <button class="btn-flat transparent red-text text-darken-2" type="submit" name="id" value="<?= $linha['id'] ?>">
                                <i class="material-icons">delete</i>
                            </button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </form>
<?php
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}
?>