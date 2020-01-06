<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

foreach ($arResult["ITEMS"] as $arItem => $value) {
    if (! $value["PREVIEW_PICTURE"]["SRC"]) {
        $arResult["ITEMS"][$arItem]["PREVIEW_PICTURE"]["SRC"] = NO_IMAGE;
    }
}