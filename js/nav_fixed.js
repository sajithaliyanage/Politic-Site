/**
 * Created by project on 8/31/2016.
 */
$(document).ready(function() {

    $(window).scroll(function () {
        //if you hard code, then use console
        //.log to determine when you want the
        //nav bar to stick.



        //console.log($(window).scrollTop())
        if ($(window).scrollTop() > 165) {
            $('#nav_bar_top').addClass('navbar-fixed');
        }
        if ($(window).scrollTop() < 166) {
            $('#nav_bar_top').removeClass('navbar-fixed');
        }
    });
});