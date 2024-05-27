<?php
// Inicia a sessão
session_start();

// Encerra a sessão (remove todas as variáveis de sessão)
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona o usuário de volta para a página index.php após o logout
header("Location: ../index.php");
exit(); // Encerra o script para garantir que o redirecionamento seja executado
?>
