<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<form name="search_form" class="search_form pie">
	<div class="search_form_wrapper">
		<input type="text" name="q" placeholder="<?=GetMessage("SEARCH");?>"/>
		<input type="submit" value="" formaction="<?=$arResult["FORM_ACTION"]?>"/>
	</div>
</form>
