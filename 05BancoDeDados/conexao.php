<?php
try {
    $host = 'localhost';
    $dbname = 'phpjedai';
    $username = 'root';
    $pass = '';

    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $pass);
    // ATENCAO! Por questoes de seguranca: usar apenas para DEBUG!
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // ATENCAO! Por questoes de seguranca: usar apenas para DEBUG!
    // die("Não foi possível se conectar ao banco de dados $this->_dbname :" . $e->getMessage() . "<br>");
    die("Não foi possível se conectar ao banco de dados!" . "<br>");
} catch (Exception $e) {
    // ATENCAO! Por questoes de seguranca: usar apenas para DEBUG!
    // die("Erro:" . $e->getMessage() . "<br>");
    die("Não foi possível se conectar ao banco de dados!" . "<br>");
}
