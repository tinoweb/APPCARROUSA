<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "agile_route";

// $host = "localhost";
// $user = "mvdama62_tinoweb";
// $pass = "mvdama62_tinoweb";
// $dbname = "mvdama62_agile_route";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    // Ativar exceções para erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>
