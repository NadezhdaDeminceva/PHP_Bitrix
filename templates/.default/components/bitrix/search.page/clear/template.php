<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<div class="search-page">
	<form action="" method="get">
		<table width="100%" border="0" cellpadding="0" cellspacing="0">
			<tbody><tr>
				<td style="width: 100%;">
					<input class="search-query" type="text" name="q" value="<?=$arResult["REQUEST"]["QUERY"]?>" placeholder="<?=GetMessage("CT_BSP_SEARCH");?>"/>	
				</td>
			</tr>
		</tbody></table>
		<noindex>
		<div id="search_params" class="search-filter" style="display: block">
			<table class="search-filter" cellspacing="0"><tbody>
				<tr>
					<td class="search-filter-name"><?echo GetMessage("CT_BSP_WHERE")?></td>
					<td class="search-filter-field">
						<select class="select-field" name="where">
							<option value=""><?=GetMessage("CT_BSP_ALL")?></option>
							<?foreach($arResult["DROPDOWN"] as $key=>$value):?>
								<option value="<?=$key?>"<?if($arResult["REQUEST"]["WHERE"]==$key) echo " selected"?>><?=$value?></option>
							<?endforeach?>
						</select>
					</td>
				</tr>
				<tr>
					<td class="search-filter-name">&nbsp;</td>
					<td class="search-filter-field"><input class="search-button" value="<?echo GetMessage("CT_BSP_GO")?>" type="submit"></td>
				</tr>
			</tbody></table>
		</div>		
		</noindex>
	</form>

	<div class="search-result">
	<?if(count($arResult["SEARCH"])>0):?>
		<?=$arResult["NAV_STRING"]?>
		<?foreach($arResult["SEARCH"] as $arItem):?>
			<div class="search-item">
				<h4><a href="<?echo $arItem["URL"]?>"><?echo $arItem["TITLE_FORMATED"]?></a></h4>
				<div class="search-preview"><?echo $arItem["BODY_FORMATED"]?></div>
			</div>
		<?endforeach;?>
		<?=$arResult["NAV_STRING"]?>
		<div class="search-sorting"><label><?echo GetMessage("CT_BSP_ORDER")?>:</label>&nbsp;
		<?if($arResult["REQUEST"]["HOW"]=="d"):?>
			<a href="<?=$arResult["URL"]?>&amp;how=r"><?=GetMessage("CT_BSP_ORDER_BY_RANK")?></a>&nbsp;<b><?=GetMessage("CT_BSP_ORDER_BY_DATE")?></b>
		<?else:?>
			<b><?=GetMessage("CT_BSP_ORDER_BY_RANK")?></b>&nbsp;<a href="<?=$arResult["URL"]?>&amp;how=d"><?=GetMessage("CT_BSP_ORDER_BY_DATE")?></a>
		<?endif;?>
		</div>
	<?else:?>
		<?ShowNote(GetMessage("CT_BSP_NOTHING_TO_FOUND"));?>
	<?endif;?>
	</div>
</div>