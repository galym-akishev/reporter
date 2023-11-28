<?php

/** @var array $arParams */

/*
 * Get all section names for all articles
*/
$dbList = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_TYPE" => $arParams['IBLOCK_TYPE']),
    true);

while ($result = $dbList->GetNext()) {
    $arResult['ALL_ARTICLE_SECTIONS'][] = [
        'NAME' => $result['NAME'],
        'LINK' => '/' . $arParams['IBLOCK_TYPE'] . '/' . $result['CODE'] . '/'
    ];
}

/*
 * Get all section names for each article
 */
foreach ($arResult["ITEMS"] as $key => $arItem) {
    $idArticle = $arItem["ID"];
    $dbList = CIBlockElement::GetElementGroups(
        $idArticle,
        false,
        array("NAME", "CODE")
    );
    while ($result = $dbList->GetNext()) {
        $arResult["ITEMS"][$key]["ARTICLE_SECTIONS"][] = [
            'NAME' => $result['NAME'],
            'LINK' => '/' . $arParams['IBLOCK_TYPE'] . '/' . $result['CODE'] . '/'
        ];
    }
}

/*
 * Get the latest recommended article for sidebar
 */
$recommendForSidebar = array_filter($arResult["ITEMS"], function ($arItem) {
    if ($arItem["PROPERTIES"]["recommend_sidebar"]["VALUE"] == 1) {
        return $arItem;
    }
});

if (!empty($recommendForSidebar)) {
    $arResult["RECOMMEND_SIDEBAR"] = end($recommendForSidebar);
}

/*
 * Get the latest recommended article for front page (latest article)
 */
$recommendForFrontPage = array_filter($arResult["ITEMS"], function ($arItem) {
    if ($arItem["PROPERTIES"]["recommend_front_page"]["VALUE"] == 1) {
        return $arItem;
    }
});

if (!empty($recommendForFrontPage)) {
    $arResult["RECOMMEND_FRONT_PAGE"] = end($recommendForFrontPage);
}

/*
 * Get the author
 */
$result = CIBlockElement::GetList(
    Array("SORT"=>"ASC"),
    Array("IBLOCK_CODE"=>"author_project_item")
);
if ($author = $result->GetNext()) {
    $arResult["PROJECT_AUTHOR"] = $author;
    $arResult["PROJECT_AUTHOR"]["PICTURE_URL"] = CFile::GetPath($arResult["PROJECT_AUTHOR"]["DETAIL_PICTURE"]);
}
