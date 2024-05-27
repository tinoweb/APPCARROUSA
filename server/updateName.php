<?php

require_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $newName    = $_POST['newName'];
    $id         = $_POST['idUser'];

    // Atualiza o campo 'nome' na tabela 'users'
    $sql = "UPDATE users SET nome = '$newName' WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "error";
    }

    $conn->close();
}
?>
