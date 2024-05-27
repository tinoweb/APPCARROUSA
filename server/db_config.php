<?php
// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$database = "agile_route";

// $servername = "localhost";
// $username = "mvdama62_tinoweb";
// $password = "mvdama62_tinoweb";
// $database = "mvdama62_agile_route";

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Verifica se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
