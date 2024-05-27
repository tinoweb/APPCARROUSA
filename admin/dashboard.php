<?php
    include_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Admin &#8594; <?php echo $_SESSION['admin_nome']; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listarUsuarios.php">List Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../server/logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6 text-center">
            <h2 class="text-center mb-4">Admin Dashboard</h2>
            <!-- Formulário de Cadastro de Usuário -->

            <div id="alertArea" class="d-none"></div>
            <form id="userForm" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="userName" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="userName" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="userEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="userEmail" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="userSenha" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="userSenha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="userPhoto" class="form-label">Foto:</label>
                    <input type="file" class="form-control" id="userPhoto" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
            <!-- Add admin dashboard content here -->
            
        </div>
    </div>
</div>  

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('userForm');
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(form);
            var alertArea = document.getElementById('alertArea');

            fetch('cadastrarUsuario.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                console.log(data);
                // Aqui você atualiza a área de alerta com a mensagem de sucesso
                alertArea.innerHTML = `<div class="alert alert-success" role="alert">${data.mensagem}</div>`;
                alertArea.classList.remove('d-none');
                // Reset o formulário se o cadastro foi bem-sucedido
                form.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                 // Aqui você atualiza a área de alerta com a mensagem de erro
                alertArea.innerHTML = `<div class="alert alert-danger" role="alert">Erro no cadastro: ${error}</div>`;
                alertArea.classList.remove('d-none');
            });
        });
    });

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

