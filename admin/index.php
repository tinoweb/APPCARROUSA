<?php
    require_once('../server/db_config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="usermail" class="form-label">usermail</label>
                    <input type="text" class="form-control" id="usermail" name="usermail" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block btn-lg">Login</button>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        $('#loginForm').submit(function (event) {
            event.preventDefault();
            var usermail = $('#usermail').val();
            var password = $('#password').val();
            $.ajax({
                url: 'login_process.php',
                method: 'POST',
                data: {usermail: usermail, password: password},
                success: function (response) {
                    if (response === 'success') {
                        window.location.href = 'dashboard.php';
                    } else {
                        alert('Invalid username or password');
                    }
                }
            });
        });
    });
</script>

</body>
</html>
