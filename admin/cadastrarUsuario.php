<?php

include_once 'dbconfig.php';

// Verificar se o arquivo foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['foto']) && $_FILES['foto']['error'] == 0) {
    
    // Detalhes do arquivo
    $fileTmpPath = $_FILES['foto']['tmp_name'];
    $fileName = $_FILES['foto']['name'];
    $fileSize = $_FILES['foto']['size'];
    $fileType = $_FILES['foto']['type'];
    $fileNameCmps = explode(".", $fileName);
    $fileExtension = strtolower(end($fileNameCmps));

    // Diretório onde a foto será salva
    $uploadFileDir = './uploads/';
    $newFileName = md5(time() . $fileName) . '.' . $fileExtension;
    $dest_path = $uploadFileDir . $newFileName;

    // Tipos de arquivo permitidos
    $allowedfileExtensions = array('jpg', 'gif', 'png', 'jpeg');

    if (in_array($fileExtension, $allowedfileExtensions)) {
        // Mover o arquivo para o diretório de uploads
        if(move_uploaded_file($fileTmpPath, $dest_path)) {
            $message ='Arquivo é válido e foi carregado com sucesso.';
        } else {
            $message = 'Ocorreu algum erro ao mover o arquivo para o diretório de upload. Verifique as permissões.';
            die($message);
        }
    } else {
        $message = 'Upload falhou. Tipos de arquivo permitidos: ' . implode(',', $allowedfileExtensions);
        die($message);
    }

    // Preparar o comando SQL
    $sql = "INSERT INTO users (nome, email, senha, foto, created_at) VALUES (:nome, :email, :senha, :foto, NOW())";

    // Hash da senha
    $senhaHash = md5($_POST['senha']);


    // Preparar os valores para serem inseridos
    $values = [
        ':nome' => $_POST['nome'],
        ':email' => $_POST['email'],
        ':senha' => $senhaHash,
        ':foto' => $dest_path
    ];

    try {
        $stmt = $pdo->prepare($sql);
        $stmt->execute($values);

        echo json_encode(["mensagem" => "Usuário cadastrado com sucesso!"]);
    } catch (PDOException $e) {
        echo json_encode(["mensagem" => "Erro ao cadastrar usuário: " . $e->getMessage()]);
    }
} else {
    echo json_encode(["mensagem" => "Erro no upload do arquivo."]);
}