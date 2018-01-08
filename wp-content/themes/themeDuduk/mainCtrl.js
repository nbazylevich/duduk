angular.module('myApp', [])
    .controller('mainCtrl', function ($scope, $log, $timeout) {

        $(document).ready(function(){
            $scope.curLang = getCookie("DUDUKIST_lang");
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



