

(function ($) {



    $(document).on('ready', function () {



        const detect = document.getElementById('ads-classes');

        var scroll_style_element;

        function disable_scrolling(){

        // Create a style sheet we will only use to disable scrolling :
        scroll_style_element = document.createElement('style');
        document.head.appendChild(scroll_style_element);
        const scroll_style_sheet = scroll_style_element.sheet;

        scroll_style_sheet.insertRule('html{height:100%;overflow-y:hidden;}', scroll_style_sheet.cssRules.length);
        }

        function enable_scrolling(){
        if( scroll_style_element ) document.head.removeChild(scroll_style_element);
        }



        function alert() {

            $('.dialog-root').css("cssText", "display: flex !important;");

        }



        try {



            let adClasses = ["ad", "ads", "adsbox", "doubleclick", "ad-placement", "adsbygoogle", "ad-placeholder", "adbadge", "BannerAd"];



            for (let item of adClasses){

            detect.classList.add(item);

            }



            let getProperty = window.getComputedStyle(detect).getPropertyValue("display");



            if (getProperty == "none") {

                alert();

                disable_scrolling();

            } else {

                detect.parentNode.removeChild(detect);

            }



            $(".buttons").click(function(){

                location.reload(true);

            });



        } catch (error) {

            console.log(error);

            detect.parentNode.removeChild(detect);

        }



    });



})(jQuery);