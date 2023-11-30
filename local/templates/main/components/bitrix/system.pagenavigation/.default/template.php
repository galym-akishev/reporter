<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
        die();

$this->setFrameMode(true);

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>

<div class="col-12">
    <div class="row">
        <div class="col-12">
            <nav class="mt-4">

                <?php if($arResult["bDescPageNumbering"] === true):?>

                    <div class="pagination">

                        <?php if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                            <?php if($arResult["bSavePage"]):?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php else:?>
                                <?php if ($arResult["NavPageCount"] == ($arResult["NavPageNomer"]+1) ):?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                            </svg>
                                        </a>
                                    </li>
                                <?php else:?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                            </svg>
                                        </a>
                                    </li>
                                <?php endif ?>
                            <?php endif?>
                        <?php endif?>

                        <?php while($arResult["nStartPage"] >= $arResult["nEndPage"]):?>
                            <?php $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1;?>

                            <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                                <li class="page-item active">
                                    <a class="page-link" href="#!">&nbsp;<?=$NavRecordGroupPrint?>&nbsp;</a>&nbsp;
                                </li>
                            <?php elseif($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false):?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$NavRecordGroupPrint?></a>&nbsp;
                                </li>
                            <?php else:?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$NavRecordGroupPrint?></a>&nbsp;
                                </li>
                            <?php endif?>

                            <?php $arResult["nStartPage"]--?>
                        <?php endwhile?>

                        <?php if ($arResult["NavPageNomer"] > 1):?>
                            <li class="page-item">
                                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif?>

                    </div>

                <?php else:?>

                    <div class="pagination">

                        <?php if ($arResult["NavPageNomer"] > 1):?>

                            <?php if($arResult["bSavePage"]):?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                        </svg>
                                    </a>
                                </li>
                            <?php else:?>
                                <?php if ($arResult["NavPageNomer"] > 2):?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                            </svg>
                                        </a>
                                    </li>
                                <?php else:?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
                                        </svg>
                                    </a>
                                </li>
                                <?php endif?>
                            <?php endif?>
                        <?php endif?>

                        <?php while($arResult["nStartPage"] <= $arResult["nEndPage"]):?>

                            <?php if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):?>
                                <li class="page-item active">
                                    <a class="page-link" href="#!">&nbsp;<?=$arResult["nStartPage"]?>&nbsp;</a>&nbsp;
                                </li>
                            <?php elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><?=$arResult["nStartPage"]?></a>&nbsp;
                                </li>
                            <?php else:?>
                                <li class="page-item">
                                    <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><?=$arResult["nStartPage"]?></a>&nbsp;
                                </li>
                            <?php endif?>
                            <?php $arResult["nStartPage"]++?>
                        <?php endwhile?>

                        <?php if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):?>
                            <li class="page-item">
                                <a class="page-link" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </li>
                        <?php endif?>

                    </div>

                <?php endif ?>

            </nav>
        </div>
    </div>
</div>
