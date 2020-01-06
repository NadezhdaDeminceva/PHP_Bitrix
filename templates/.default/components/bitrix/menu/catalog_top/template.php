<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="main_menu">
	<ul>
	<?$previousLevel = 0;
	foreach($arResult as $arItem):?>
		<?if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel):?>
			<?=str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"]));?>
		<?endif?>
		<?if ($arItem["IS_PARENT"]):?>
			<?if ($arItem["DEPTH_LEVEL"] == 1):?>
				<? if ($arItem["SELECTED"]): ?>
					<li class="submenu current"><span><?= $arItem["TEXT"] ?></span>
				<? else: ?>
	            	<li class="submenu"><a href="<?=$arItem['LINK']?>"><?= $arItem["TEXT"] ?></a>
	            <? endif; ?>
					<div class="submenu_border"></div>
					<ul>
			<?else:?>
				<? if ($arItem["SELECTED"]): ?>
					<li class="current"><span><?=$arItem["TEXT"]?></span>
				<? else: ?>
                	<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <? endif ?>
					<ul>
			<?endif?>
		<?else:?>
			<? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                <? if ($arItem["SELECTED"]): ?>
                	<li class="current"><span><?= $arItem["TEXT"] ?></span>
                <? else: ?>
                	<li><a href="<?= $arItem['LINK'] ?>"><?= $arItem["TEXT"] ?></a>
                <? endif; ?>
                	<div class="submenu_border"></div>
            <? else: ?>
                <? if ($arItem["SELECTED"]): ?>
                	<li class="current"><span><?= $arItem["TEXT"] ?></span>
                <? else: ?>
                	<li><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <? endif ?>
            <? endif ?>
        <? endif ?>
    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>
    <? endforeach ?>
	<? if ($previousLevel > 1):?>
        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
    <? endif ?>
    </ul>
</nav>