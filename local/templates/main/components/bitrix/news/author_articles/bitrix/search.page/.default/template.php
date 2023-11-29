<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
?>

<main>
    <section class="section">
        <div class="container">
            <div class="row no-gutters-lg">
                <div class="col-12">
                    <h2 class="section-title">Результаты поиска:</h2>
                </div>
                <div class="col-lg-12 mb-5 mb-lg-0">
                    <div class="row">
                        <?php if (count($arResult["SEARCH"]) > 0): ?>
                            <?php foreach ($arResult["SEARCH"] as $arItem): ?>
                                <div class="col-md-12 mb-4">
                                    <article class="card article-card article-card-sm h-100">
                                        <a class="search-result-link" href="<?= $arItem["URL"] ?>">
                                            <?= $arItem["TITLE_FORMATED"] ?>
                                        </a>
                                        <?php if(!empty($arItem["BODY_FORMATED"])): ?>
                                            <p><?= $arItem["BODY_FORMATED"] ?></p>
                                        <?php else: ?>
                                            <p>Раздел <?= $arItem["TITLE_FORMATED"] ?></p>
                                        <?php endif; ?>
                                    </article>
                                </div>
                            <?php endforeach; ?>
                            <?php if ($arParams["DISPLAY_BOTTOM_PAGER"] != "N") : ?>
                                <div class="col-md-12 mb-4">
                                    <?= $arResult["NAV_STRING"] ?>
                                </div>
                            <?php endif ?>
                            <br/>
                        <?php else: ?>
                            <div class="search-no-result col-md-12 mb-4">
                                <?= GetMessage("SEARCH_NOTHING_TO_FOUND") ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>