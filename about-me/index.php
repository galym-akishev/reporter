<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>

<?php
$APPLICATION->SetTitle("Reporter - информация о авторе");
$APPLICATION->SetPageProperty('TITLE', "Reporter - информация о авторе");
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetPageProperty("keywords", "Reporter, журналист, услуги, статьи, новости");
$APPLICATION->SetPageProperty("description", "Reporter - информация о авторе");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "about-me",
    Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "N",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "N",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "N",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "DISPLAY_DATE" => "N",
        "DISPLAY_NAME" => "N",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "pavel-listev",
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "FIELD_CODE" => array("NAME","PREVIEW_TEXT","DETAIL_TEXT","DETAIL_PICTURE",""),
        "IBLOCK_ID" => "2",
        "IBLOCK_TYPE" => "author_project",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array("",""),
        "SET_BROWSER_TITLE" => "Y",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "Y",
        "SET_META_KEYWORDS" => "Y",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
