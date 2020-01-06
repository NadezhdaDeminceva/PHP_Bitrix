<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="news_block inverse">
	<h2 class="inline-block"><?=GetMessage('NEWS');?></h2>
	<span class="all_list">
		&nbsp;/&nbsp;
		<a href="<?=$arResult["LIST_PAGE_URL"]?>" class="text_decor_none">
			<b><?=GetMessage('ALL_NEWS');?></b>
		</a>
	</span>
	<div>
		<?foreach($arResult["ITEMS"] as $arItem):?>
		<?php
	    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	    ?>
		<figure class="news_item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
				<img src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="" title="" />
			</a>
			<figcaption class="news_item_description">
				<h3>
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						<?=$arItem["NAME"]?>
					</a>
				</h3>
				<div class="news_item_anons">
					<a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="text_decor_none">
						<?=$arItem["PREVIEW_TEXT"];?>
					</a>
				</div>
				<div class="news_item_date grey"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
			</figcaption>
		</figure>
		<?endforeach;?>	
	</div>
</section>
