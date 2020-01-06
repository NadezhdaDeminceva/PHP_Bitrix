<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>			

<?if($arResult["FORM_TYPE"] == "login"):?>
<nav class="top_menu grey inline-block">
	<a href="<?=$arResult['AUTH_REGISTER_URL']?>" class="register"><?=GetMessage("AUTH_REGISTER")?></a>
	<a href="<?=$arParams['AUTH_URL'] . '?backurl=' . $arResult['BACKURL']?>" class="auth"><?=GetMessage("auth_form_comp_auth")?></a>
</nav>
<?else:?>
<nav class="top_menu grey inline-block authorize">
    <span><?=GetMessage('HELLO')?>,</span>
    <a href="<?=$arParams['PERSONAL_PROFILE']?>"><b class="user_name"><?=$arResult["USER_NAME"]?></b></a>
    <a href="<?=$arResult['PROFILE_URL']?>"><?=GetMessage('AUTH_PROFILE')?></a>
    <a class="logout" href="<?=$APPLICATION->GetCurPageParam("logout=yes", array(
        "login",
        "logout",
        "register",
        "forgot_password",
        "change_password"));?>"><?=GetMessage('AUTH_LOGOUT_BUTTON')?></a>
</nav>
<?endif?>

