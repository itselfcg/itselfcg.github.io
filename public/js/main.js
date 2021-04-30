
$(document).ready(function(){
    $(".navbar-toggler").click(function (e) {

        if ($("#navbar-toggler").hasClass("collapsed")) {
            $('body').css({'overflow':'hidden'});
        } else {
            $('body').css({'overflow':'auto'});
        }
    });
});
