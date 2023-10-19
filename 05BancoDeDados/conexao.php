<?php
try {
    $host = 'localhost';
    $dbname = 'phpjedai';
    $username = 'root';
    $pass = '';

    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $pass);
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "<br>");
}