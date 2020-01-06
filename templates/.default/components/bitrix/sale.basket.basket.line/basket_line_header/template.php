<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<div class="basket_block">
    <a href="<?= $arParams["PATH_TO_BASKET"] ?>" class="basket_product_count inline-block">
        <?= $arResult["NUM_PRODUCTS"] ?>
    </a>
    <a href="<?= $arParams["PATH_TO_ORDER"] ?>" class="order_button pie <?=($arResult["NUM_PRODUCTS"] > 0) ? 'active' : ''?>">
    	<?=GetMessage('MAKE_ORDER');?>
    </a>
</div>