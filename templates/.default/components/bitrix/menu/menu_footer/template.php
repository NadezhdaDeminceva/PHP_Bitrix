<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="info_block left_block_shadow">
	<h2><?=GetMessage('INFO')?></h2>
	<nav class="menu_footer grey">
		<ul>
	    <?foreach ($arResult as $arItem) :?>
	    	<li>
	    		<a href="<?=$arItem["LINK"]?>" <?=$arItem["SELECTED"] ? 'class="selected"' : ($arItem['PARAMS']['color'] ? 'style="color: ' . $arItem['PARAMS']['color'] . '"' : '')?>>
	    			<?=$arItem["TEXT"]?>
				</a>
			</li>
		<?endforeach?>
		</ul>
	</nav>
</section>

