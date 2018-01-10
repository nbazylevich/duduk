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



    <div class="block1 posRelative">
        <img src="<?php bloginfo('template_url')?>/picture/block1_fon.jpg" alt="block1_fon" class="block1_fon">
        <div class="content block1-content0">
            <div class="block1-content">
                <h1 class="mainTitle">Профессиональный дудук от лучших мастеров Армении с пожизненной гарантией</h1>

                <div class="row dudukDescr">
                    <div class="col-xs-4 white-space-nowrap">
                        <img src="<?php bloginfo('template_url')?>/picture/apricot.png" alt="icon_apricot">
                        <div class="inlineBlock dudukDescr_text paddingLeft10 white-space-normal">Изготовлен из  абрикосового дерева</div>
                    </div>
                    <div class="col-xs-4 white-space-nowrap">
                        <img src="<?php bloginfo('template_url')?>/picture/thumbUp.png" alt="icon_thumbUp">
                        <div class="inlineBlock dudukDescr_text paddingLeft10 white-space-normal">100% ручная  работа мастера</div>
                    </div>
                    <div class="col-xs-4 white-space-nowrap">
                        <img src="<?php bloginfo('template_url')?>/picture/note.png" alt="icon_note">
                        <div class="inlineBlock dudukDescr_text paddingLeft10 white-space-normal">Идеальное звучание  каждой ноты</div>
                    </div>
                </div>

                <div class="block1_buttons">
                    <div class="showVideo text-center cursor inlineBlock">
                        <img src="<?php bloginfo('template_url')?>/picture/orange-triangle.png" class="" alt="icon_orange-triangle">
                        &nbsp;&nbsp;&nbsp;Смотреть видео
                    </div>
                    &nbsp;&nbsp;&nbsp;
                    <div class="searchDuduk text-center cursor inlineBlock">
                        Подобрать инструмент
                    </div>
                </div>
                <br><br><br>
            </div>

        </div>
    </div>

    <div class="block2">
        <div class="content">
            <div class="row">
                <div class="col-xs-6 text-center">
                    <img src="<?php bloginfo('template_url')?>/picture/guaranteeLife.png" class="guaranteeLife" alt="guaranteeLife">
                </div>
                <div class="col-xs-6">
                    <br><br>
                    <h2 class="voiceArmenia">Армению можно  не только увидеть.  Её можно услышать  в звучани дудука</h2>

                    <br>
                    <p class="aboutDuduk">
                        Дудук — аутентичный армянский народный инструмент.
                        Он обладает  тёплым, мягким Дудук — аутентичный армянский народный инструмент.
                        Он обладает  тёплым, мягким, слегка приглушённым звуком, и бархатистым тембром.
                        Дудук также известен как «циранапох» (арм.ծիրանափող), что дословно может быть переведено как «душа абрикосового дерева»
                        <br><br>
                        В 2005 году музыка армянского дудука была провозглашена организацией ЮНЕСКО шедевром устного культурного,
                        а также духовного наследия человечества.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <div class="block3 posRelative">
        <img src="<?php bloginfo('template_url')?>/picture/block3_fon.jpg" alt="block1_fon" class="block1_fon">
        <div class="content block3_content0">
            <div class="row">
                <div class="col-xs-6">
                    <div class="block3_title">
                        Узнайте всё  о компании Dudukist  и дудуке за 2 минуты
                    </div>
                    <br><br>
                    <div  class="block3_text1">
                        «Наша миссия — сделать так,
                        чтобы  в мире звучал только настоящий истинный голос великолепного дудука»
                    </div>
                    <br>
                    <div class="block3_text2">
                        Сурен Багдасарян <br>
                        Сооснователь DUDUKIST
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>