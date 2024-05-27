<?php
    session_start();
    if (!isset($_SESSION['admin_nome'])) {
        header("Location: index.php");
        exit();
    }
?>