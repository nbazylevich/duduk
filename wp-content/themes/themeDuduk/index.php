<!DOCTYPE html>
<html ng-app="myApp">
<head>
    <meta charset="utf-8">
    <title>DUDUKIST</title>
    <?php wp_head() ?>
</head>
<body ng-controller="mainCtrl">
<header class="sticky">
    <div class="margin0_20">
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
    </div>


</header>
<div>

    <!--<div class="mySlider posRelative">
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
        <div class="margin0_20">
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
    </div>

    <div class="block2">
        <div class="margin0_20">
            <div class="content">
                <div class="row">
                    <div class="col-xs-6 text-center">
                        <img src="<?php bloginfo('template_url')?>/picture/guaranteeLife.png" class="guaranteeLife" alt="guaranteeLife">
                    </div>
                    <div class="col-xs-6">
                        <br><br>
                        <h2 class="voiceArmenia fontSize50">Армению можно  не только увидеть.  Её можно услышать  в звучани дудука</h2>

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
    </div>

    <br><br>
    <div class="block3 posRelative">
        <img src="<?php bloginfo('template_url')?>/picture/block3_fon.jpg" alt="block3_fon" class="block3_fon">
        <div class="margin0_20">
            <div class="content block3_content0">
                <div class="row">
                    <div class="col-xs-6">
                        <h3 class="block3_title fontSize50">
                            Узнайте всё  о компании Dudukist  и дудуке за 2 минуты
                        </h3>
                        <br><br>
                        <div class="block3_text1">
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

    <br><br>
    <div class="block4">
        <div class="margin0_20">
            <div class="content">
                <div class="text-center">
                    <img src="<?php bloginfo('template_url')?>/picture/heart.png" alt="heart">
                </div>
                <br>
                <div class="formItems">
                    <h3 class="block4_title text-center content2">
                        Dudukist создан фанатами дудука  и армянской культуры
                    </h3>
                </div>
                <div class="block4_text1 text-center content3">
                    Мы буквально живём этой музыкой.
                    Посмотрите наши проекты, связанные с популяризацией дудука в России И СНГ
                </div>
                <br><br>

                <div class="block4_tabs text-center">
                    <ul class="list-unstyled">
                        <li class="inlineBlock block4_tabs_item cursor"
                            ng-repeat="item in block4Tabs"
                            ng-click="clickBlock4TabItem(item)"
                            ng-class="{'active': item.active}">
                            <img src="<?php bloginfo('template_url')?>/picture/{{item.img}}" alt="icons">
                            &nbsp;<span ng-bind="item.name" title="<?php bloginfo('template_url')?>/picture/{{item.img}}"></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="block4_tab2_content posRelative">
            <img src="<?php bloginfo('template_url')?>/picture/block4_fon.jpg" alt="block4_fon" class="block4_fon">
            <div class="margin0_20">
                <div class="content">
                    &nbsp;
<!--                    <div class="block4_tab2_content1">-->
<!--                        Проводим ежегодный Московский  международный фестиваль  дудука-->
<!--                    </div>-->

                </div>
            </div>
        </div>

        <br><br>
        <div class="block5">
            <div class="margin0_20">
                <div class="content">
                    <h3 class="block5_title text-center">Изготовление дудука — искусство,  доступное избранным мастерам</h3>
                    <br>
                    <div class="block5_text1 content2 text-center">
                        Инструмент изготавливают величайшие мастера своего дела  Карен Мукаелян и Манвел Мнацаканян.
                        Технология изготовления отточена веками и передаётся от учителя к ученику лично.
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-xs-6 text-center ">

                            <div>
                                <img src="<?php bloginfo('template_url')?>/picture/master1.png" alt="master1">
                            </div>

                            <div class="master">
                                <div class="master_text">
                                    <h4 class="masterName">Мастер Манвел  Мнацаканян</h4>
                                    <div class="aboutMaster">
                                        Посвятил 40 лет жизни искусству дудука. В 1985 работал подмастерьем у мастера
                                        Георгия Минасова, который  обучал его изготовлению дудука. Манвел изготавливает лучшие дудуки и трости для легендарных
                                        армянских музыкантов: Георгия Минасова, Дживана Гаспаряна, Геворга Дабагяна.
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xs-6 text-center">
                            <img src="<?php bloginfo('template_url')?>/picture/master2.png" alt="master2">

                            <div class="master">
                                <div class="master_text">
                                    <h4 class="masterName">Мастер Карен Мукаелян</h4>
                                    <div class="aboutMaster">
                                        Занимается изготавливанием дудуков  более 25 лет.  После усовершенствований и поправок тембра, тональности и прочности,
                                        дудуки Карена Мукаеляна являются одним изз самых профессиональных инструментов на рынке.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="text-center">
                        <div class="searchDuduk text-center cursor inlineBlock">
                            Подобрать инструмент
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <br><br>
        <div class="block6 sliderImg{{block6ActiveItem}}" >
            <div class="margin0_20">
                <div class="content" style="padding-left: 10%">
                    <div class="mySlider posRelative">
                        <div style="position: absolute">
                            <h3 class="block6_title">
                                Отзывы профессиональных музыкантов о нашем  инструменте
                            </h3>
                            <br><br><br>
                            <div class="slider_toggle inlineBlock posRelative">
                                <div class="sliderArrowLeft inlineBlock text-center cursor" ng-click="clickToRight(false)">
                                    <img src="<?php bloginfo('template_url')?>/picture/caret-left.png" alt="caret-left">
                                </div>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="slider_number inlineBlock text-center"> {{block6ActiveItem}}/3 </div>
                                <div class="sliderArrowRight inlineBlock text-center cursor" ng-click="clickToRight(true)">
                                    <img src="<?php bloginfo('template_url')?>/picture/caret-right.png" alt="caret-right">
                                </div>
                            </div>
                        </div>
                        <div class="blockImgs">
                            <div class="sliderImg inlineBlock  active" ng-if="block6ActiveItem==1">
                                <div style="margin-top: 400px">
                                    <br><br>
                                    <div class="block6_text1">
                                        «На сегодняшний день Карен Мукаелян — лучший мастер по изготовлению дудуков:
                                        звучных, эргономичных и долговечных. Его инструменты зарекомендовали себя на больших сценах,
                                        в студиях звукозаписи и в руках большинства дудукистов мира»
                                    </div>
                                    <br>
                                    <div class="block6_text2">
                                        Дудукист Argishty
                                    </div>
                                    <br><br><br><br>
                                </div>
                            </div>
                            <div class="sliderImg inlineBlock " ng-if="block6ActiveItem==2">
                                <div style="margin-top: 400px">
                                    <br><br>
                                    <div class="block6_text1">
                                        «На сегодняшний день в Армении много мастеров по изготовлению дудука. Но только избранным доступно
                                        сделать превосходный по звучанию инструмент. Такими мастерами являются Карен Мукаелян и Манвел Мнацаканян»
                                    </div>
                                    <br>
                                    <div class="block6_text2">
                                        Рафаэль Мкртчан профессиональный дудукист
                                    </div>
                                    <br><br><br><br>
                                </div>
                            </div>
                            <div class="sliderImg inlineBlock " ng-if="block6ActiveItem==3">
                                <div style="margin-top: 400px">
                                    <br><br>
                                    <div class="block6_text1">
                                        «При изготовлении любого своего инструмента,  легендарный мастер Карен Мукаелян отдает частицу себя и вкладывает душу»
                                    </div>
                                    <br>
                                    <div class="block6_text2">
                                        Армен Ованнесян профессиональный дудукист
                                    </div>
                                    <br><br><br><br>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>