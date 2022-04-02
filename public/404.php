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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" />
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>

<body>
<div class="container">
    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>Oops!</h1>
            </div>
            <h2>404 - Page not found</h2>
            <p>Aradığınız sayfa, adı değiştirilmiş veya geçici olarak kullanılamıyor olabilir. 5 saniye sonra otomatik olarak Ana Sayfa'ya yönlendirileceksiniz.</p>
            <a href="login.php">Ana Sayfa'ya Dön</a>
        </div>
    </div>
</div>
</body>
</html>
