<?php
   include_once('server/session.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/assinatura.css"> <!-- Seu arquivo CSS personalizado -->
</head>
<body>
    <div class="header">
        <div class="container">
            <h1 class="text-center py-5">Bem Vindo</h1>
            <p class="text-center mb-5" style="position: relative;top: -2rem;">Sua assinatura está ativa</p>
        </div>
    </div>
    <div class="container text-center mb-5">
        <a href="dataFoto.php" class="btn btn-success btn-lg mb-3">Acessar aplicativo</a><br>
        <a href="gerenciar.php" class="btn btn-outline-success btn-lg">Gerenciar Assinatura</a>
    </div>

    <div class="text-center mt-5">
        <a href="server/logout.php" class="">Logout</a>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
