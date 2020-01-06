<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?if ($arResult["NavPageCount"] != 1) {?>  
<div class="page_nav">
    <?=GetMessage("result")?>
    <?=$arResult["NavFirstRecordShow"]?>
    <?=GetMessage("nav_to")?>
    <?=$arResult["NavLastRecordShow"]?>
    <?=GetMessage("nav_of")?>
    <?=$arResult["NavRecordCount"]?><br />
    <nav>
        <?if ($arResult["NavPageNomer"] > 1) :?>
            <a href="<?=$arResult["sUrlPath"]?>?PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]-1)?><?=($arResult['NavQueryString'])?'&'.$arResult['NavQueryString']:''?>" class="prev"></a>
        <?else :?>
            <span class="prev"></span>
        <?endif?>
        <?while ($arResult["nStartPage"] <= $arResult["nEndPage"]) :?>
            <?if ($arResult["nStartPage"] == $arResult["NavPageNomer"]) :?>
                <span class="current"><?=$arResult["nStartPage"]?></span>
            <?else :?>
                <a class="nav" href="<?=$arResult["sUrlPath"]?>?PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?><?=($arResult['NavQueryString'])?'&'.$arResult['NavQueryString']:''?>"><?=$arResult["nStartPage"]?></a>
            <?endif?>
            <?$arResult["nStartPage"]++?>
        <?endwhile?>
        <?if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]) :?>
            <a href="<?=$arResult["sUrlPath"]?>?PAGEN_<?=$arResult["NavNum"]?>=<?=($arResult["NavPageNomer"]+1)?><?=($arResult['NavQueryString'])?'&'.$arResult['NavQueryString']:''?>" class="next"></a>
        <?else :?>
            <span class="next"></span>   
        <?endif?>
    </nav>
</div>
<? } ?>