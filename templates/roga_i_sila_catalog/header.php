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
<h1 class="push_right"><?=$APPLICATION->ShowTitle(false)?></h1>
