

$(function() {
    var headerNav = document.getElementById("header-nav");
    
    function fixTopBar(){
        if (Foundation.MediaQuery.is('small only')) {
            headerNav.classList.remove("top-bar-left");
            headerNav.classList.add("top-bar-right");
        } else {
            headerNav.classList.add("top-bar-left");
            headerNav.classList.remove("top-bar-right");
        }
    }

    fixTopBar();

    
    $(window).on('changed.zf.mediaquery', function(event, newSize, oldSize) {
        fixTopBar();
    });



    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('.next-arrow'),
        prevArrow: $('.previos-arrow')
    });




})




