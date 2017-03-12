/*--- Settings for Appland ---*/

/*--- hcSticky ---*/
$('.container--sticky').hcSticky({
    noContainer: true,
    wrapperClassName: 'sticky-container',
    className: 'container--sticky-on',
    innerTop: 0
});
/*--- hcSticky ---*/

/*--- One Page Nav ---*/
$('.main-nav_list').onePageNav({
    currentClass: 'active',
    changeHash: false,
    scrollSpeed: 1250,
    scrollThreshold: 0.01,
    easing: 'swing'
});
/*--- One Page Nav ---*/

/*--- Menu Button ---*/
$(function() {
    var pull = $('.main-nav_button');
        menu = $('nav ul');
        menuHeight = menu.height();
        $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });
    $(window).resize(function(){
        var w = $(window).width();
        if(w > 800 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});
/*--- Menu Button ---*/

/*--- ElasticSlideshow ---*/
$(function() {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 7500,
        titlesFactor: 0,
        thumbMaxWidth: 210
    });
});
/*--- ElasticSlideshow ---*/

/*--- Latest Tweets ---*/
jQuery(function($){
    $(".tweet").tweet({
        username: "envato",
        join_text: "auto",
        count: 1,
        loading_text: "Loading Tweets ..."
    });
});
/*--- Latest Tweets ---*/

/*--- Google Maps ---*/
map = new GMaps({
    div: '#google-maps',
    lat: 56.315049,
    lng: 43.991186
});
map.addMarker({
    lat: 56.315049,
    lng: 43.991186,
    title: "Ploshchad' Maksima Gor'kogo",
});
/*--- Google Maps ---*/