<html>

<head>
    <title>01 Autoload</title>
</head>

<body>
    <?php include_once 'autoload.php'; ?>

    <header>
        <h2>01 Autoload</h2>
    </header>

    <?php
    // Chamada comum
    new Utilidades();

    // Chamada via namespace
    new home\Inicial();
    ?>
</body>

</html>