<?
include_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404","Y");

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("404 Not Found");

?>

<main>
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto text-center">
          <img loading="lazy" decoding="async" src="<?= SITE_TEMPLATE_PATH ?>/assets/images/404.png" alt="404" class="img-fluid mb-4" width="500" height="350">
          <h1 class="mb-4">Страница не найдена!</h1>
          <a href="/" class="btn btn-outline-primary">Главная страница</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>