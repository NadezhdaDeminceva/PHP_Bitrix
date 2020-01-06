<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if (!isset($arResult['ITEMS']) || empty($arResult['ITEMS'])) {
    return;
}?>

<h2 class="push_right"><?=GetMessage("MODELS_WEEK")?></h2>
<section class="product_line" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
	<?foreach ($arResult['ITEMS'] as $item) {?>
		<?php
            $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
        ?>
		<figure class="product_item" id="<?=$this->GetEditAreaId($item['ID']);?>">
			<div class="product_item_pict">
				<a href="<?=$item['DETAIL_PAGE_URL']?>">
					<img alt="<?=$item['NAME']?>" src="<?=$item['PREVIEW_PICTURE']['SRC']?>" title="<?=$item['NAME']?>">
				</a>
			</div>
			<figcaption>
				<h3><a href="<?=$item['DETAIL_PAGE_URL']?>"><?=$item['NAME']?></a></h3>
				<?if ($item['PRICES']['BASE']['DISCOUNT_VALUE'] != $item['PRICES']['BASE']['VALUE']) {?>
					<span class="product_item_price dark_grey old_price">
						<?= $item['PRICES']['BASE']['PRINT_VALUE']; ?>
					</span>
					<p class="product_item_price dark_grey">
						<?= $item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE']; ?>
					</p>
				<?} else {?>
					<p class="product_item_price dark_grey">
	                    <?= $item['PRICES']['BASE']['PRINT_VALUE']; ?>
	                </p>
	            <?}?>
	            <?if ($item['CATALOG_QUANTITY'] > 0 && $arResult['BASKET_ITEMS'][$item['ID']] < $item['CATALOG_QUANTITY']) {?>
	                <a class="buy_button inverse inline-block pie" href="<?= $item["ADD_URL"]; ?>">
	                    <?= GetMessage('IN_BASKET'); ?>
	                </a>
            	<? } else { ?>
	                <p>
	                    <?= GetMessage('NOT_AVAILABLE'); ?>
	                </p>
	            <?php } ?>
        	</figcaption>
        	<?if ($item["PROPERTY_SALE_VALUE"]) { ?>
            	<div class="product_item_label sale"></div>
        	<? } elseif ($item["PROPERTY_NEW_VALUE"]) { ?>
            	<div class="product_item_label new"></div>
        	<? } ?>
    	</figure>
    <? } ?>
</section>	
