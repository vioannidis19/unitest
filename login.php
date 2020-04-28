<?php
    require 'internal/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Σύνδεση - Unitest</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="img/big-logo.png" alt="">
        </div>
        <div class="form-container">
            <h2>Σύνδεση</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Όνομα Χρήστη">
                <input type="password" name="password" placeholder="Κωδικός">
                <input type="submit" name="login" value="Σύνδεση">
            </form>
        </div>
    </div>
</body>
</html>