<?include $_SERVER['DOCUMENT_ROOT'] . "/local/templates/roga_i_sila_main/header.php"?>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"breadcrumbs_qsoft",
	Array(
		"PATH" => "",
		"SITE_ID" => "s1",
		"START_FROM" => "0"
	)
);?>
<section class="content_area">
	<?$APPLICATION->IncludeComponent(
		"bitrix:menu",
		"menu_left",
		Array(
			"ALLOW_MULTI_SELECT" => "N",
			"CHILD_MENU_TYPE" => "left",
			"DELAY" => "N",
			"MAX_LEVEL" => "1",
			"MENU_CACHE_GET_VARS" => array(0=>"",),
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_TYPE" => "A",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"ROOT_MENU_TYPE" => "bottom",
			"USE_EXT" => "N"
		)
	);?>
		<h1><?=$APPLICATION->ShowTitle(false)?></h1>
