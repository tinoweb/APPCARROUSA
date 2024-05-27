<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agile Route</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-dark text-light">
    <div class="container" style="position: relative; top: -5rem;">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
            <div class="col-md-4">
                <div class="text-center mb-4">
                    <img src="assets/imgs/imgLogo.png" alt="Ícone de Caminhão" class="mb-4"> <!-- Adicione a imagem do caminhão aqui -->
                    <h1 class="h3 mb-3 font-weight-normal">Welcome, Driver!</h1>
                </div>

                <form id="loginForm" class="form-signin">
                    <div class="form-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus name="email">
                    </div>
                    <div class="form-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required name="senha">
                    </div>
                    <button id="submitBtn" class="btn btn-lg btn-success btn-block text-black" type="submit">Sign In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#loginForm").submit(function(event) {

                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    type: "POST",
                    url: "server/verify.php",
                    data: formData,
                    success: function(response) {
                            console.log("response", response)
                        if (response === "success") {
                            
                            window.location.href = "assinatura.php";
                        } else {
                            alert("Nome de usuário ou senha incorretos.");
                        }
                    },
                    error: function() {
                        alert("Ocorreu um erro ao processar a solicitação. Por favor, tente novamente.");
                    }
                });
            });
        });
    </script>

    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
