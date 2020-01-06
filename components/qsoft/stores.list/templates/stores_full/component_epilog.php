<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>

<div style="clear: both;">
    <?if ($arParams["SHOW_MAP"] == "Y") {
        $APPLICATION->IncludeComponent(
			"bitrix:map.yandex.view",
			"",
			Array(
				"CONTROLS" => array("ZOOM","TYPECONTROL"),
				"INIT_MAP_TYPE" => "MAP",
				"MAP_DATA" => $arResult["MAP_DATA"],
				"MAP_HEIGHT" => "300",
				"MAP_ID" => "salon",
				"MAP_WIDTH" => "100%",
				"OPTIONS" => array("ENABLE_SCROLL_ZOOM")
			)
		);
    }?>
</div>