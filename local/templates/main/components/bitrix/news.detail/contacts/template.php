<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="col-lg-4">
    <div class="pr-0 pr-lg-4">
        <div class="content"><?= $arResult["DETAIL_TEXT"] ?>
            <div class="mt-5">
                <p class="h3 mb-3 font-weight-normal">
                    <a class="text-dark" href="mailto:<?= $arResult["PROPERTIES"]["email"]["VALUE"] ?>">
                        <?= $arResult["PROPERTIES"]["email"]["VALUE"] ?>
                    </a>
                </p>
                <p class="mb-3">
                    <a class="text-dark" href="tel:<?= $arResult["PROPERTIES"]["telephone"]["VALUE"] ?>">
                        <?= $arResult["PROPERTIES"]["telephone"]["VALUE"] ?>
                    </a>
                </p>
                <p class="mb-2"><?= $arResult["PREVIEW_TEXT"] ?></p>
            </div>
        </div>
    </div>
</div>

