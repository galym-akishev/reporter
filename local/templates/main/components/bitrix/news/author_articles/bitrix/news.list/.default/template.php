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
                                <?php foreach($arItem["ARTICLE_SECTIONS"] as $section) : ?>
                                    <li>
                                        <a href="<?= $section["LINK"] ?>"><?= $section["NAME"] ?></a>
                                    </li>
                                <?php endforeach; ?>
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

<div class="col-lg-4">
    <div class="widget-blocks">
        <div class="row">
            <div class="col-lg-12">
                <div class="widget">
                    <div class="widget-body">
                        <img loading="lazy" decoding="async" src="images/author.jpg" alt="About Me" class="w-100 author-thumb-sm d-block">
                        <h2 class="widget-title my-3">Hootan Safiyari</h2>
                        <p class="mb-3 pb-2">Hello, I’m Hootan Safiyari. A Content writter, Developer and Story teller. Working as a Content writter at CoolTech Agency. Quam nihil …</p> <a href="about.html" class="btn btn-sm btn-outline-primary">Know
                            More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="widget">
                    <h2 class="section-title mb-3">Рекомендуем</h2>
                    <div class="widget-body">
                        <div class="widget-list">
                            <?php if (isset($arResult["RECOMMEND_SIDEBAR"])): ?>
                                <article class="card mb-4">
                                    <div class="card-image">
                                        <div class="post-info">
                                            <span class="text-uppercase">
                                                <?= $arResult["RECOMMEND_SIDEBAR"]["PROPERTIES"]["read_time"]["VALUE"] ?> минут
                                            </span>
                                        </div>
                                        <img
                                                src="<?= $arResult["RECOMMEND_SIDEBAR"]["PREVIEW_PICTURE"]["SAFE_SRC"] ?>"
                                                alt="<?= $arResult["RECOMMEND_SIDEBAR"]["PREVIEW_PICTURE"]["ALT"] ?>"
                                                class="w-100"
                                        >
                                    </div>
                                    <div class="card-body px-0 pb-1">
                                        <h3>
                                            <a class="post-title post-title-sm"
                                               href="<?= rtrim($arResult["RECOMMEND_SIDEBAR"]["LIST_PAGE_URL"], '/') . $arResult["RECOMMEND_SIDEBAR"]["DETAIL_PAGE_URL"] ?>">
                                                <?= $arResult["RECOMMEND_SIDEBAR"]["PROPERTIES"]["article_title"]["VALUE"] ?>
                                            </a>
                                        </h3>
                                        <p class="card-text"><?= $arResult["RECOMMEND_SIDEBAR"]["PREVIEW_TEXT"] ?></p>
                                        <div class="content">
                                            <a
                                                    class="read-more-btn"
                                                    href="<?= rtrim($arResult["RECOMMEND_SIDEBAR"]["LIST_PAGE_URL"], '/') . $arResult["RECOMMEND_SIDEBAR"]["DETAIL_PAGE_URL"] ?>">
                                                Читать
                                            </a>
                                        </div>
                                    </div>
                                </article>
                            <?php endif ?>
                            <?php foreach ($arResult["ITEMS"] as $arItem): ?>
                                <?php if ($arItem["PROPERTIES"]["recommend_sidebar"]["VALUE"] == '1'): ?>
                                    <a
                                            class="media align-items-center"
                                            href="<?= rtrim($arItem["LIST_PAGE_URL"], '/') . $arItem["DETAIL_PAGE_URL"] ?>"
                                    >
                                        <img
                                                src="<?= $arItem["PREVIEW_PICTURE"]["SAFE_SRC"] ?>"
                                                alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"] ?>"
                                                class="w-100"
                                        >
                                        <div class="media-body ml-3">
                                            <h3 style="margin-top:-5px"><?= $arItem["PROPERTIES"]["article_title"]["VALUE"] ?></h3>
                                            <p class="mb-0 small"><?= $arItem["PREVIEW_TEXT"] ?></p>
                                        </div>
                                    </a>
                                <?php endif ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="widget">
                    <h2 class="section-title mb-3">Категории</h2>
                    <div class="widget-body">
                        <ul class="widget-list">
                            <?php foreach($arResult["ALL_ARTICLE_SECTIONS"] as $section): ?>
                                <li>
                                    <a href="<?= $section["LINK"] ?>">
                                        <?= $section["NAME"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
