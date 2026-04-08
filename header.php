<?php
require_once __DIR__ . '/config_lang.php';

$base_path = strpos($_SERVER['HTTP_HOST'], 'localhost') !== false ? '/vidatur/public_html/' : '/';

function asset($path) {
    global $base_path;
    return $base_path . ltrim($path, '/');
}
?>
<!DOCTYPE html>
<html class="no-js" lang="<?php echo $lang === 'en' ? 'en' : 'es'; ?>">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>Vidatur</title>

<!-- CSS Files -->
<link rel="stylesheet" href="<?php echo asset('assets/stylesheets/style.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('assets/css/menu.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('assets/css/estilos.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('style.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('assets/stylesheets/skins/blue.css'); ?>">
<link rel="stylesheet" href="<?php echo asset('assets/stylesheets/responsive.css'); ?>">
<link rel="shortcut icon" href="<?php echo asset('assets/images/icono.ico'); ?>" type="image/x-icon" />

<style>
    .grid-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 5px;
        width: 100%;
    }
    .grid-item {
        text-align: center;
        padding: 10px;
    }
    @media (max-width: 768px) {
        .grid-container {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 480px) {
        .grid-container {
            grid-template-columns: 1fr;
        }
    }
    .boton {
        text-shadow: 0px 1px rgba(0, 0, 0, 0.2);
        text-align: center;
        text-decoration: none;
        font-family: 'Helvetica Neue', Helvetica, sans-serif;
        display: inline-block;
        color: #FFF;
        background: #7F8C8D;
        padding: 7px 20px;
        white-space: nowrap;
        border-radius: 100px;
        margin: 10px 5px;
        transition: all 0.2s ease-in-out;
    }
    .verde {
        background: #ffffff;
        box-shadow: 0px 5px 0px 0px #24523c;
    }
    .responsiveslide {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }
    .franja {
        background: linear-gradient(90deg, #1e7a4c, #eecb1e);
        padding: 20px 60px;
        border-radius: 5px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.2);
    }
    h1 {
        margin: 0;
        color: #fff;
        font-weight: 900;
        font-size: clamp(2rem, 9vw, 5.5rem);
        line-height: 1;
        letter-spacing: -1px;
        text-transform: uppercase;
        text-align: center;
    }
    .lang-btn {
        background: #357d5c;
        color: white;
        padding: 8px 15px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        transition: all 0.3s ease;
        font-family: 'Helvetica Neue', Helvetica, sans-serif;
        margin-left: 15px;
    }
    .lang-btn:hover {
        background: #1e5a3e;
        transform: scale(1.02);
        color: white;
    }
    .carousel-container {
        position: relative;
        width: 80%;
        overflow: hidden;
        margin: 40px auto;
        justify-content: center;
    }
    .carousel-track {
        display: flex;
        gap: 0px;
        transition: transform 0.5s ease;
        justify-content: flex-start;
    }
    .carousel-item {
        flex: 0 0 25%;
        min-width: 25%;
        box-sizing: border-box;
        padding: 2px;
        text-align: center;
    }
    .carousel-item img {
        max-width: 100%;
        height: auto;
    }
    .social {
        width: 48px;
        position: fixed;
        top: 50px;
        right: 0;
        z-index: 100;
        top: 50%;
        height: 205px;
        margin-top: -100px;
    }
    .card-option {
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .card-option:hover {
        transform: translateY(-5px);
    }
    .logo-col {
        width: 22%;
        height: auto;
        margin-bottom: 10px;
    }
    .bg-paquetes-nacionales {
        background: linear-gradient(135deg, #1e7a4c, #eecb1e);
    }
    .bg-paquetes-internacionales {
        background: linear-gradient(135deg, #0077be, #00a4e4);
    }
    .bg-representaciones {
        background: linear-gradient(135deg, #2c3e50, #3498db);
    }
    .bandera-icon {
        width: 48px;
        height: auto;
    }
</style>
</head>
<body>

<div class="row">
    <div class="headerlogo four columns">
        <br/>
        <div class="logo">
            <a href="<?php echo asset('index.php'); ?>">
                <img src="<?php echo asset('assets/images/logo.png'); ?>" width="250px" alt="Vidatur">
            </a>
        </div>
    </div>
    <div class="headermenu eight columns noleftmarg">
        <nav id="nav-wrap">
            <ul id="main-menu" class="nav-bar sf-menu">
                <li><a href="<?php echo asset('contactanos/nosotros_vidatur.php'); ?>"><strong><?php echo t('nosotros_menu'); ?></strong></a></li>
                <li><a href="<?php echo asset('nacional.php'); ?>"><strong><?php echo t('nacional'); ?></strong></a></li>
                <li><a href="<?php echo asset('internacional.html'); ?>"><strong><?php echo t('internacional'); ?></strong></a></li>
                <li><a href="<?php echo asset('bloqueos.php'); ?>"><strong><?php echo t('bloqueos'); ?></strong></a></li>
                <li><a href="<?php echo asset('nosotros.html'); ?>"><strong><?php echo t('eventos'); ?></strong></a></li>
                <li><a href="<?php echo asset('videos.html'); ?>"><strong><?php echo t('videos'); ?></strong></a></li>
                <li><a href="<?php echo asset('lgbt.html'); ?>"><strong><?php echo t('lgbt'); ?></strong></a></li>
                <li><a href="<?php echo asset('viajesperuanos.php'); ?>"><strong><?php echo t('viajespe'); ?></strong></a></li>
            </ul>
        </nav>
        
        <?php if (basename($_SERVER['PHP_SELF']) === 'index.php'): ?>
        <div style="float: right; margin-top: 12px; display: flex; gap: 8px;">
            <?php if ($lang === 'en'): ?>
                <a href="?lang=es" class="lang-btn" style="display: flex; align-items: center; gap: 5px;">
                    <img src="<?php echo asset('assets/images/peru.png'); ?>" style="width: 20px; height: 15px;">
                    <span>Español</span>
                </a>
            <?php else: ?>
                <a href="?lang=en" class="lang-btn" style="display: flex; align-items: center; gap: 5px;">
                    <img src="<?php echo asset('assets/images/usa.png'); ?>" style="width: 20px; height: 15px;">
                    <span>English</span>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<div class="clear"></div>