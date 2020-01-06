<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Loader;

class StoresList extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{	
		if (!isset($arParams["CACHE_TIME"]))
			$arParams["CACHE_TIME"] = 36000000;
		$arParams["IBLOCK_TYPE"] = trim($arParams["IBLOCK_TYPE"]);
		if (strlen($arParams["IBLOCK_TYPE"]) <= 0)
			$arParams["IBLOCK_TYPE"] = "salons";
		$arParams["IBLOCK_ID"] = intval($arParams["IBLOCK_ID"]);
		if ($arParams['IBLOCK_ID'] <= 0)
			$arParams["IBLOCK_ID"] = "4";
		$arParams["SORT_BY"] = trim($arParams["SORT_BY"]);
		if (strlen($arParams["SORT_BY"]) <= 0)
			$arParams["SORT_BY"] = "RAND";
		if (!preg_match('/^(asc|desc|nulls)(,asc|,desc|,nulls){0,1}$/i', $arParams["SORT_ORDER"]))
			$arParams["SORT_ORDER"] = "DESC";
		$arParams["SALONS_COUNT"] = intval($arParams["SALONS_COUNT"]);
		$arParams["ALL_SALONS_URL"] = trim($arParams["ALL_SALONS_URL"]);
		return $arParams;
	}

	public function executeComponent()
	{
		global $APPLICATION;

		if (!Loader::includeModule('iblock')) {
			ShowError(getMessage('ERROR_IB_MODULE_NOT_CONNECTED'));
			return;
		}
		if ($this->startResultCache()) {
			$select = [
				'ID',
				'IBLOCK_ID',
				'NAME',
				'PREVIEW_PICTURE',
				'PROPERTY_ADDRESS',
				'PROPERTY_PHONE',
				'PROPERTY_WORK_HOURS',
				'DETAIL_PAGE_URL',
				'PROPERTY_MAP',
			];
			$navigation = ['nTopCount' => $this->arParams['SALONS_COUNT']];
			$dbItem = CIBlockElement::GetList(
				[$this->arParams['SORT_BY'] => $this->arParams['SORT_ORDER']],
				[
					'IBLOCK_ID' => $this->arParams['IBLOCK_ID'],
					'ACTIVE' => 'Y',
				],
				false,
				$navigation,
				$select
			);
			while ($item = $dbItem->GetNext(true, false)) {
				$arButtons = CIBlock::GetPanelButtons(
				    $item["IBLOCK_ID"],
				    $item["ID"],
				    0,
				    ["SECTION_BUTTONS" => false, "SESSID" => false]
				);	
				$item["EDIT_LINK"] = $arButtons["edit"]["edit_element"]["ACTION_URL"];
				$item["DELETE_LINK"] = $arButtons["edit"]["delete_element"]["ACTION_URL"];
				$arPreviewPicture[] = $item["PREVIEW_PICTURE"];
				$coordinates = explode(",", $item['PROPERTY_MAP_VALUE']);
                $arPositions['PLACEMARKS'][] =[
                    "LON" => $coordinates[1],
                    "LAT" => $coordinates[0],
                    "TEXT" => $item['PROPERTY_ADDRESS_VALUE'],
                    ]; 
                $this->arResult["ITEMS"][] = $item;   
			}
			$arResultPreviewPicture = CFile::GetList("", array("ID" => $arPreviewPicture));
		    while ($resultPreviewPicture = $arResultPreviewPicture->GetNext()) {
		        $srcArray[$resultPreviewPicture["ID"]] = ["SRC" => "/upload/" . $resultPreviewPicture["SUBDIR"] . "/" . $resultPreviewPicture["FILE_NAME"]];
		    }
		    foreach ($this->arResult["ITEMS"] as $item => $value) {
		        if ($value["PREVIEW_PICTURE"]["SRC"]) {
		        	$this->arResult["ITEMS"][$item]["PREVIEW_PICTURE"] = $srcArray[$this->arResult["ITEMS"][$item]["PREVIEW_PICTURE"]];
		        } else {
		        	$this->arResult["ITEMS"][$item]["PREVIEW_PICTURE"]["SRC"] = NO_IMAGE;
		        }
		    }
		    $this->arResult['MAP_DATA'] = serialize($arPositions);
            $this->setResultCacheKeys(array(
                "MAP_DATA"
            ));	
			$this->includeComponentTemplate();
		}
		$arButtons = CIBlock::GetPanelButtons(
            $this->arParams['IBLOCK_ID'],
            $this->arResult['ID'],
            0,
            array("SECTION_BUTTONS"=>false)
        );
        if ($APPLICATION->GetShowIncludeAreas()) {
            $this->addIncludeAreaIcons(CIBlock::GetComponentMenu("configure", $arButtons));
        }
	}
}

	