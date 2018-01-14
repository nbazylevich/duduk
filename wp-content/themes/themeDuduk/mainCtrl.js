angular.module('myApp', [])
    .controller('mainCtrl', function ($scope, $log, $timeout) {

        $(document).ready(function(){
            $scope.curLang = getCookie("DUDUKIST_lang");
            if(!$scope.curLang){
                $scope.curLang = 'ru';
            }
            translatedContent($scope.curLang);
            $timeout(function(){})
        });



        $scope.clickLang = function(lang){
           $log.log("lang = ", lang);
            $scope.curLang = lang;
            document.cookie = "DUDUKIST_lang=" + lang;
            $log.log("getCookie(name) = ", getCookie("DUDUKIST_lang"));

            translatedContent($scope.curLang);
        };
        function getCookie(name) {
            var matches = document.cookie.match(new RegExp(
                "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
            ));
            return matches ? decodeURIComponent(matches[1]) : undefined;
        }

        function translatedContent(lang){
            $('.localization').each(function() {
                var el = $(this);
                var key = (el.attr('caption'));
                if(lang == 'ru'){
                    el.text($scope.ruLang[key]);
                } else {
                    el.text($scope.enLang[key]);
                }
            });
        }

        $scope.block4Tabs = [
            {indx: 1, name: "Школа дудука", img: "icon_schoolDuduk.png", active: false},
            {indx: 2, name: "Фестиваль дудука", img: "icon_festDuduk.png", active: true},
            {indx: 3, name: "Передача «Музыка души»", img: "icon_showAboutMusic.png", active: false},
            {indx: 4, name: "Концерты и выступления", img: "icon_concert.png", active: false}
        ];

        $scope.clickBlock4TabItem = function(item){
            for(var i = 0; i < $scope.block4Tabs.length; i++){
                $scope.block4Tabs[i].active = ($scope.block4Tabs[i].indx == item.indx)
            }
        };

        $scope.block6ActiveItem = 1;

        $scope.clickToRight = function(right){
           if(right){
               if($scope.block6ActiveItem < 3){
                   $scope.block6ActiveItem++;
               }
           } else {
               if(($scope.block6ActiveItem - 1) > 0){
                   $scope.block6ActiveItem--;
               }
           }

        };

        $scope.enLang = {
            'Delivery': 'EN:Доставка',
            'Payment': 'EN:Оплата',
            'Request a call': 'EN:Заказать звонок'
        };
        $scope.ruLang = {
            'Delivery': 'Доставка',
            'Payment': 'Оплата',
            'Request a call': 'Заказать звонок'
        };

    });



