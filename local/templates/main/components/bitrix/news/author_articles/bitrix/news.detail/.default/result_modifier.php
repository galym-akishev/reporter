<?php

/*
 * Get all section names for the article
 */
$idArticle = $arResult["ID"];
$dbList = CIBlockElement::GetElementGroups(
    $idArticle,
    false,
    array("NAME", "CODE")
);
while ($result = $dbList->GetNext()) {
    $arResult["ARTICLE_SECTIONS"][] = [
        'NAME' => $result['NAME'],
        'LINK' => '/' . $arParams['IBLOCK_TYPE'] . '/' . $result['CODE'] . '/'
    ];
}

/*
 * Get all section names for all articles
*/
$dbList = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_TYPE" => $arParams['IBLOCK_TYPE']),
    true);

while ($result = $dbList->GetNext()) {
    $arResult['ARTICLE_SECTIONS_OF_ALL_ARTICLES'][] = [
        'NAME' => $result['NAME'],
        'LINK' => '/' . $arParams['IBLOCK_TYPE'] . '/' . $result['CODE'] . '/'
    ];
}

/*
 * Get the author
 */
$result = CIBlockElement::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_CODE" => "author_project_item")
);
if ($author = $result->GetNext()) {
    $arResult["PROJECT_AUTHOR"] = $author;
    $arResult["PROJECT_AUTHOR"]["PICTURE_URL"] = CFile::GetPath($arResult["PROJECT_AUTHOR"]["DETAIL_PICTURE"]);
}

/*
 * Get the latest recommended article for sidebar
 */
$dbList = CIBlockElement::GetList(
    array("SORT" => "ASC"),
    array(
        "IBLOCK_CODE" => "article_author",
        array("=PROPERTY_recommend_sidebar" => 1),
    ),
    false,
    false,
    array("ID","IBLOCK_ID", "DETAIL_PAGE_URL", "DETAIL_PICTURE", "PREVIEW_TEXT")
);
while ($result = $dbList->GetNextElement()) {
    $articleFields = $result->GetFields();
    $articleProperties = $result->GetProperties();
    $arResult["RECOMMENDED_FOR_SIDEBAR_ARTICLES"][] = [
        'ID' => $articleFields['ID'],
        'DETAIL_PAGE_URL' => $articleFields['DETAIL_PAGE_URL'],
        'PREVIEW_TEXT' => $articleFields['PREVIEW_TEXT'],
        'DETAIL_PICTURE' => CFile::GetPath($articleFields['DETAIL_PICTURE']),
        'TITLE' => $articleProperties['article_title']['VALUE'],
        'IS_RECOMMENDED_FOR_SIDEBAR' => $articleProperties['recommend_sidebar']['VALUE'],
    ];
}
