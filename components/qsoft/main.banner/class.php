<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

if (!\Bitrix\Main\Loader::includeModule('advertising')) {
    return;
}

CBitrixComponent::includeComponentClass("bitrix:advertising.banner");

class MainBanner extends AdvertisingBanner {

    public function onPrepareComponentParams($params)
    {
        global $USER;
        if (!$USER->IsAuthorized()) {
            $params['QUANTITY'] = 1;
        }
        return $params;
    }
}