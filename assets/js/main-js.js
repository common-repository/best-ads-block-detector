
(function ($) {

    $(document).on('ready', function () {

        const detect = document.getElementById('ads-classes');

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
                document.body.classList.add("remove-scrolling");
            } else {
                detect.parentNode.removeChild(detect);
                if ($('body').hasClass('remove-scrolling')) {
                    document.body.classList.remove("remove-scrolling");
                }
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