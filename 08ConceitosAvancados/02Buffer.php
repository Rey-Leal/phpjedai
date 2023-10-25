<!-- 
Buffer e uma area de armazenamento temporario 
usada para armazenar dados antes de serem enviados para o navegador do usuario
Muito util por exemplo em caso de headers com erro
-->
<?php
// Inicia armazenamento no buffer e nao manda nada ate que eu permita
ob_start();
?>
<html>

<head>
    <title>02 Buffer</title>
</head>

<body>
    <header>
        <h2>02 Buffer</h2>
    </header>

    <p>Conteúdo da minha página armazenada no buffer...</p>
</body>

</html>

<?php
$buffer = ob_get_contents();

// Limpa todo buffer
ob_end_clean();
// Encerra buffer
ob_end_flush();

// Imprime tudo que foi armazenado no buffer
echo ($buffer);
?>