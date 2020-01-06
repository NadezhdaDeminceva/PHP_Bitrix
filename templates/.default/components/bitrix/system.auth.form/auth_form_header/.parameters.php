<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$arTemplateParameters = array(
    'PERSONAL_PROFILE' => array(
        "NAME" => GetMessage("PERSONAL"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
    'AUTH_URL' => array(
        "NAME" => GetMessage("AUTH"),
        "TYPE" => "STRING",
        "DEFAULT" => "",
    ),
);
