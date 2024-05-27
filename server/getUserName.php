<?php
require_once('db_config.php');

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $sql = "SELECT nome FROM users WHERE id = $userId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['nome'];
    } else {
        echo "Erro: Usuário não encontrado.";
    }
    $conn->close();
} else {
    echo "Erro: Usuário não está logado.";
}
?>
