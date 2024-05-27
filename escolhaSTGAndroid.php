<?php
   include_once('server/session.php');
   $nameProfile = require_once('server/getUserName.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ReportSTG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dataFoto.css"> <!-- Seu arquivo CSS personalizado -->
    <style>
        .goRoute {
            background-color: #28a745;
            border: none;
            padding: 15px 0;
            margin-bottom: 20px;
            font-size: 18px; 
            border-radius: 20px; 
        }
    </style>
</head>
<body>

<div class="container text-center">
    <h2 class="my-4">Report STG:</h2>

    <!-- Station List -->
    <div class="station-list">
        <div class="input-group mb-3">
            <input type="text" id="nameInput" class="form-control" placeholder="Name" aria-label="Name">
            <input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION['id']; ?>">
        </div>
    </div>

    <div class="button-container mt-4">
        <button class="btn-custom w-100 sendName goRoute">Submit</button>
    </div>

    <!-- Imediatamente acima ou abaixo do formulário -->
    <div id="messageContainer" class="d-none"></div>

    <div class="profile-section mb-3 mt-4">
        <button type="button" id="nameButton" class="btn btn-dark w-100 mb-2">
            <?php
                echo isset($_SESSION["nome"]) ? $nameProfile : 'Name';
            ?>
        </button>
    </div>

    <button id="acessFrente" class="btn btn-success w-100 mb-3 goRoute">Go to Route</button>

    <div class="mt-5">
        <button id="backButton" class="btn btn-dark mt-5">Go Back</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {

        var backButton = document.querySelector("#backButton");
        backButton.addEventListener("click", () => {
            window.location.href="dataRouteAndroid.php";
        })

        function updateName() {
            var name = document.getElementById('nameInput').value; 
            var nameButton = document.getElementById('nameButton');
            nameButton.textContent = name; 
        }

        var submitButton = document.querySelector('.sendName'); 
        submitButton.addEventListener('click', updateName);

        var acessFrente = document.getElementById('acessFrente');
        acessFrente.addEventListener('click', () => {
            window.location.href = 'STG.php'
        })

    })
</script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function updateName() {
                console.log("update Name")
                var name = document.getElementById('nameInput').value; 
                var nameButton = document.getElementById('nameButton');
                nameButton.textContent = name; 
                updateNameBd();
            }

            function updateNameBd() {
                console.log("update Name BD")
                var newName = $('#nameInput').val();
                var idUser = $('#idUser').val();
                console.log("idUser", idUser);
               
                var data = {
                    newName: newName,
                    idUser: idUser
                };
                
                var messageContainer = $('#messageContainer');
                $.ajax({
                    type: 'POST',
                    url: 'server/updateName.php',
                    data: data,
                    success: function(response) {
                        if (response === "success") {
                            messageContainer.removeClass('d-none').addClass('alert alert-success').text('Name updated successfully!');
                
                            // Atualiza o localStorage
                            var storedUserData = JSON.parse(localStorage.getItem('userData'));
                            if (storedUserData) {
                                storedUserData.usuario = newName; // Atualiza o nome do usuário no objeto
                                localStorage.setItem('userData', JSON.stringify(storedUserData)); // Salva de volta no localStorage
                            }

                            setTimeout(function() {
                                messageContainer.addClass('d-none').removeClass('alert alert-success');
                            }, 5000); // Esconde a mensagem após 5 segundos
                            // messageContainer.removeClass('d-none').addClass('alert alert-success').text('Name updated successfully!');
                            // setTimeout(function() {
                            //     messageContainer.addClass('d-none').removeClass('alert alert-success');
                            // }, 5000); // Esconde a mensagem após 5 segundos
                        } else {
                            messageContainer.removeClass('d-none').addClass('alert alert-danger').text('Error updating name. Please try again.');
                            setTimeout(function() {
                                messageContainer.addClass('d-none').removeClass('alert alert-danger');
                            }, 5000); // Esconde a mensagem após 5 segundos
                        }
                    },
                    error: function() {
                        alert('Erro ao processar a requisição. Por favor, tente novamente.');
                    }
                });
            }

            var submitButton = document.querySelector('.sendName'); 
            submitButton.addEventListener('click', updateName);



            var routeButton = document.querySelector("#gotoRoute");
            routeButton.addEventListener('click', function(){
                window.location.href = "deviceUsing.php"
            })

            var goback = document.getElementById("voltarAtraz")
            goback.addEventListener("click", () => {
            window.location.href = "assinatura.php"
        })

        });
    </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
