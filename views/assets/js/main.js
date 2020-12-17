/* Back to top */
jQuery(window).scroll(function(){
    if (window.pageYOffset > 100){
        jQuery(".go-to-top").css("display","flex");
        jQuery(".wapper_menu").addClass("wapper_menu_active");
    } else {
        jQuery(".go-to-top").css("display","none");
        jQuery(".wapper_menu").removeClass("wapper_menu_active");
    }
});

jQuery(document).ready(function ($) {
    "use strict";
    /* Scroll to top */
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/* Show/Hide search form */
jQuery( document ).ready(function() {
    jQuery(".search_button").on('click', function (event) {
        jQuery('.navbar_menu, .search_button').addClass('search_hide');
        jQuery('.search_form').addClass('search_show');
    });
    jQuery(".close_button_search").on('click', function (event) {
        jQuery('.navbar_menu, .search_button').removeClass('search_hide');
        jQuery('.search_form').removeClass('search_show');
    });
})

/* Mobile menu */
jQuery( document ).ready(function() {
    jQuery(".burger").on('click', function (event) {
        event.preventDefault();
        if (jQuery('.burger').hasClass('burger_active')) {
            jQuery('.burger').removeClass('burger_active');
            jQuery('.nav-menu-mobile').removeClass('menu-mobile-active');
        } else {
            jQuery('.burger').addClass('burger_active');
            jQuery('.nav-menu-mobile').addClass('menu-mobile-active');
        }
        return false;
    });
})

/*Tab*/
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabs-content");
    for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("tab-active", "");
    }
    document.getElementById(cityName).style.display = "block";
evt.currentTarget.className += " tab-active";
}

jQuery(document).ready(function() {
    jQuery(".nav-menu-mobile .menu-item-has-children").append("<i class='fas fa-plus'></i>");
    jQuery(".nav-menu-mobile .menu-item-has-children > i").attr("data-active", "0");
    jQuery(".nav-menu-mobile .menu-item-has-children > i").click(function(){
        data = jQuery(this).attr("data-active");
        li = jQuery(this).closest(".menu-item-has-children");
        if(data == '0') {
            jQuery(this).attr("data-active", "1");
            jQuery(this).addClass("i-rote");
            jQuery(this).addClass("fa-minus");
            jQuery(this).removeClass("fa-plus");
            jQuery(li).children(".sub-menu").show();
            jQuery(li).children(".sub-menu").addClass("data-active");

        } else {
            jQuery(this).attr("data-active", "0");
            jQuery(li).children(".sub-menu").hide();
            jQuery(this).removeClass("i-rote");
            jQuery(this).removeClass("fa-minus");
            jQuery(this).addClass("fa-plus");
        }
    });
});