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
                <div class="collapse navbar-collapse text-center order-lg-2 order-4" id="navigation">
                    <?php $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_menu",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "N",
                            "ROOT_MENU_TYPE" => "bottom",
                            "USE_EXT" => "N"
                        )
                    );?>
                </div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:search.form",
                    "",
                    Array(
                        "PAGE" => "/articles/search/",
                    ),
                    false
                );?>
            </nav>
        </div>
    </header>
	
						