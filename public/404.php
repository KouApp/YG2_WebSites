<?php
session_start();
header("Refresh: 5; url=login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&family=Roboto:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/404.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
<div id="navigation">
    <script src = "menu.js"></script>
</div>
<div class="container">
    <div class="content">
        <h2>404</h2>
        <h4>Üzgünüz! Aradığın sayfayı bulamadık :(</h4>
        <p>5 saniye içerisinde otomatik olarak Ana Sayfa'ya yönlendirileceksin.</p>
        <a href="login.php">Ana Sayfa'ya Dön</a>
    </div>
</div>
</body>
</html>
