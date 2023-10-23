    <?php
    if (isset($_POST['request']) && $_POST['request'] == 'buscaUsuarios') {
        die(json_encode(array(
            array('nome' => 'Rey', 'sobrenome' => 'Leal', 'sexo' => 'M'),
            array('nome' => 'Ana', 'sobrenome' => 'Clara', 'sexo' => 'F'),
            array('nome' => 'Lara', 'sobrenome' => 'Maria', 'sexo' => 'F'),
            array('nome' => 'Raul', 'sobrenome' => 'Souza', 'sexo' => 'M')
        )));
    }
    ?>