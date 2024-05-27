<?php
   include_once('server/session.php');
   $nameProfile = require_once('server/getUserName.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dataFoto.css"> <!-- Seu arquivo CSS personalizado -->
</head>
<body>
    <div class="py-5 px-4">
        <!-- Seção de entrada de dados -->
        <div class="input-group mb-3">
            <input type="text" id="nameInput" class="form-control" placeholder="Name" aria-label="Name">
            <input type="hidden" id="idUser" name="idUser" value="<?php echo $_SESSION['id']; ?>">
        </div>
        
        <div class="button-container mb-2">
            <button class="btn-custom sendName">Submit</button>
        </div>
        
        <div class="profile-section mb-3">
            <img src="assets/imgs/profilePic.jpg" id="fotoProfile" alt="Profile Picture" class="rounded-circle profile-pic">
            <button type="button" id="nameButton" class="btn btn-dark w-100 mb-2">
                <?php
                    echo isset($_SESSION["nome"]) ? $nameProfile : 'Name';
                ?>
            </button>
        </div>

        <!-- Imediatamente acima ou abaixo do formulário -->
        <div id="messageContainer" class="d-none"></div>


        <!-- Botões de ação -->
        <div class="actions">
            <button id="gotoRoute" class="btn btn-success w-100 mb-2">Go to Route (Access every 2 hours)</button>
            <button class="btn btn-success w-100 mb-2">Support</button>
            <button class="btn btn-success w-100 mb-2">Manage Subscription</button>
        </div>
        
        <!-- Rodapé -->
        <footer class="footer mt-5">
            <button class="btn btn-success w-100 mb-2">PRIME</button>
        </footer>

        <div class='text-center'>
            <button id="voltarAtraz" class="btn btn-dark mt-5">Go Back</button>
        </div>
    </div>

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
                            setTimeout(function() {
                                messageContainer.addClass('d-none').removeClass('alert alert-success');
                            }, 5000); // Esconde a mensagem após 5 segundos
                        } else {
                            messageContainer.removeClass('d-none').addClass('alert alert-danger').text('Error updating name. Please try again.');
                            setTimeout(function() {
                                messageContainer.addClass('d-none').removeClass('alert alert-danger');
                            }, 5000); // Esconde a mensagem após 5 segundos
                        }
                    },
                    error: function() {
                        alert('Error processing the request. Please try again.');
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


    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'server/getPicture.php', 
                type: 'GET',
                success: function(response) {
                    if (response.success) {
                        $('#nomeUsuario').text(response.nome);
                        $('#fotoUsuario').attr('src', response.foto);
                        console.log("footo ==>", 'admin/'+response.foto)
                        $('#fotoProfile').attr('src', 'admin/'+response.foto);
                    } else {
                        alert(response.message); 
                    }
                }
            });
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>

</body>
</html>
