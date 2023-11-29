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
                <div class="col-lg-8 mx-auto mb-5 mb-lg-0">
                    <img
                            src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                            class="img-fluid w-100 mb-4"
                            alt="<?= $arResult["NAME"] ?>"
                    >
                    <h1 class="mb-4"><?= $arResult["NAME"] ?></h1>
                    <div class="content">
                        <?= $arResult["DETAIL_TEXT"] ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>