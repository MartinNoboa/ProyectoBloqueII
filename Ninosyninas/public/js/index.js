$(document).ready(function () {
    $(window).bind("resize", function () {
        if ($(this).width() < 1080) {
            $('#user-icon').hide();
        } else {
            $('#user-icon').show();
        }
        }).trigger('resize');

    

});
document.addEventListener("touchstart", function(){}, true);
