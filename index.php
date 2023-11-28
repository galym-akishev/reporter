<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>

<?php
$APPLICATION->SetTitle('Reporter - авторские статьи');
$APPLICATION->SetPageProperty('TITLE', 'Reporter - блог авторских статей');
$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
$APPLICATION->SetPageProperty("keywords", "Reporter, журналист, услуги, статьи, новости");
?>

<?php $APPLICATION->IncludeComponent(
    "bitrix:news",
    "author_articles",
    Array(
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "Y",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "article_title",
        "CACHE_FILTER" => "N",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CATEGORY_CODE" => "CATEGORY",
        "CATEGORY_IBLOCK" => array("1"),
        "CATEGORY_ITEMS_COUNT" => "3",
        "CATEGORY_THEME_1" => "list",
        "CHECK_DATES" => "Y",
        "DETAIL_ACTIVE_DATE_FORMAT" => "j M Y",
        "DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
        "DETAIL_DISPLAY_TOP_PAGER" => "N",
        "DETAIL_FIELD_CODE" => array("DATE_ACTIVE_FROM", ""),
        "DETAIL_PAGER_SHOW_ALL" => "N",
        "DETAIL_PAGER_TEMPLATE" => "",
        "DETAIL_PAGER_TITLE" => "Страница",
        "DETAIL_PROPERTY_CODE" => array("article_title", "read_time", "recommend_front_page", "recommend_sidebar", ""),
        "DETAIL_SET_CANONICAL_URL" => "N",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "FILTER_FIELD_CODE" => array("TAGS", ""),
        "FILTER_NAME" => "",
        "FILTER_PROPERTY_CODE" => array("", ""),
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => getIblockIdByCode("article_author"),
        "IBLOCK_TYPE" => "articles",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
        "LIST_FIELD_CODE" => array("PREVIEW_TEXT", "PREVIEW_PICTURE", ""),
        "LIST_PROPERTY_CODE" => array("article_title", "read_time", ""),
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "article_title",
        "META_KEYWORDS" => "article_title",
        "NEWS_COUNT" => "6",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Новости",
        "PREVIEW_TRUNCATE_LEN" => "",
        "SEF_FOLDER" => "/articles/",
        "SEF_MODE" => "Y",
        "SEF_URL_TEMPLATES" => Array(
            "detail"=>"#SECTION_CODE#/#ELEMENT_CODE#/",
            "news"=>"",
            "section"=>"#SECTION_CODE#/",
        ),
        "SET_LAST_MODIFIED" => "N",
        "SET_STATUS_404" => "Y",
        "SET_TITLE" => "Y",
        "SHOW_404" => "N",
        "SORT_BY1" => "SORT",
        "SORT_BY2" => "ACTIVE_FROM",
        "SORT_ORDER1" => "ASC",
        "SORT_ORDER2" => "ASC",
        "STRICT_SECTION_CHECK" => "N",
        "USE_CATEGORIES" => "Y",
        "USE_FILTER" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_RATING" => "N",
        "USE_REVIEW" => "N",
        "USE_RSS" => "N",
        "USE_SEARCH" => "Y",
        "USE_SHARE" => "N"
    )
);?>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>
