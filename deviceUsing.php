<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Device Selection</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/deviceUsing.css">
</head>
<body>

<div class="container text-center">
    <h2 class="my-5">Which device is the Route on?</h2>
    <div class="button-container">
        <button id="androidButton" class="btn btn-success btn-lg mb-3">ANDROID</button>
        <button id="iphoneButton" class="btn btn-success btn-lg mb-3 mt-4">IPHONE</button>
    </div>
    <button id="backButton" class="btn btn-dark mt-5">Go Back</button>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        var backButton = document.querySelector("#backButton");
        var androidButton = document.querySelector("#androidButton");
        var iphoneButton = document.querySelector("#iphoneButton");

        backButton.addEventListener("click", () => {
            window.location = 'dataFoto.php';
        })
        androidButton.addEventListener("click", () => {
            window.location.href = "selectStation.php"
        })
        iphoneButton.addEventListener("click", () => {
            window.location.href = "selectStation.php"
        })


    })


</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
