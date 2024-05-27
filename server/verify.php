<?php

include_once('db_config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $hashed_password = md5($senha);
    
    $sql = "SELECT * FROM users WHERE email = '$email' AND senha = '$hashed_password'";
    $result = $conn->query($sql);
    
    
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION["id"] = $row["id"];
        $_SESSION["nome"] = $row["nome"]; 
        $_SESSION["email"] = $row["email"];
        
        echo "success";
        exit();
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}

$conn->close();
?>
