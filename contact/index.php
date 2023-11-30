<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>

<?php
$APPLICATION->SetTitle("Reporter - контакты журналиста");
$APPLICATION->SetPageProperty('TITLE', "Reporter - контакты журналиста");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetPageProperty("keywords", "Reporter, контакты, журналист");
$APPLICATION->SetPageProperty("description", "Reporter - контакты журналиста");
?>

<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs mb-4"> <a href="/">Главная</a>
                        <span class="mx-1">/</span>  <a href="/contact">Контакты</a>
                    </div>
                </div>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:news.detail",
                    "contacts",
                    Array(
                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                        "ADD_ELEMENT_CHAIN" => "N",
                        "ADD_SECTIONS_CHAIN" => "Y",
                        "AJAX_MODE" => "N",
                        "AJAX_OPTION_ADDITIONAL" => "",
                        "AJAX_OPTION_HISTORY" => "N",
                        "AJAX_OPTION_JUMP" => "N",
                        "AJAX_OPTION_STYLE" => "N",
                        "BROWSER_TITLE" => "-",
                        "CACHE_GROUPS" => "Y",
                        "CACHE_TIME" => "36000000",
                        "CACHE_TYPE" => "A",
                        "CHECK_DATES" => "Y",
                        "DETAIL_URL" => "",
                        "DISPLAY_BOTTOM_PAGER" => "N",
                        "DISPLAY_DATE" => "N",
                        "DISPLAY_NAME" => "N",
                        "DISPLAY_PICTURE" => "N",
                        "DISPLAY_PREVIEW_TEXT" => "N",
                        "DISPLAY_TOP_PAGER" => "N",
                        "ELEMENT_CODE" => "kontakty",
                        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
                        "FIELD_CODE" => array("PREVIEW_TEXT", "DETAIL_TEXT", ""),
                        "IBLOCK_ID" => "5",
                        "IBLOCK_TYPE" => "policy",
                        "IBLOCK_URL" => "",
                        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                        "MESSAGE_404" => "",
                        "META_DESCRIPTION" => "-",
                        "META_KEYWORDS" => "-",
                        "PAGER_BASE_LINK_ENABLE" => "N",
                        "PAGER_SHOW_ALL" => "N",
                        "PAGER_TEMPLATE" => ".default",
                        "PAGER_TITLE" => "Страница",
                        "PROPERTY_CODE" => array("telephone", "email", ""),
                        "SET_BROWSER_TITLE" => "Y",
                        "SET_CANONICAL_URL" => "N",
                        "SET_LAST_MODIFIED" => "N",
                        "SET_META_DESCRIPTION" => "Y",
                        "SET_META_KEYWORDS" => "Y",
                        "SET_STATUS_404" => "Y",
                        "SET_TITLE" => "Y",
                        "SHOW_404" => "N",
                        "STRICT_SECTION_CHECK" => "N",
                        "USE_PERMISSIONS" => "N",
                        "USE_SHARE" => "N"
                    )
                );?>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:main.feedback",
                    "feedback-contacts",
                    Array(
                        "EMAIL_TO" => "galymakishevkz@gmail.com",
                        "EVENT_MESSAGE_ID" => array("7"),
                        "OK_TEXT" => "Спасибо, ваше сообщение принято.",
                        "REQUIRED_FIELDS" => array("NAME", "EMAIL", "MESSAGE"),
                        "USE_CAPTCHA" => "Y"
                    )
                );?>
            </div>
        </div>
    </section>
</main>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
