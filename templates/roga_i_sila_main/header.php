<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE>
<!--[if IE 7]>    <html class="ie7"> <![endif]-->
<!--[if IE 8]>    <html class="ie8> <![endif]-->
<!--[if IE 9]>    <html class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html> <!--<![endif]-->
<head>
    <?php
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/../.default/css/base.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/../.default/js/bxslider/jquery.bxslider.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery-1.9.1.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery.placeholder.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/bxslider/jquery.bxslider.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/default_script.js");

    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.core.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.theme.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.selectmenu.css");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.core.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.widget.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.position.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/../.default/js/jquery.ui.selectmenu/jquery.ui.selectmenu.js");
    Asset::getInstance()->addString('<link href="' . SITE_TEMPLATE_PATH . '/../.default/favicon.ico" rel="icon" type="image/x-icon" />');
    $APPLICATION->ShowHead();
    ?>
    <title><?$APPLICATION->ShowTitle();?></title>
    <!--[if lt IE 9]>
			<script src="/../.default/js/html5shiv.js"></script>
		<![endif]-->

</head>
<body>
	<?$APPLICATION->ShowPanel()?>
	<div class="wrapper">
		<div class="base_layer"></div>
		<header class="header">
			<div class="width_960">
				<div class="item-logo">
					<a href="/" class="logo inline-block"></a>
				</div>
				<?$APPLICATION->IncludeComponent(
					"bitrix:system.auth.form",
					"auth_form_header",
					Array(
						"FORGOT_PASSWORD_URL" => "",
						"PROFILE_URL" => "/personal/",
						"REGISTER_URL" => "/auth/",
						"AUTH_URL" => "/auth/",
						"SHOW_ERRORS" => "N",
						"PERSONAL_PROFILE" => "/personal/profile/",
					)
				);?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:sale.basket.basket.line",
					"basket_line_header",
					Array(
						"HIDE_ON_BASKET_PAGES" => "Y",
						"PATH_TO_AUTHORIZE" => "",
						"PATH_TO_BASKET" => "/personal/cart/",
						"PATH_TO_ORDER" => "/personal/order/make/",
						"PATH_TO_PERSONAL" => "/personal/",
						"PATH_TO_PROFILE" => SITE_DIR."personal/",
						"PATH_TO_REGISTER" => SITE_DIR."login/",
						"POSITION_FIXED" => "N",
						"SHOW_AUTHOR" => "N",
						"SHOW_EMPTY_VALUES" => "Y",
						"SHOW_NUM_PRODUCTS" => "Y",
						"SHOW_PERSONAL_LINK" => "N",
						"SHOW_PRODUCTS" => "N",
						"SHOW_REGISTRATION" => "N",
						"SHOW_TOTAL_PRICE" => "Y"
					)
				);?>
			</div>
		</header>
		<section class="fixed_block">
			<div class="width_960">
				<?$APPLICATION->IncludeComponent(
					"bitrix:search.form",
					"search_form_header",
					Array(
						"PAGE" => "/search/",
						"USE_SUGGEST" => "N"
					)
				);?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"catalog_top",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"DELAY" => "N",
						"MAX_LEVEL" => "2",
						"MENU_CACHE_GET_VARS" => array(0=>"",),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "top",
						"USE_EXT" => "Y"
					)
				);?>
			</div>
		</section>
		<section class="content">
			<div class="work_area width_960">