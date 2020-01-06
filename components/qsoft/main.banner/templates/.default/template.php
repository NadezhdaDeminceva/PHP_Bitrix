<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="slider">
    <ul class="bxslider">
        <?foreach ($arResult["BANNERS"] as $banner) :?>
            <li>
                <div class="banner">
                    <?=$banner?>
                </div>
            </li>
        <?endforeach;?>
    </ul>
</div>
