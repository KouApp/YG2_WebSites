<?php
session_start();
$id = $_GET['id']; //get id from url
echo $id;

if ($_SESSION['Permisson'] != 'advisor' || !isset($id) || empty($id)) {
    echo '<meta http-equiv="refresh" content="0;URL=404.php">';
}

$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://172.105.73.62:5000/projectQuery',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('id' => $id),
));

$response = curl_exec($curl);
curl_close($curl);
$project = json_decode($response, true);

curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://172.105.73.62:5000/projectCounterQuery',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('proje_number' => $id)
));

$acceptReport = curl_exec($curl);
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
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!--APP HEADER-->
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__content">

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <div aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $_SESSION["advisorFullName"] ?>
                                    </div>
                                    <div class="widget-subheading text-center">
                                        <?php echo $_SESSION["title"] ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--COLOR SCHEMES-->
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
            <div class="theme-settings__inner">
                <div class="scrollbar-container">
                    <div class="theme-settings__options-wrapper">
                        <h3 class="themeoptions-heading">Tasarım Seçenekleri
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Sabit Başlık
                                                </div>
                                                <div class="widget-subheading">Başlığı yukarıya sabitler.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Sabit Yan Sekmeler
                                                </div>
                                                <div class="widget-subheading">Yan sekmeleri sola sabitler.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="widget-content p-0">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left mr-3">
                                                <div class="switch has-switch switch-container-class" data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle" data-onstyle="success">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget-content-left">
                                                <div class="widget-heading">Sabit Footer
                                                </div>
                                                <div class="widget-subheading">Footer'ı aşağıya sabitler.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>
                                Başlık Seçenekleri
                            </div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class" data-class="">
                                Orijinali Yükle
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Renk Şeması Seç
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class" data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class" data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class" data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class" data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class" data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class" data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class" data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class" data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class" data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class" data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class" data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class" data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class" data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class" data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class" data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class" data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class" data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class" data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class" data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class" data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class" data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class" data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class" data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class" data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class" data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class" data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class" data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class" data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class" data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class" data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class" data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class" data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class" data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class" data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class" data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class" data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Yan Sekme Seçenekleri</div>
                            <button type="button" class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class" data-class="">
                                Orijinali Yükle
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Renk Şeması Seç
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class" data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class" data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class" data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class" data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class" data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class" data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class" data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class" data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class" data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class" data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class" data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class" data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class" data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class" data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class" data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class" data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class" data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class" data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class" data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class" data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class" data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class" data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class" data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class" data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class" data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class" data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class" data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class" data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class" data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class" data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class" data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class" data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class" data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class" data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class" data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class" data-class="bg-happy-green sidebar-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-main">
            <!--SIDEBARS-->
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">GENEL</li>
                            <li>
                                <a href="advisor-homepage.php">
                                    <i class="metismenu-icon bi bi-house-fill"></i>
                                    Ana Sayfa
                                </a>
                            </li>
                            <li class="app-sidebar__heading">PROJE YÖNETİMİ</li>
                            <li>
                                <a href="advisor-students.php">
                                    <i class="metismenu-icon bi bi-people-fill"></i>
                                    Öğrenciler
                                </a>
                            </li>
                            <li>
                                <a href="advisor-projects.php">
                                    <i class="metismenu-icon bi bi-folder-fill"></i>
                                    Projeler
                                </a>
                            </li>
                            <li class="app-sidebar__heading">DANIŞMAN</li>
                            <li>
                                <a href="advisor-profile.php">
                                    <i class="metismenu-icon bi bi-person-fill">
                                    </i>Profilim
                                </a>
                            </li>
                            <li class="app-sidebar__heading">HESAP</li>
                            <li>
                                <a href="advisor-password.php">
                                    <i class="metismenu-icon bi bi-person-lines-fill">
                                    </i>Şifre Değiştir
                                </a>
                                <a href="login.php">
                                    <i class="metismenu-icon bi bi-door-open-fill">
                                    </i>Çıkış Yap
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <!--PAGE CONTENT-->
                    <div class="row">
                        <!--FIRST COLUMN-->
                        <div class="col-md-4">
                            <!--Project Details-->
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="col-md-12 main-card mb-3 card widget-content">
                                        <div class="widget-content-wrapper">
                                            <div class="col-md-12">
                                                <div class="widget-content-wrapper">
                                                    <h5 class="card-title">PROJE</h5>
                                                </div>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Proje Adı</h6>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <h6 class="text-dark"><?php echo $project['headline'] ?></h6>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Proje Alım Tarihi</h6>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <h6 class="text-dark"><?php echo $project['instertionDate'] ?></h6>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Proje Danışmanı</h6>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <h6 class="text-dark">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Proje Durumu</h6>
                                                    </div>
                                                    <div class="widget-content-right">

                                                        <?php
                                                        /*status	name	hexColorCode
                                                        0	TEST      	FFFFFF
                                                        1	Gönderildi	000000
                                                        2	Görüldü   	000000
                                                        3	İndirildi 	000000
                                                        4	Kabul     	000000
                                                        5	Red       	000000
                                                        6	Revize    	000000
                                                        7	Tamamlandı	000000  */
                                                        if ($project['status'] == 1) {
                                                            echo '<h6 class="text-dark">Proje Gönderildi</h6>';
                                                        } else if ($project['status'] == 2) {
                                                            echo '<h6 class="text-dark">Proje Görüldü</h6>';
                                                        } else if ($project['status'] == 3) {
                                                            echo '<h6 class="text-dark">Proje İndirildi</h6>';
                                                        } else if ($project['status'] == 4) {
                                                            echo '<h6 class="text-dark">Proje Kabul Edildi</h6>';
                                                        } else if ($project['status'] == 5) {
                                                            echo '<h6 class="text-dark">Proje Red Edildi</h6>';
                                                        } else if ($project['status'] == 6) {
                                                            echo '<h6 class="text-dark">Proje Revize Edildi</h6>';
                                                        } else if ($project['status'] == 7) {
                                                            echo '<h6 class="text-dark">Proje Tamamlandı</h6>';
                                                        } else if ($project['status'] == 0) {
                                                            echo '<h6 class="text-dark">Proje Test Edildi</h6>';
                                                        }

                                                        ?>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Anahtar Kelimeler</h6>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <h6 class="text-dark"><?php echo $project['keyword'] ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Accept and Decline-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12 mb-3 main-card card widget-content">
                                        <div class="col-md-12">
                                            <div class="widget-content-wrapper">
                                                <h5 class="card-title">Onay ve Ret</h5>
                                            </div>
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <h6>Gönderim Türü</h6>
                                                </div>
                                                <div class="widget-content-right">
                                                    <h6 class="text-dark">Tez</h6>
                                                </div>
                                            </div>
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <h6>Gönderim Linki</h6>
                                                </div>
                                                <div class="widget-content-right">
                                                    <h6 class="text-dark"><a href="" style="text-decoration: none; color: black;">
                                                            Gönderilen Tezin İsmi
                                                        </a></h6>
                                                </div>
                                            </div>
                                            <div class="position-relative form-group"><label for="exampleText" class="">Gönderimi reddetmeden önce,
                                                    reddedilme sebebini yazınız.
                                                    (Onaylanan gönderimler için boş bırakabilirsiniz.)
                                                </label><textarea name="text" id="exampleText" class="form-control"></textarea></div>
                                            <div class="row widget-content-wrapper">
                                                <div class="widget-content-left">
                                                    <button class="mt-1 ml-5 btn btn-success">Onayla</button>
                                                </div>
                                                <div class="widget-content-right">
                                                    <button class="mt-1 mr-5 btn btn-danger">Reddet</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--SECOND COLUMN-->
                        <div class="col-md-8">
                            <!--Project Subject and Materials-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12 mb-3 main-card card">
                                        <div class="card-header">
                                            <ul class="nav nav-justified">
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link active show">Projenin Amacı</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Projenin Önemi</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Projenin Kapsamı</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Projenin Materyalleri</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-4" class="nav-link">Projenin Yöntemleri</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-5" class="nav-link">Araştırma Olanakları</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active show" id="tab-eg7-0" role="tabpanel">
                                                    <p><?php echo $project['matter'] ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
                                                    <p><?php echo $project['[content]'] ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
                                                    <p><?php echo $project['purpose'] ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-eg7-3" role="tabpanel">
                                                    <p><?php echo $project['materiel'] ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-eg7-4" role="tabpanel">
                                                    <p><?php echo $project['method'] ?></p>
                                                </div>
                                                <div class="tab-pane" id="tab-eg7-5" role="tabpanel">
                                                    <p><?php echo $project['possibility'] ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Sent Files-->
                            <div class="row">

                                <div class="col-xl-6">
                                    <div class="col-md-12 main-card mb-3 card widget-content">
                                        <div class="col-md-12">
                                            <h5 class="card-title">Onaylanan Belgeler</h5>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="col-md-12 main-card mb-3 card widget-content">
                                        <div class="col-md-12">
                                            <h5 class="card-title">Reddedilen Belgeler</h5>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Belge 1:</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Plaguarism??? Table-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-12 main-card mb-3 card widget-content">
                                        <div class="col-md-12">
                                            <h5 class="card-title">BENZER PROJELER</h5>
                                            <h7>Proje adına tıklayarak projeyi inceleyebilirsiniz.</h7>
                                            <table class="mb-0 mt-3 table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Proje Numarası</th>
                                                        <th>Proje Başlığı</th>
                                                        <th>İntihal Oranı</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $curl = curl_init();

                                                    curl_setopt_array($curl, array(
                                                        CURLOPT_URL => 'http://172.105.73.62:5000/plagiarismRate',
                                                        CURLOPT_RETURNTRANSFER => true,
                                                        CURLOPT_ENCODING => '',
                                                        CURLOPT_MAXREDIRS => 10,
                                                        CURLOPT_TIMEOUT => 0,
                                                        CURLOPT_FOLLOWLOCATION => true,
                                                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                        CURLOPT_CUSTOMREQUEST => 'POST',
                                                        CURLOPT_POSTFIELDS => array('mainProjeid' => trim($project["number"])),
                                                    ));

                                                    $response = curl_exec($curl);
                                                    curl_close($curl);
                                                    $plagarisms = json_decode($response, true);

                                                    foreach ($plagarisms as $key => $value) {
                                                        foreach ($value as $key2 => $value2) {
                                                            if ($value2 > 0) {
                                                                $curl = curl_init();

                                                                curl_setopt_array($curl, array(
                                                                    CURLOPT_URL => 'http://172.105.73.62:5000/projectQuery',
                                                                    CURLOPT_RETURNTRANSFER => true,
                                                                    CURLOPT_ENCODING => '',
                                                                    CURLOPT_MAXREDIRS => 10,
                                                                    CURLOPT_TIMEOUT => 0,
                                                                    CURLOPT_FOLLOWLOCATION => true,
                                                                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                                                    CURLOPT_CUSTOMREQUEST => 'POST',
                                                                    CURLOPT_POSTFIELDS => array('id' => $key2),
                                                                ));

                                                                $response = curl_exec($curl);
                                                                curl_close($curl);
                                                                $project = json_decode($response, true);
                                                                echo '<tr>
                                                        <th scope="row">1</th>
                                                        <td><a href="advisor-this-project.php?id=' . $key2 . '"style="text-decoration: none; color: black;">' . $key2 . '</a></td>
                                                        <td><a href="advisor-this-project.php?id=' . $key2 . '"style="text-decoration: none; color: black;">' . $project['headline'] . '</a></td>
                                                        <td>%' . $value2 . '</td>
                                                        </tr>';
                                                            }
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!--FOOTER-->
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <h6>Bizimle <b>projetakipkou@gmail.com</b> adresi üzerinden iletişime
                                            geçebilirsiniz.
                                        </h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
