    <?php
    if (isset($_POST['request']) && $_POST['request'] == 'buscaUsuarios') {
        die(json_encode(array(
            array('nome' => 'Rey', 'sobrenome' => 'Leal', 'sexo' => 'M', 'cor' => array('azul', 'vermelho')),
            array('nome' => 'Ana', 'sobrenome' => 'Clara', 'sexo' => 'F', 'cor' => array('rosa', 'branco')),
            array('nome' => 'Lara', 'sobrenome' => 'Maria', 'sexo' => 'F', 'cor' => array('amarelo')),
            array('nome' => 'Raul', 'sobrenome' => 'Souza', 'sexo' => 'M', 'cor' => array('verde'))
        )));
    }
    ?>