<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
?>
<div class="col-lg-6 mt-4 mt-lg-0">
    <?php if(!empty($arResult["ERROR_MESSAGE"])): ?>
        <?php foreach($arResult["ERROR_MESSAGE"] as $v) : ?>
            <div class="mf-req">
                <?php ShowError($v) ?>
            </div>
        <?php endforeach ?>
    <?php endif ?>
    <?php if($arResult["OK_MESSAGE"] <> ''): ?>
        <div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div>
    <?php endif ?>

    <form action="<?=POST_FORM_ACTION_URI?>" method="POST" class="row">
        <?=bitrix_sessid_post()?>
        <div class="col-md-6">
            <div class="mf-text">
                <?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            </div>
            <input class="form-control mb-4" type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>">
        </div>
        <div class="col-md-6">
            <div class="mf-text">
                <?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            </div>
            <input class="form-control mb-4" type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>">
        </div>

        <div class="col-12">
            <div class="mf-text">
                <?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?>
            </div>
            <textarea class="form-control mb-4" name="MESSAGE" rows="5" cols="40"><?=$arResult["MESSAGE"]?></textarea>
        </div>
        <div class="col-12">
            <?php if($arParams["USE_CAPTCHA"] == "Y"):?>
                <div class="mf-captcha">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
                    <input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
                    <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
                    <div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
                    <input type="text" name="captcha_word" size="30" maxlength="50" value="">
                </div>
            <?php endif;?>
            <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
            <input class="btn btn-outline-primary" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
        </div>
    </form>
</div>
