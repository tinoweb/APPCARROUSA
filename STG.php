<?php
   include_once('server/session.php');
   $nameProfile = require_once('server/getUserName.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STG</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/stgs.css">

    <style>
        .content {
        font-family: 'Arial', sans-serif; /* Use a fonte que preferir */
        color: #FFFFFF;
        background-color: #1A1A1A; /* Cor de fundo da área de conteúdo */
        padding: 20px;
        }

        .pickup-container {
        max-width: 600px; /* ou a largura que preferir */
        margin: auto;
        background-color: #292929; /* Cor de fundo do container */
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra suave */
        }

        .pickup-header h2 {
        background-color: #333; /* Cor de fundo do cabeçalho */
        color: #fff;
        padding: 10px 0;
        margin: -20px -20px 20px -20px; /* Para alinhar o fundo com o container */
        border-radius: 10px 10px 0 0;
        border-bottom: 4px solid #444; /* Borda inferior mais escura para efeito 3D */
        text-transform: uppercase; /* Letras maiúsculas para o título */
        }

        .staging-area, .route-number {
        background-color: #333; /* Cor de fundo para as seções de área e rota */
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 5px;
        }

        .staging-title, .route-title {
        font-size: 0.9em; /* Tamanho da fonte dos títulos */
        color: #aaa; /* Cor da fonte dos títulos */
        margin-bottom: 5px;
        }

        .staging-value, .route-value {
        font-size: 1.2em; /* Tamanho da fonte dos valores */
        font-weight: bold;
        }

        .pickup-instructions {
        background-color: #333; /* Cor de fundo das instruções */
        padding: 15px;
        border-radius: 5px;
        font-size: 0.9em; /* Tamanho da fonte das instruções */
        line-height: 1.5; /* Espaçamento entre linhas */
        color: #ddd; /* Cor da fonte das instruções */
        }

/* Estilos adicionais para ícones e outros elementos, caso necessário */

    </style>

</head>
<body class="dark-bg">

    <!-- Top Bar -->
    <div class="top-bar">
        <button id="menuToggle" class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="buttonsOption" style="width: 120px;">
            <i class="bi bi-chat-left" width="42" height="42"></i>
            <i class="bi bi-question-circle"></i>
        </div>
    </div>

    <!-- Side Menu -->
    <div id="sideMenu" class="side-menu">
        <div class="container">
            <div class="areaProfile mb-4 mt-5">
                <img src="assets/imgs/profilePic.jpg" id="fotoProfile" alt="Profile" class="rounded-circle profile-pic">
                <span class="namePictureUser"> 
                    <p class="text-center">
                        <?php
                            echo isset($_SESSION["nome"]) ? $nameProfile : 'Name';
                        ?>    
                    </p>    
                </span>
            </div>
            <hr>
            <ul class="mt-3">
                <li><a href="#">Current Stop</a></li>
                <li><a href="#">Today's Itinerary</a></li>
                <li><a href="#">Pick Up</a></li>
                <li><a href="#">Updates</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">Your Dashboard</a></li>
                <li><a href="#">Learning Portal</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Earnings</a></li>
                <li><a href="#">Feedback</a></li>
                <li><a href="server/logout.php">LogOut</a></li>
            </ul>
        </div>
    </div>

    <!-- Content Area -->
    <div class="content">
        <img src="assets/imgs/dashboardApp.png" alt="dashApp imag">
        <div class="pickup-container">
            <div class="pickup-header text-center">
                <h2>Proceed to pickup</h2>
            </div>
            <div class="staging-area">
                <div class="staging-title">Staging area</div>
                <div class="staging-value" id="stagingValue">STG.Silva</div>
            </div>
            <div class="route-number">
                <div class="route-title">Route #</div>
                <div class="route-value" id="routeValue">AB2</div>
            </div>
            <div class="pickup-instructions">
                <p>Your route’s packages are ready for pickup. Look for the signs in the station to find the staging area for your route.</p>
                <p>When you have arrived, scan any package from the cart to confirm you are at the right place. You can then pick up your packages.</p>
            </div>
            <button class="scan-btn">SCAN TO PROCEED</button>
        </div>
        <div class='text-center'>
            <button id="voltarAtraz" class="btn btn-dark mt-5">Go Back</button>
        </div>
    </div>

    <style>
        .scan-btn {
            display: block; /* faz o botão ocupar a largura total */
            width: 80%; /* ou a largura desejada */
            margin: 20px auto; /* centraliza o botão horizontalmente */
            padding: 15px 0; /* tamanho do padding interno para aumentar a altura */
            background-color: #4CAF50; /* cor de fundo do botão */
            color: white; /* cor do texto do botão */
            border: none; /* remove a borda padrão */
            border-radius: 5px; /* bordas arredondadas */
            font-size: 1.5em; /* tamanho da fonte do texto dentro do botão */
            cursor: pointer; /* muda o cursor para indicar que é clicável */
            transition: background-color 0.3s; /* efeito suave ao mudar cor de fundo */
        }

        .scan-btn:hover {
            background-color: #45a049; /* cor de fundo ao passar o mouse */
        }

        .scan-btn:focus {
            outline: none; /* remove o contorno padrão quando o botão é focado */
        }
    </style>
    
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/stg.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <script>
        var goback = document.getElementById("voltarAtraz")
        goback.addEventListener("click", () => {
            window.location.href = "escolhaSTGAndroid.php"
        })
    
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

            const userData = JSON.parse(localStorage.getItem('userData'));
            if (userData) {
                $('#stagingValue').text(userData.usuario || 'STG.Default'); // 'STG.Default' é um valor de fallback
                $('#routeValue').text(userData.selecoes || 'AB1'); // 'AB1' é um valor de fallback
            }
        });
    </script>
</body>
</html>
