$(document).ready(function () {
    $(window).bind("resize", function () {
        if ($(this).width() < 1080) {
            $('.mobile-hidden').hide();
            $('.mobile-shown').show();
            
        } else {
            $('.mobile-hidden').show();
            $('.mobile-shown').hide();
            
        }
        }).trigger('resize');

    

});
document.addEventListener("touchstart", function(){}, true);
