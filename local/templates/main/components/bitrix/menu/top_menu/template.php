<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<ul class="navbar-nav mx-auto mt-3 mt-lg-0">
    <li class="nav-item">
        <a class="nav-link" href="/about-me">
            Обо мне
        </a>
    </li>
    <li class="nav-item dropdown">
        <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
        >
            Статьи
        </a>
        <div class="dropdown-menu">
            <?php foreach ($arResult["ALL_ARTICLE_SECTIONS"] as $section) : ?>
                <a class="dropdown-item" href="<?= $section["LINK"] ?>">
                    <?= $section["NAME"] ?>
                </a>
            <?php endforeach; ?>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/contact">
            Контакты
        </a>
    </li>
</ul>
