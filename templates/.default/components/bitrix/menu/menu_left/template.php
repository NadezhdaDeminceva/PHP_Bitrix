<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<aside class="left_block">
	<nav>
		<ul class="left_menu">
			<li>
				<span><?=GetMessage('INFO')?></span>
				<ul>					
					<?foreach ($arResult as $arItem) :?>
				    	<li>
				    		<a href="<?=$arItem["LINK"]?>" <?=$arItem["SELECTED"] ? 'class="selected"' : ''?>>
				    			<?=$arItem["TEXT"]?>
							</a>
						</li>
					<?endforeach?>
				</ul>
			</li>
		</ul>
	</nav>	
</aside>	