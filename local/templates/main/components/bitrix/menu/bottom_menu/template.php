<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<?php if (!empty($arResult)) : ?>
    <ul class="p-0 d-flex navbar-footer mb-0 list-unstyled">
        <?php foreach ($arResult as $arItem): ?>
            <li class="nav-item my-0">
                <a class="nav-link" href="<?= $arItem['LINK'] ?>">
                    <?= $arItem['TEXT'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
