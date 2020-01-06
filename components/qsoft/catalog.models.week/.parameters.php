<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (!CModule::IncludeModule("iblock"))
	return;

$arTypesEx = CIBlockParameters::GetIBlockTypes(array("-" => " "));

$arIBlocks = array();
$db_iblock = CIBlock::GetList(array("SORT" => "ASC"), array("SITE_ID" => $_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"] != "-" ? $arCurrentValues["IBLOCK_TYPE"] : "")));
while($arRes = $db_iblock->Fetch())
	$arIBlocks[$arRes["ID"]] = "[" . $arRes["ID"] . "] " . $arRes["NAME"];

$arSorts = array("ASC" => GetMessage("ASC"), "DESC" => GetMessage("DESC"));
$arSortFields = array(
	"RAND" => GetMessage("RAND"),
	"ID" => GetMessage("ID"),
	"NAME" => GetMessage("NAME"),
	"ACTIVE_FROM" => GetMessage("ACTIVE_DATE"),
	"SORT" => GetMessage("SORT")
);

$arComponentParameters = array(
	"PARAMETERS" => array(
		"IBLOCK_TYPE" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("TYPE_IB"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "salons",
			"REFRESH" => "Y",
		),
		"IBLOCK_ID" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("ID_IB"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => "={$_REQUEST['ID']}",
			"ADDITIONAL_VALUES" => "Y",
			"REFRESH" => "Y",
		),
		"MODELS_COUNT" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("MODELS_COUNT"),
			"TYPE" => "STRING",
			"DEFAULT" => "",
		),
        "SORT_BY" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SORT_FIELD"),
			"TYPE" => "LIST",
			"DEFAULT" => "ACTIVE_FROM",
			"VALUES" => $arSortFields,
		),
        "SORT_ORDER" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SORT_ORDER"),
			"TYPE" => "LIST",
			"DEFAULT" => "DESC",
			"VALUES" => $arSorts,
		),
		"CACHE_TIME" => array("DEFAULT" => 36000000),
	),
);
