<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if(empty($arResult))
	return "";
$strReturn = '<nav class="nav_chain"><a href="/">Главная</a>';
for($index = 0; $index < count($arResult); $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	$arrow = '<span class="nav_arrow inline-block"></span>';
	if($arResult[$index]["LINK"] <> "" && $index != count($arResult)-1)
	{
		$strReturn .= $arrow . '<a href="' . $arResult[$index]["LINK"] . '" title="' . $title . '">' . $title . '</a>';
	}
	else
	{
		$strReturn .= $arrow . '<span>' . $title . '</span>';
	}
}
$strReturn .= '</nav>';
return $strReturn;
