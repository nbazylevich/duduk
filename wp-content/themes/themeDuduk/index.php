<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>DUDUKIST</title>
    <?php wp_head() ?>
</head>
<body ng-controller="mainCtrl">
<header>
    <div class="content">
        <img src="<?php bloginfo('template_url')?>/picture/logo.png" class="logo" alt="logo">

        <div class="header-main-text inlineBlock verticalAlignMiddle">
            <span>Интернет-магазин профессиональных <br>
            музыкальных инструментов </span>
        </div>

        <div class="pull-right">
            <span class="header-delivery-payment localization" caption="Delivery"></span>
            <span class="header-delivery-payment localization" caption="Payment"></span>
            <span class="header-phone">+7 (499) 346-81-28</span>
            <div class="inlineBlock header-req-call text-center cursor">
                <span class="localization" caption="Request a call"></span>
            </div>
            <div class="header-langs inlineBlock">
                <span class="header-lang"
                      ng-class="{'activeLang': curLang == 'ru', 'cursor': curLang != 'ru'}"
                      ng-click="curLang != 'ru' ? clickLang('ru') :''">RU</span>
                <span class="header-lang marginLeft10"
                      ng-class="{'activeLang': curLang == 'en', 'cursor': curLang != 'en'}"
                      ng-click="curLang != 'en' ? clickLang('en') :''">EN</span>
            </div>
        </div>
    </div>

</header>
<div>

 <!--   <div class="mySlider posRelative">
        <div class="blockImgs">
            <img src="<?php /*bloginfo('template_url')*/?>/picture/1.jpg" class="sliderImg active" alt="">
            <img src="<?php /*bloginfo('template_url')*/?>/picture/2.jpg" class="sliderImg" alt="">
            <img src="<?php /*bloginfo('template_url')*/?>/picture/3.jpg" class="sliderImg" alt="">
        </div>
        <div class="sliderArrowRight text-center cursor">></div>
        <div class="sliderArrowLeft text-center cursor"><</div>
        <div class="sliderPoint">
            <div></div>
        </div>
    </div>-->



<!--    <div class="block1">
        <div class="content">
            Профессиональный дудук от лучших мастеров Армении с пожизненной гарантией
        </div>
    </div>-->
</div>