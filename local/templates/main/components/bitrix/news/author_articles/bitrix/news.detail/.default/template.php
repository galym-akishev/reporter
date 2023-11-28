<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<main>
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <article>
                        <img src="<?= $arResult["DETAIL_PICTURE"]["SAFE_SRC"] ?>" alt="<?= $arResult["NAME"] ?>" class="w-100">
                        <ul class="post-meta mb-2 mt-4">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" style="margin-right:5px;margin-top:-4px" class="text-dark" viewBox="0 0 16 16">
                                    <path d="M5.5 10.5A.5.5 0 0 1 6 10h4a.5.5 0 0 1 0 1H6a.5.5 0 0 1-.5-.5z" />
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z" />
                                    <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4z" />
                                </svg> <span><?= $arResult["ACTIVE_FROM"] ?></span>
                            </li>
                        </ul>
                        <h1 class="my-3"><?= $arResult["PROPERTIES"]["article_title"]["VALUE"] ?></h1>
                        <ul class="post-meta mb-4">
                            <?php foreach ($arResult["ARTICLE_SECTIONS"] as $section): ?>
                                <li>
                                    <a href="<?= $section["LINK"] ?>">
                                        <?= $section["NAME"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <div class="content text-left">
                            <?= $arResult["DETAIL_TEXT"] ?>
                        </div>
                    </article>
                </div>
                <!-- Sidebar-->
                <div class="col-lg-4">
                    <div class="widget-blocks">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if (isset($arResult["PROJECT_AUTHOR"])): ?>
                                    <div class="widget">
                                        <div class="widget-body">
                                            <img
                                                    src="<?= $arResult["PROJECT_AUTHOR"]["PICTURE_URL"] ?>"
                                                    alt="<?= $arResult["PROJECT_AUTHOR"]["NAME"] ?>"
                                                    class="w-100 author-thumb-sm d-block"
                                            >
                                            <h2 class="widget-title my-3"><?= $arResult["PROJECT_AUTHOR"]["NAME"] ?></h2>
                                            <p class="mb-3 pb-2">
                                                <?= $arResult["PROJECT_AUTHOR"]["PREVIEW_TEXT"] ?>
                                            </p>
                                            <a href="/about-me/" class="btn btn-sm btn-outline-primary">
                                                далее
                                            </a>
                                        </div>
                                    </div>
                                <?php endif ?>
                            </div>
                            <div class="col-lg-12 col-md-6">
                                <div class="widget">
                                    <h2 class="section-title mb-3">Рекомендуем</h2>
                                    <div class="widget-body">
                                        <div class="widget-list">
                                            <?php foreach ($arResult["RECOMMENDED_FOR_SIDEBAR_ARTICLES"] as $arItem): ?>
                                                <a
                                                        class="media align-items-center"
                                                        href="<?= $arItem["DETAIL_PAGE_URL"] ?>"
                                                >
                                                    <img
                                                            src="<?= $arItem["DETAIL_PICTURE"] ?>"
                                                            alt="<?= $arItem["TITLE"] ?>"
                                                            class="w-100"
                                                    >
                                                    <div class="media-body ml-3">
                                                        <h3 style="margin-top:-5px"><?= $arItem["TITLE"] ?></h3>
                                                        <p class="mb-0 small"><?= $arItem["PREVIEW_TEXT"] ?></p>
                                                    </div>
                                                </a>
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
                                            <?php foreach($arResult["ARTICLE_SECTIONS_OF_ALL_ARTICLES"] as $section): ?>
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
                <!-- End of Sidebar-->
            </div>
        </div>
    </section>
</main>