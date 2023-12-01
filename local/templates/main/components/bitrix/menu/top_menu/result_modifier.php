<?php

/** @var array $arParams */

/*
 * Get all section names for all articles
*/

CModule::IncludeModule('iblock');
$dbList = CIBlockSection::GetList(
    array("SORT" => "ASC"),
    array("IBLOCK_CODE" => "article_author"),
    true);
while ($result = $dbList->GetNext()) {
    $arResult['ALL_ARTICLE_SECTIONS'][] = [
        'NAME' => $result['NAME'],
        'LINK' => '/articles/' . $result['CODE'] . '/'
    ];
}
