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


    var nextArrow = document.getElementsByClassName('next-arrow')[0];
    var previosArrow = document.getElementsByClassName('previos-arrow')[0];

    nextArrow.addEventListener('mouseover', function(e){
        var arr = e.target.src.split('.');
        e.target.src = arr[0] + '2.png';
    });

    nextArrow.addEventListener('mouseout', function(e){
        var arr = e.target.src.split('.');
        e.target.src = arr[0].slice(0, -1) + '.png';
    });
    
    
    previosArrow.addEventListener('mouseover', function(e){
        var arr = e.target.src.split('.');
        e.target.src = arr[0] + '1.png';
    });

    previosArrow.addEventListener('mouseout', function(e){
        var arr = e.target.src.split('.');
        e.target.src = arr[0].slice(0, -1) + '.png';
    });
    



})




