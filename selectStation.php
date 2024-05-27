<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Station</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/selectStation.css">
</head>
<body>

<div class="container text-center">
    <h2 class="my-4">Select Station</h2>
    
    <div class="dropdown mb-3">
        <button class="btn btn-dark dropdown-toggle w-100" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Select Station
        </button>
        <ul class="dropdown-menu w-100" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">SPRINGFIELD</a></li>
            <li><a class="dropdown-item" href="#">ELKRIDGE</a></li>
        </ul>
    </div>

    <button type="button" id="stationNameButton" class="btn btn-success preto mt-2 w-100 mb-3">Name</button>
    
    <div class="conter mt-4">
        <button id="acessApp" class="btn btn-success w-100 mb-3">Access App</button>
        <button id="bButton" class="btn btn-dark mt-5">Go Back</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        var backButton = document.querySelector("#bButton");
        var acessApp = document.getElementById("acessApp");
        // var iphoneButton = document.querySelector("#iphoneButton");

        backButton.addEventListener("click", () => {
            window.location.href = "deviceUsing.php"
        })
        acessApp.addEventListener("click", () => {
            window.location.href = "dataRouteAndroid.php"
        })

        const stationDropdownItems = document.querySelectorAll('.dropdown-item');
  
        stationDropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                document.getElementById('dropdownMenuButton1').textContent = this.textContent;
                document.getElementById('stationNameButton').textContent = this.textContent
            });
        });
    })
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
