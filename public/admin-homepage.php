<?php
session_start();
if($_SESSION['Permisson'] != 'admin'){
    echo'<meta http-equiv="refresh" content="0;URL=404.php">';
}
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'http://172.105.73.62:5000/adminStudent ',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array('no' => $_SESSION['Id']),
));

$response = curl_exec($curl);
curl_close($curl);
$project = json_decode($response, true);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
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
        <!--HEADER-->
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                            data-class="closed-sidebar">
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
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Yönetici Adı
                                    </div>
                                    <div class="widget-subheading text-center">
                                        Ünvan
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
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-header">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-onstyle="success">
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
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-sidebar">
                                                    <div class="switch-animate switch-on">
                                                        <input type="checkbox" checked data-toggle="toggle"
                                                            data-onstyle="success">
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
                                                <div class="switch has-switch switch-container-class"
                                                    data-class="fixed-footer">
                                                    <div class="switch-animate switch-off">
                                                        <input type="checkbox" data-toggle="toggle"
                                                            data-onstyle="success">
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
                            <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-header-cs-class"
                                data-class="">
                                Orijinali Yükle
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Renk Şeması Seç
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-header-cs-class"
                                            data-class="bg-primary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-header-cs-class"
                                            data-class="bg-secondary header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-header-cs-class"
                                            data-class="bg-success header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-header-cs-class"
                                            data-class="bg-info header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-header-cs-class"
                                            data-class="bg-warning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-header-cs-class"
                                            data-class="bg-danger header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-header-cs-class"
                                            data-class="bg-light header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-header-cs-class"
                                            data-class="bg-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-header-cs-class"
                                            data-class="bg-focus header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-header-cs-class"
                                            data-class="bg-alternate header-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-header-cs-class"
                                            data-class="bg-vicious-stance header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-header-cs-class"
                                            data-class="bg-midnight-bloom header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-header-cs-class"
                                            data-class="bg-night-sky header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-header-cs-class"
                                            data-class="bg-slick-carbon header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-header-cs-class"
                                            data-class="bg-asteroid header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-header-cs-class"
                                            data-class="bg-royal header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-header-cs-class"
                                            data-class="bg-warm-flame header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-header-cs-class"
                                            data-class="bg-night-fade header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-header-cs-class"
                                            data-class="bg-sunny-morning header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-header-cs-class"
                                            data-class="bg-tempting-azure header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-header-cs-class"
                                            data-class="bg-amy-crisp header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-header-cs-class"
                                            data-class="bg-heavy-rain header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-header-cs-class"
                                            data-class="bg-mean-fruit header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-header-cs-class"
                                            data-class="bg-malibu-beach header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-header-cs-class"
                                            data-class="bg-deep-blue header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-header-cs-class"
                                            data-class="bg-ripe-malin header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-header-cs-class"
                                            data-class="bg-arielle-smile header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-header-cs-class"
                                            data-class="bg-plum-plate header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-header-cs-class"
                                            data-class="bg-happy-fisher header-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-header-cs-class"
                                            data-class="bg-happy-itmeo header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-header-cs-class"
                                            data-class="bg-mixed-hopes header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-header-cs-class"
                                            data-class="bg-strong-bliss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-header-cs-class"
                                            data-class="bg-grow-early header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-header-cs-class"
                                            data-class="bg-love-kiss header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-header-cs-class"
                                            data-class="bg-premium-dark header-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-header-cs-class"
                                            data-class="bg-happy-green header-text-light">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <h3 class="themeoptions-heading">
                            <div>Yan Sekme Seçenekleri</div>
                            <button type="button"
                                class="btn-pill btn-shadow btn-wide ml-auto btn btn-focus btn-sm switch-sidebar-cs-class"
                                data-class="">
                                Orijinali Yükle
                            </button>
                        </h3>
                        <div class="p-3">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <h5 class="pb-2">Renk Şeması Seç
                                    </h5>
                                    <div class="theme-settings-swatches">
                                        <div class="swatch-holder bg-primary switch-sidebar-cs-class"
                                            data-class="bg-primary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-secondary switch-sidebar-cs-class"
                                            data-class="bg-secondary sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-success switch-sidebar-cs-class"
                                            data-class="bg-success sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-info switch-sidebar-cs-class"
                                            data-class="bg-info sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-warning switch-sidebar-cs-class"
                                            data-class="bg-warning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-danger switch-sidebar-cs-class"
                                            data-class="bg-danger sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-light switch-sidebar-cs-class"
                                            data-class="bg-light sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-dark switch-sidebar-cs-class"
                                            data-class="bg-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-focus switch-sidebar-cs-class"
                                            data-class="bg-focus sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-alternate switch-sidebar-cs-class"
                                            data-class="bg-alternate sidebar-text-light">
                                        </div>
                                        <div class="divider">
                                        </div>
                                        <div class="swatch-holder bg-vicious-stance switch-sidebar-cs-class"
                                            data-class="bg-vicious-stance sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-midnight-bloom switch-sidebar-cs-class"
                                            data-class="bg-midnight-bloom sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-night-sky switch-sidebar-cs-class"
                                            data-class="bg-night-sky sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-slick-carbon switch-sidebar-cs-class"
                                            data-class="bg-slick-carbon sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-asteroid switch-sidebar-cs-class"
                                            data-class="bg-asteroid sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-royal switch-sidebar-cs-class"
                                            data-class="bg-royal sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-warm-flame switch-sidebar-cs-class"
                                            data-class="bg-warm-flame sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-night-fade switch-sidebar-cs-class"
                                            data-class="bg-night-fade sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-sunny-morning switch-sidebar-cs-class"
                                            data-class="bg-sunny-morning sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-tempting-azure switch-sidebar-cs-class"
                                            data-class="bg-tempting-azure sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-amy-crisp switch-sidebar-cs-class"
                                            data-class="bg-amy-crisp sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-heavy-rain switch-sidebar-cs-class"
                                            data-class="bg-heavy-rain sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-mean-fruit switch-sidebar-cs-class"
                                            data-class="bg-mean-fruit sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-malibu-beach switch-sidebar-cs-class"
                                            data-class="bg-malibu-beach sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-deep-blue switch-sidebar-cs-class"
                                            data-class="bg-deep-blue sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-ripe-malin switch-sidebar-cs-class"
                                            data-class="bg-ripe-malin sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-arielle-smile switch-sidebar-cs-class"
                                            data-class="bg-arielle-smile sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-plum-plate switch-sidebar-cs-class"
                                            data-class="bg-plum-plate sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-fisher switch-sidebar-cs-class"
                                            data-class="bg-happy-fisher sidebar-text-dark">
                                        </div>
                                        <div class="swatch-holder bg-happy-itmeo switch-sidebar-cs-class"
                                            data-class="bg-happy-itmeo sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-mixed-hopes switch-sidebar-cs-class"
                                            data-class="bg-mixed-hopes sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-strong-bliss switch-sidebar-cs-class"
                                            data-class="bg-strong-bliss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-grow-early switch-sidebar-cs-class"
                                            data-class="bg-grow-early sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-love-kiss switch-sidebar-cs-class"
                                            data-class="bg-love-kiss sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-premium-dark switch-sidebar-cs-class"
                                            data-class="bg-premium-dark sidebar-text-light">
                                        </div>
                                        <div class="swatch-holder bg-happy-green switch-sidebar-cs-class"
                                            data-class="bg-happy-green sidebar-text-light">
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
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                                data-class="closed-sidebar">
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
                        <button type="button"
                            class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Genel</li>
                            <li>
                                <a href="admin-homepage.php" class="mm-active">
                                    <i class="metismenu-icon bi bi-house-fill"></i>
                                    Ana Sayfa
                                </a>
                            </li>

                            <li class="app-sidebar__heading">KULLANICI YÖNETİMİ</li>
                            <li>
                                <a href="admin-advisors.php">
                                    <i class="metismenu-icon bi bi-people-fill"></i>
                                    Danışmanlar
                                </a>
                            </li>
                            <li>
                                <a href="admin-students.php">
                                    <i class="metismenu-icon bi bi-people-fill"></i>
                                    Öğrenciler
                                </a>
                            </li>

                            <li class="app-sidebar__heading">PROJE YÖNETİMİ</li>
                            <li>
                                <a href="admin-projects.php">
                                    <i class="metismenu-icon bi bi-folder-fill">
                                    </i>Projeler
                                </a>
                            </li>

                            <li class="app-sidebar__heading">SİSTEM</li>
                            <li>
                                <a href="admin-management.php">
                                    <i class="metismenu-icon bi bi-chevron-double-up">
                                    </i>Yönetim
                                </a>
                            </li>

                            <li class="app-sidebar__heading">YÖNETİCİ</li>
                            <li>
                                <a href="admin-profile.php">
                                    <i class="metismenu-icon bi bi-person-fill">
                                    </i>Profil
                                </a>
                            </li>

                            <li class="app-sidebar__heading">Hesap</li>
                            <li>
                                <a href="admin-password.php">
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
                        <!--Last Updates-->
                        <div class="col-md-12 col-lg-4">
                            <div class="text-center">
                                <h4><b>Son Güncellemeler</b></h4>
                            </div>
                            <div class="divider">
                            </div>
                            <a href="admin-this-project.php" style="text-decoration: none; color: black;"
                                class="main-card mb-3 card">
                                <div class="card card-body">
                                    <h5 class="card-title">ROBOTİK SİSTEMLER</h5>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Tarih:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Öğrenci:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Sirac Arapoğlu</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Danışman:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Etkinlik:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Rapor onaylandı.</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="admin-this-project.php" style="text-decoration: none; color: black;" class="main-card mb-3 card">
                                <div class="card card-body">
                                    <h5 class="card-title">ROBOTİK SİSTEMLER</h5>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Tarih:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Öğrenci:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Sirac Arapoğlu</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Danışman:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Etkinlik:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Rapor onaylandı.</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="admin-this-project.php" style="text-decoration: none; color: black;" class="main-card mb-3 card">
                                <div class="card card-body">
                                    <h5 class="card-title">ROBOTİK SİSTEMLER</h5>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Tarih:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Öğrenci:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Sirac Arapoğlu</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Danışman:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Etkinlik:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Rapor onaylandı.</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="admin-this-project.php" style="text-decoration: none; color: black;" class="main-card mb-3 card">
                                <div class="card card-body">
                                    <h5 class="card-title">ROBOTİK SİSTEMLER</h5>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Tarih:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Öğrenci:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Sirac Arapoğlu</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Danışman:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Etkinlik:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Rapor onaylandı.</h6>
                                    </div>
                                </div>
                            </a>
                            <a href="admin-this-project.php" style="text-decoration: none; color: black;" class="main-card mb-3 card">
                                <div class="card card-body">
                                    <h5 class="card-title">ROBOTİK SİSTEMLER</h5>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Tarih:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Öğrenci:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Sirac Arapoğlu</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Danışman:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                    </div>
                                    <div class="row col-md-12">
                                        <h6 class="card-subtitle"><b>Etkinlik:&nbsp;</b></h6>
                                        <h6 class="card-subtitle">Rapor onaylandı.</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!--Announcements-->
                        <div class="col-md-12 col-lg-8">
                            <div class="text-center">
                                <h4><b>Duyurular</b></h4>
                            </div>
                            <div class="divider">
                            </div>
                            <div class="mb-3 card card-body">
                                <h5 class="card-title">Lorem İpsum </h5>
                                <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget enim in
                                    tortor ultrices hendrerit sed sed ex.
                                    Integer et vulputate velit, in elementum nisi. Etiam vitae neque quis tortor congue
                                    lacinia. Fusce posuere mattis
                                    ligula. Phasellus dignissim metus tortor, sodales pretium nunc rhoncus id. Vivamus
                                    mauris massa, porta quis molestie at,
                                    pharetra ut ex. Aliquam ut velit non elit volutpat tristique. Vivamus nec sodales
                                    ipsum. Aliquam erat volutpat. Nulla
                                    malesuada nisl erat, a ullamcorper massa elementum nec. Donec bibendum arcu lacus,
                                    eu rutrum risus pulvinar sed.
                                    Pellentesque habitant morbi tristique senectus et netus et.
                                </p>
                            </div>
                            <div class="mb-3 card card-body">
                                <h5 class="card-title">Lorem İpsum <div class="mb-2 mr-2 badge badge-pill badge-danger">
                                        ÖNEMLİ
                                    </div>
                                </h5>
                                <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                <p>Arkadaşlar, teslim tarihlerinizi erteleme gibi bir durum söz konusu olmayacaktır.
                                    Proje teslimi için zaten yeterince süre tanıdığımızı düşünüyoruz. Teslim tarihine
                                    kadar projelerinizi teslim
                                    ediniz.
                                    Başarılar.
                                </p>
                            </div>
                            <div class="mb-3 card card-body">
                                <h5 class="card-title">Lorem İpsum</h5>
                                <h6 class="card-subtitle">28.02.2022 18:44</h6>
                                <h6 class="card-subtitle">Dr. Öğr. Üyesi Önder YAKUT</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce et erat accumsan,
                                    auctor diam quis, luctus sem. Maecenas
                                    sit amet urna libero. Aliquam vitae posuere arcu. Proin bibendum risus in metus
                                    dictum ultrices. Sed feugiat elit
                                    feugiat arcu hendrerit elementum non et felis. Nulla imperdiet interdum turpis, at
                                    accumsan mi auctor id. Pellentesque
                                    habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                                    Class aptent taciti sociosqu ad litora
                                    torquent per.
                                </p>
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
