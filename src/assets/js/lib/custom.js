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



    $('.shares-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('.next-arrow'),
        prevArrow: $('.previos-arrow')
    });

    $('.reviews-carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: $('.next-arrow1'),
        prevArrow: $('.previos-arrow2')
    });





    var nextArrow = document.getElementsByClassName('next-arrow')[0];
    var previosArrow = document.getElementsByClassName('previos-arrow')[0];

    nextArrow.addEventListener('mouseover', function(e){
        var string = e.target.src.slice(0, -4);
        e.target.src = string + '2.png';
    });

    nextArrow.addEventListener('mouseout', function(e){
        var string = e.target.src.slice(0, -5);
        e.target.src = string + '.png';
    });
    
    
    previosArrow.addEventListener('mouseover', function(e){
        var string = e.target.src.slice(0, -4); 
        e.target.src = string + '1.png';
    });

    previosArrow.addEventListener('mouseout', function(e){
        var string = e.target.src.slice(0, -5);
        e.target.src = string + '.png';
    });



    
    var nextArrow1 = document.getElementsByClassName('next-arrow1')[0];
    var previosArrow2 = document.getElementsByClassName('previos-arrow2')[0];

    nextArrow1.addEventListener('mouseover', function(e){
        var string = e.target.src.slice(0, -4);
        e.target.src = string + '2.png';
    });

    nextArrow1.addEventListener('mouseout', function(e){
        var string = e.target.src.slice(0, -5);
        e.target.src = string + '.png';
    });
    
    
    previosArrow2.addEventListener('mouseover', function(e){
        var string = e.target.src.slice(0, -4); 
        e.target.src = string + '1.png';
    });

    previosArrow2.addEventListener('mouseout', function(e){
        var string = e.target.src.slice(0, -5);
        e.target.src = string + '.png';
    });
    







    

    var $grid = $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 240
      });

    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });




    $(".grid-item").mouseover(function(){
        $(this).find( ".modal" ).css('display', 'block');
    });

    $(".grid-item").mouseout(function(){
        $(this).find( ".modal" ).css('display', 'none');
    });


})




