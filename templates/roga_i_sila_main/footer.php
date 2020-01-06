<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>				
				</div>
			</section>
			<div class="d_footer width_960"></div>
			<div class="clear"></div>
		</div>
		<footer class="footer width_960">
			<section class="float_inner bottom_block">
				<?$APPLICATION->IncludeComponent(
	"qsoft:stores.list", 
	"stores_short", 
	array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "salons",
		"SALONS_COUNT" => "2",
		"ALL_SALONS_URL" => "/company/stores/",
		"SORT_BY" => "RAND",
		"SORT_ORDER" => "DESC",
		"COMPONENT_TEMPLATE" => "stores_short",
		"SHOW_MAP" => "N"
	),
	false
);?>
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"menu_footer",
					Array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "bottom",
						"COMPONENT_TEMPLATE" => "menu_footer",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "A",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "bottom",
						"USE_EXT" => "N"
					),
					false
				);?>
			</section>
			<div class="footer_inner">
				<a href="http://www.qsoft.ru" target="_blank" class="qsoft grey inline-block"><?=GetMessage('MADE_IN');?></a>
				<div class="copy">
                    <?include $_SERVER['DOCUMENT_ROOT'] . "/local/php_interface/include/copyright.php"?>       
                </div>
			</div>
		</footer>
	</body>
</html>
