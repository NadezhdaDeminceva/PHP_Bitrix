<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<section class="shops_block" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
	<h2 class="inline-block"><?=GetMessage("OUR_SALONS")?></h2>
	<span class="dark_grey all_list">&nbsp;/&nbsp;
		<a href="<?=$arParams["ALL_SALONS_URL"]?>" class="text_decor_none">
			<b><?=GetMessage("ALL")?></b>
		</a>
	</span>
	<div>
		<?foreach ($arResult['ITEMS'] as $item) {?>
			<?php
                $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), ["CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')]);
            ?>
			<figure class="shops_block_item" id="<?=$this->GetEditAreaId($item['ID']);?>">
				<a href="<?=$item['DETAIL_PAGE_URL']?>">
					<img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="" title="" />
				</a>
				<figcaption class="shops_block_item_description">
					<h3 class="shops_block_item_name"><?=$item['NAME']?></h3>
					<p class="dark_grey"><?=$item['PROPERTY_ADDRESS_VALUE']?></p>
					<p class="black"><?=$item['PROPERTY_PHONE_VALUE']?></p>
					<p><?=GetMessage("WORK_HOURS")?><br/> <?=$item['PROPERTY_WORK_HOURS_VALUE']?></p>
				</figcaption>
			</figure>
		<?}?>
	</div>
</section>