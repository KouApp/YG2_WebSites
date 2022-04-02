<?php
session_start();

$curl = curl_init();

/*curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://194.195.246.167:5000/DatabaseLogin',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('Id' => $_POST['login'],'Password' => $_POST['password']),
));

$response = curl_exec($curl);
*/
curl_close($curl);
$_SESSION['Id'] = "pys@abudllahaligun.com";
$_SESSION['Permisson'] = "admin";

if ($_SESSION['Permisson'] == "student") {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://172.105.73.62:5000/studentQuery',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('id' => $_SESSION['Id']),
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    $student = json_decode($response, true);
    $_SESSION["fullname"] = $student["name"] . " " . $student["surname"];

    $_SESSION["advisorID"] = $student["advisorID"];
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://172.105.73.62:5000/advisorQuery',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => array('id' => $_SESSION['Id']),
    ));
    $response = curl_exec($curl);

    curl_close($curl);
    $advisor = json_decode($response, true);
    $_SESSION["advisorFullName"] = $advisor["name"] . " " . $advisor['"surname'];
}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">        
        <div class="thing-center">
            <div class="">
                <div class="login-form col-xl-12">
                    <form action="/examples/actions/confirmation.php" method="post">
                        <h2 class="text-center">GİRİŞ</h2>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Giriş ID" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Şifre" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Giriş Yap</button>
                        </div>
                        <div class="clearfix">
                            <label class="float-left form-check-label"><input type="checkbox"> Beni Hatırla</label>
                            <a href="#" class="float-right">Şifremi Unuttum</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>