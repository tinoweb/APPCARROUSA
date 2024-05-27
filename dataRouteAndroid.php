<?php
   include_once('server/session.php');
   $nameProfile = require_once('server/getUserName.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dataRouteAndroid</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/dataRouteAndroid.css">
</head>
<body>

<div class="container text-center mt-4" style="position: relative; top: 3rem;">
    <h2 class="my-4"></h2>
    
    <div class="dropdown mb-3">
        <button class="btn btn-dark dropdown-toggle w-50" type="button" id="dropdownMenuButtonLetter" data-bs-toggle="dropdown" aria-expanded="false">
            Select Letter
        </button>
        <ul class="dropdown-menu w-50 bg-black" aria-labelledby="dropdownMenuButtonLetter">
            <li><a class="dropdown-item itemLetter text-white" href="#">A</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">B</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">C</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">D</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">E</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">F</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">G</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">H</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">I</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">J</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">K</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">L</a></li>
            <li><a class="dropdown-item itemLetter text-white" href="#">M</a></li>
        </ul>
    </div>
    
    <div class="dropdown mb-3">
        <button class="btn btn-dark dropdown-toggle w-50" type="button" id="selectNumberDd" data-bs-toggle="dropdown" aria-expanded="false">
            Select Number
        </button>
        <ul class="dropdown-menu w-50 bg-black" aria-labelledby="selectNumberDd">
            <li><a class="dropdown-item dropNumber text-white" href="#">L01</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L02</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L03</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L04</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L05</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L06</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L07</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L08</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L09</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L10</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L11</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L12</a></li>
            <li><a class="dropdown-item dropNumber text-white" href="#">L13</a></li>
        </ul>
        
    </div>
    
    <div class="dropdown mb-3">
        <button class="btn btn-dark dropdown-toggle w-50" id="selectCyty" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select City
        </button>
        <ul class="dropdown-menu w-50 bg-black" id="cityMenu" aria-labelledby="selectCyty">
            <li><a class="dropdown-item cityItem text-white" href="#">ACCOKEEK</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ALEXANDRIA</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ARLINGTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ANNANDALE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BETHESDA</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BOWIE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BRIANS ROAD</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BURKE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">CAPITOL HEIGHTS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">CHEVY CHASE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">CLINTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">DUMFRIES</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">DEALE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FALLS CHURCH</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FAIRFAX</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FAIRFAX STATION</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FORT WASHINGTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FRIENDSHIP</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">GERMANTOWN</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">GAITHERSBURG</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">GREAT FALLS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">HYATTSVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">KENSINGTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">LANDOVER</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">LORTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">LOTHIAN</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">MANASSAS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">MITCHELLVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">MC LEAN</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">OXON HILLS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">POTOMAC</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">POOLESVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ROCKVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">SILVER SPRING</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">SPRINGFIELD</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">SUITLAND</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">TEMPLE HILLS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">UPPER MARLBORO</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">VIENNA</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">WASHINGTON</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">WOODBRIDGE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ANNAPOLIS</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BALTIMORE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">BELTSVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">CATONSVILLE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">COLUMBIA</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">COLLEGE PARK</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">EDGEWOOD</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">ELKRIDGE</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">FREDERICK</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">GREENBELT</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">HANOVER</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">LAUREL</a></li>
            <li><a class="dropdown-item cityItem text-white" href="#">PARKSVILLE</a></li>
        </ul>
    </div>
    
    <!-- Barra preta -->
    <div class="black-bar mb-3 rounded-pill text-white"> 
        <span id="dataDress" style="position: relative;top: 7px;">dados completo</span> 
    </div>
    
    <!-- Botão de número -->
    <div class="dropdown mb-3">
        <button class="btn btn-dark dropdown-toggle w-50" id="selectNumberEnd" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select Number
        </button>
        <ul class="dropdown-menu w-50 bg-black" id="numberMenu" aria-labelledby="selectNumberEnd">
            <li><a class="dropdown-item numberItem text-white" href="#">1</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">2</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">3</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">4</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">5</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">6</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">7</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">8</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">9</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">10</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">11</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">12</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">13</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">14</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">15</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">16</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">17</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">18</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">19</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">20</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">21</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">22</a></li>
            <li><a class="dropdown-item numberItem text-white" href="#">23</a></li>
        </ul>
    </div>
    
    <div id="error-message" class="alert alert-danger d-none" role="alert"></div>
    <style>.d-none {display: none;}</style>

    <input type="hidden" name="nomeProfile" value="<?php echo $nameProfile ?>">
    
    <button id="acessFrente" class="btn btn-success w-100 mb-3">Access App</button>
    <button id="voltarAtraz" class="btn btn-dark mt-5">Go Back</button>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        var errorMessage = document.getElementById("error-message");
        var accessButton = document.getElementById("acessFrente");
        var accessButton = document.getElementById("acessFrente");
        
        var dropdownMenuButtonLetter = document.getElementById("dropdownMenuButtonLetter");
        var selectNumberDd = document.getElementById("selectNumberDd");
        var selectCity = document.getElementById("selectCyty");
        
        
        accessButton.addEventListener("click", function(event) {
            var allSelectionsMade = dropdownMenuButtonLetter.textContent.trim() !== "Select Letter" &&
                                    selectNumberDd.textContent.trim() !== "Select Number" &&
                                    selectCity.textContent.trim() !== "Select City";
            if (!allSelectionsMade) {
                event.preventDefault();
                errorMessage.textContent = "Please make all selections before proceeding.";
                errorMessage.classList.remove("d-none");
                setTimeout(function() {
                    errorMessage.classList.add("d-none");
                }, 3000);
            } else {

                const userData = {
                    usuario: document.querySelector('input[name="nomeProfile"]').value,
                    selecoes: document.getElementById('dataDress').textContent
                };
                localStorage.setItem('userData', JSON.stringify(userData));
                window.location.href = "escolhaSTGAndroid.php";
            }
        });

        // --------------------------------------------------------------------------

        var goback = document.getElementById("voltarAtraz")
        var acessFrente = document.getElementById("acessFrente")
        goback.addEventListener("click", () => {
            window.location.href = "selectStation.php"
        })

        const letterItems = document.querySelectorAll('.itemLetter');
        const dropNumbers = document.querySelectorAll('.dropNumber');
        const cityItems   = document.querySelectorAll('.cityItem');
        const numberItem  = document.querySelectorAll('.numberItem');
        const dataDress   = document.getElementById('dataDress')

        var holdLetter = '';
        var holdNumber = '';
        var holdCity   = '';
        
        letterItems.forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('dropdownMenuButtonLetter').textContent = this.textContent;
                holdLetter = this.textContent;
            });
        });
        
        dropNumbers.forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('selectNumberDd').textContent = this.textContent;
                holdNumber = this.textContent;
            });
        });

        cityItems.forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('selectCyty').textContent = this.textContent;
                holdCity = this.textContent;
                dataDress.textContent = holdLetter+" - "+holdNumber+" - "+holdCity;
            });
        });
        
        numberItem.forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('selectNumberEnd').textContent = this.textContent;
            });
        });

        
        var nomeProfile = document.querySelector('input[name="nomeProfile"]').value; 
        // console.log("usuario logado=-===>", nomeProfile)
    })
    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
