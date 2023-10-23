    <?php
    if (isset($_POST['request'])) {
        die(json_encode(array('nome' => 'Rey', 'sobrenome' => 'Leal')));
    }
    ?>