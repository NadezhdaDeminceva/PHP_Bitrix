<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("ADV_BANNER_NAME"),
	"DESCRIPTION" => GetMessage("ADV_BANNER_DESC"),
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "qsoft",
            "NAME" => "QSOFT",
            "SORT" => 10,
            "CHILD" => array(
                "ID" => "banner",
            )    
		)
	),
);
?>