<?php
AddEventHandler("main", "OnAfterUserRegister", Array("SendMailToNewUser", "OnAfterUserRegisterHandler"));
class SendMailToNewUser
{
    function OnAfterUserRegisterHandler($arFields)
    {
        $arEventFields = array(
        	"EMAIL" => $arFields["EMAIL"],
        	"LOGIN" => $arFields["LOGIN"],
        	"NAME" => $arFields["NAME"],
        	"LAST_NAME" => $arFields["LAST_NAME"],
        );
        CEvent::Send("NEW_USER_CONFIRM", "s1", $arEventFields, "N", "5");
    }
}

AddEventHandler("main", "OnAfterUserAuthorize", Array("SendMailToUser", "OnAfterUserAuthorizeHandler"));
class SendMailToUser
{
    function OnAfterUserAuthorizeHandler($arUser)
    {
        $arEventFields = array(
        	"EMAIL" => $arUser["user_fields"]["EMAIL"],
        	"LOGIN" => $arUser["user_fields"]["LOGIN"],
        	"LAST_ENTRANCE" => date("Y.d.m H:i:s"),
        );
        CEvent::Send("USER_AUTHORIZATION", "s1", $arEventFields, "N", "85");
    }
}

