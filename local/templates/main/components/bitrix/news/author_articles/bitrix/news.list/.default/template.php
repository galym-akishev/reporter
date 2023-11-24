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

<?php

echo "ШВЖ";
$res = CIBlockSection::GetByID(5); // возвращает название раздела по ID
if ($ar_res = $res->GetNext()) {
    echo $ar_res['NAME'];
}

echo "<pre>";
print_r($arResult);
echo "<pre>";
?>

<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="row">
        <?php foreach($arResult["ITEMS"] as $arItem): ?>
            <div class="col-md-6 mb-4">
                <article class="card article-card article-card-sm h-100">
                    <div>
                        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                            <div class="card-image">
                                <div class="post-info">
                                    <span class="text-uppercase">
                                        <?=$arItem["ACTIVE_FROM"]?>
                                    </span>
                                    <span class="text-uppercase">
                                        <?= $arItem["PROPERTIES"]["read_time"]["~VALUE"] ?> минут читать
                                    </span>
                                </div>
                                <img
                                        src="<?= $arItem["PREVIEW_PICTURE"]["SAFE_SRC"] ?>"
                                        alt="<?= $arItem["PROPERTIES"]["article_title"]["~VALUE"] ?>"
                                        class="w-100"
                                >
                            </div>
                        </a>
                        <div class="card-body px-0 pb-0">
                            <ul class="post-meta mb-2">
                                <li>
                                    <a href="#!">travel</a>
                                </li>
                            </ul>
                            <h2>
                                <a class="post-title" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    <?= $arItem["PROPERTIES"]["article_title"]["~VALUE"] ?>
                                </a>
                            </h2>
                            <p class="card-text"><?= $arItem["~PREVIEW_TEXT"] ?></p>
                            <div class="content">
                                <a class="read-more-btn" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                    Читать далее
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</div>
