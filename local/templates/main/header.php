<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta name="author" content="Reporter">
    <link rel="icon" href="<?= SITE_TEMPLATE_PATH ?>/assets/images/favicon.ico" type="image/x-icon">
    <title>
        <?php $APPLICATION->ShowTitle(); ?>
    </title>

    <?php
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/plugins/bootstrap/bootstrap.min.css");
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/assets/scss/style.css");
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/jquery/jquery.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/plugins/bootstrap/bootstrap.min.js');
        Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/js/script.js');
        Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.googleapis.com'>");
        Asset::getInstance()->addString("<link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>");
        Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css2?family=Sofia+Sans+Semi+Condensed&display=swap' rel='stylesheet'>");
    ?>

    <?php
        $APPLICATION->ShowCSS();
        $APPLICATION->ShowHeadScripts();
        $APPLICATION->ShowHead();
    ?>
</head>

<body>
    <div id="panel">
        <?php $APPLICATION->ShowPanel(); ?>
    </div>

    <header class="navigation">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <a class="navbar-brand order-1 py-0" href="/">
                    <img class="img-fluid" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/logo.png" alt="Reporter Hugo">
                </a>
                <div class="navbar-actions order-3 ml-0 ml-md-4">
                    <button aria-label="navbar toggler" class="navbar-toggler border-0" type="button" data-toggle="collapse"
                            data-target="#navigation"> <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <form action="#!" class="search order-lg-3 order-md-2 order-3 ml-auto">
                    <input id="search-query" name="s" type="search" placeholder="Search..." autocomplete="off">
                </form>
                <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
                    <ul class="navbar-nav mx-auto mt-3 mt-lg-0">
                        <li class="nav-item"> <a class="nav-link" href="about.html">Обо мне</a>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" role="button"
                                                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Статьи
                            </a>
                            <div class="dropdown-menu"> <a class="dropdown-item" href="travel.html">Раздел 1</a>
                                <a class="dropdown-item" href="travel.html">Раздел 2</a>
                                <a class="dropdown-item" href="travel.html">Раздел 3</a>
                            </div>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="contact.html">Контакты</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
	
						