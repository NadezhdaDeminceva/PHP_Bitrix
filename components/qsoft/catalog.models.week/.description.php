<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentDescription = array(
	"NAME" => GetMessage("MODELS_WEEK"),
	"DESCRIPTION" => GetMessage("MODELS_WEEK"),
	"SORT" => 20,
	"CACHE_PATH" => "Y",
	"PATH" => array(
		"ID" => "content",
		"CHILD" => array(
			"ID" => "qsoft",
			"NAME" => "QSOFT",
			"SORT" => 10,
			"CHILD" => array(
				"ID" => "models_week",
			),
		),
	),
);
?>
