<?php
session_start();
if($_SESSION['Permisson'] != 'advisor'){
    echo'<meta http-equiv="refresh" content="0;URL=404.php">';
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
                                        Önder YAKUT
                                    </div>
                                    <div class="widget-subheading text-center">
                                        Dr. Öğr. Üyesi
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
                                                        <h6 class="text-dark">Görüntü ve Video İşleme</h6>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left">
                                                        <h6>Proje Alım Tarihi</h6>
                                                    </div>
                                                    <div class="widget-content-right">
                                                        <h6 class="text-dark">28.02.2022</h6>
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
                                                        <h6 class="text-dark">Tez Hazırlama</h6>
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
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="nav-link">Proje Konusu</a></li>
                                                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link active show">Proje
                                                        Yöntemleri</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body">
                                            <div class="tab-content">
                                                <div class="tab-pane" id="tab-eg7-0" role="tabpanel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ut
                                                        ipsum id nisl tristique ultricies. Maecenas eu
                                                        pulvinar libero. Donec pellentesque facilisis volutpat. Sed
                                                        ultrices
                                                        metus vitae lacus gravida aliquam. Integer
                                                        convallis in orci ut semper. Nam viverra scelerisque est. Nulla
                                                        a
                                                        libero et lectus luctus consequat. Vestibulum ante
                                                        ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                        curae; Proin eget efficitur lorem. Nam pretium viverra
                                                        mauris, ac facilisis augue elementum pharetra. Maecenas pharetra
                                                        lacus a erat rutrum porttitor.

                                                        Praesent luctus facilisis elit ac malesuada. In hac habitasse
                                                        platea
                                                        dictumst. Aenean aliquam, mauris ac placerat
                                                        sagittis, urna nunc convallis diam, at luctus elit dui semper
                                                        purus.
                                                        Mauris auctor mi quis sem consequat, mollis cursus
                                                        purus fermentum. Curabitur et mi nisi. Aliquam scelerisque risus
                                                        scelerisque est venenatis tempor. Aenean faucibus, leo
                                                        vitae sagittis porttitor, libero lectus euismod ex, quis
                                                        pulvinar
                                                        nisl neque a mi. Duis quis nisl tortor. Nullam id
                                                        euismod diam, quis fringilla neque. Quisque finibus malesuada
                                                        enim,
                                                        ac tempus nunc sagittis sed. Nulla imperdiet purus
                                                        in ante consectetur, et consectetur ligula egestas. Mauris
                                                        ultrices
                                                        lobortis pellentesque. Vivamus sed tempus leo.

                                                        Nunc tempor, dui sed dignissim fermentum, dui velit porttitor
                                                        felis,
                                                        in facilisis nunc lorem nec nisl. Fusce eu urna
                                                        ultrices, gravida nulla vitae, posuere lacus. Pellentesque
                                                        finibus
                                                        pharetra massa. Donec dapibus turpis eget ipsum
                                                        tincidunt, et aliquet dolor tincidunt. Fusce ac ullamcorper
                                                        elit,
                                                        nec vehicula neque. Quisque dapibus commodo libero, ut
                                                        sollicitudin risus. Nulla felis lectus, vulputate at egestas ut,
                                                        auctor ac nisi. Nullam dapibus lobortis eros, sit.</p>
                                                </div>
                                                <div class="tab-pane active show" id="tab-eg7-1" role="tabpanel">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam ut
                                                        nisl
                                                        est. Donec id tellus rutrum, aliquam nulla vitae,
                                                        eleifend odio. Donec id ipsum ut felis tempus viverra. Orci
                                                        varius
                                                        natoque penatibus et magnis dis parturient montes,
                                                        nascetur ridiculus mus. Fusce bibendum est fermentum ipsum
                                                        eleifend,
                                                        eu aliquam mauris mollis. Ut tempus tristique
                                                        congue. Nulla non lacus risus. In hac habitasse platea dictumst.
                                                        Ut
                                                        sollicitudin quam nec porta laoreet. Duis in ipsum
                                                        neque. Donec dictum risus a mollis sodales. Duis luctus euismod
                                                        erat, id hendrerit purus fermentum ornare. Phasellus
                                                        pulvinar quis felis id cursus. Nullam ut maximus mi.

                                                        Integer eget porttitor elit. Morbi tincidunt sagittis nunc, vel
                                                        pharetra nunc interdum ac. Praesent mattis elit id
                                                        mauris eleifend, et fermentum turpis pulvinar. Ut consectetur
                                                        tempus
                                                        eleifend. Quisque risus leo, laoreet ut viverra
                                                        efficitur, efficitur vel libero. Sed rutrum, eros ac congue
                                                        vestibulum, mi purus semper lacus, a ultricies ipsum diam eu
                                                        dolor. Maecenas faucibus, nisi quis porttitor rutrum, risus erat
                                                        scelerisque velit, sit amet pretium ante sem in quam.
                                                        Ut sed ullamcorper eros, ut egestas lectus. Morbi tempor, neque
                                                        et
                                                        tempus mollis, mauris metus tempus augue, ac rutrum
                                                        lacus diam in risus. Ut tempus accumsan convallis. Duis
                                                        sollicitudin
                                                        erat eu mollis lacinia.

                                                        Donec condimentum ac velit id hendrerit. Nam feugiat, lorem id
                                                        faucibus commodo, dolor lorem egestas arcu, non feugiat
                                                        tellus purus vitae libero. Etiam suscipit, nisi at venenatis
                                                        pulvinar, felis ex vestibulum neque, sed feugiat ex metus
                                                        ac lacus. Quisque blandit ligula enim, et maximus metus
                                                        pellentesque
                                                        id. Ut consectetur vestibulum velit ut maximus.
                                                        Vestibulum nulla magna, facilisis ac vehicula at, pretium quis
                                                        erat.
                                                        Donec porttitor venenatis mi et finibus. Donec
                                                        maximus eleifend est, a condimentum velit rutrum ut. Donec
                                                        pulvinar
                                                        nibh in nisi efficitur tempus. Curabitur vel rutrum
                                                        metus. Nunc neque elit, tempor non urna et, maximus porttitor
                                                        mauris. Phasellus dictum elit tempor leo dictum, ac
                                                        convallis nunc laoreet. Suspendisse vehicula nisl nec dolor
                                                        efficitur viverra. Nunc vehicula, enim eget faucibus
                                                        facilisis, urna nisl ultricies felis, in maximus ex risus nec
                                                        justo.
                                                        Sed vehicula justo a mauris malesuada pharetra.
                                                        Suspendisse fermentum porta ipsum in lobortis. Maecenas vitae
                                                        tristique arcu.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Sent Files-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12 main-card mb-3 card widget-content">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Onaylanan Belgeler</h5>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Birinci Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>İkinci Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Üçüncü Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>"Tez Gönderimi Yok"</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>"Tez Gönderimi Yok"</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>"Tez Gönderimi Yok"</h6>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12 main-card mb-3  card widget-content">
                                        <div class="col-md-6">
                                            <h5 class="card-title">Reddedilen Belgeler</h5>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Kötü Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Kötü Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Kötü Rapor</h6>
                                            </a>
                                            <a href="" style="text-decoration: none; color: black;">
                                                <h6>Kötü Rapor</h6>
                                            </a>
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
