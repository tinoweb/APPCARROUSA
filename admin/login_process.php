<?php
include_once('../server/db_config.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["usermail"];
    $senha = $_POST["password"];

    $hashed_password = md5($senha);
    
    $sql = "SELECT * FROM admin_users WHERE email = '$email' AND password = '$hashed_password'";
    $result = $conn->query($sql);

    
    
    
    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION["admin_id"] = $row["id"];
        $_SESSION["admin_nome"] = $row["username"]; 
        $_SESSION["admin_email"] = $row["email"];
        
        echo "success";
        exit();
    } else {
        echo "Nome de usuário ou senha incorretos.";
    }
}



?>