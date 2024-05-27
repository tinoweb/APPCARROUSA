<?php
session_start(); 
require_once('../admin/dbconfig.php');

header('Content-Type: application/json'); 

if (isset($_SESSION['id'])) {
    $userId = $_SESSION['id'];
    $sql = "SELECT nome, foto FROM users WHERE id = :userId";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        echo json_encode([
            'success' => true,
            'nome' => $row['nome'],
            'foto' => $row['foto']
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Usuário não encontrado.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Usuário não está logado.']);
}
?>
