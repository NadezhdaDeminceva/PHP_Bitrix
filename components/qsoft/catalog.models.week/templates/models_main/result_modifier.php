<?
$basket = CSaleBasket::GetList(false,
    [ "@PRODUCT_ID" => array_keys($arResult['ITEMS']),
        "FUSER_ID" => CSaleBasket::GetBasketUserID(),
        "LID" => SITE_ID,
    ],
    [ "PRODUCT_ID", 'SUM' => 'QUANTITY']
);

while($elem = $basket->Fetch()) {
    $arResult["BASKET_ITEMS"][$elem["PRODUCT_ID"]]=$elem["QUANTITY"];
}