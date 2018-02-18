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
    

    
    // init slick
    if( $('.articles-carousel') ){
        $('.articles-carousel').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            dots: false,
            nextArrow: $('.next-arrow'),
            prevArrow: $('.previos-arrow'),
            // mobileFirst: true,
            responsive: [
                {
                breakpoint: 800,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
        });
    }

    if( $('.gallery-carousel') ){
        $('.gallery-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            nextArrow: $('.next-arrow'),
            prevArrow: $('.previos-arrow'),
            // mobileFirst: true,
        });
    }

    

    if( $('.gift-sertificates-carousel') ){
        $('.gift-sertificates-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1
            // dots: true,
            // nextArrow: $('.next-arrow'),
            // prevArrow: $('.previos-arrow'),
            // mobileFirst: true,
        });
    }



    if( $('.licences-carousel') ){
        $('.licences-carousel').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            nextArrow: $('.next-arrow'),
            prevArrow: $('.previos-arrow'),
            // mobileFirst: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 4
                }
                },
                {
                breakpoint: 700,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 550,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 2
                }
                }
            ]
        });
    }


    if( $('.certificates-carousel') ){
        $('.certificates-carousel').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            nextArrow: $('.next-arrow2'),
            prevArrow: $('.previos-arrow2'),
            // mobileFirst: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 3
                }
                },
                {
                breakpoint: 620,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 420,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 2
                }
                }
            ]
        });
    }
    
    

    
    if( $('.shares-carousel') ){
        $('.shares-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: $('.next-arrow'),
            prevArrow: $('.previos-arrow'),        
            // mobileFirst: true,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 700,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
        });
    }


    if( $('.reviews-carousel') ){
        $('.reviews-carousel').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: $('.next-arrow2'),
            prevArrow: $('.previos-arrow2'),
            // mobileFirst: true,
            responsive: [
                {
                breakpoint: 790,
                settings: {
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 2
                }
                },
                {
                breakpoint: 550,
                settings: {
                    // centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
                }
            ]
        });
    }


    if( $('.masters-carousel') ){
        $('.masters-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // mobileFirst: true,
            appendDots: $('.single-master'),
            // dots: true,
            nextArrow: $('.next-arrow3'),
            prevArrow: $('.previos-arrow3')
        });
    }

    
    if( $('.masters-list-imges') ){
        $('.masters-list-imges').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            // mobileFirst: true,
            // dots: true,
            nextArrow: $('.next-arrow4'),
            prevArrow: $('.previos-arrow4')
        });
    }



    if( $(".single-master") ){
        $(".single-master").click(function(e){

            var slideIndex = $(this).attr('data-slick-index');
            $( '.masters-carousel' ).slick( "slickGoTo", parseInt(slideIndex) );
        });
    }

    $('.masters-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        $('.single-master').removeClass("single-master-selected");
        $('.single-master[data-slick-index='+ nextSlide + ']').addClass("single-master-selected");
    });


    // slick arrow styles
    function sliderArrows(nextArrow, prevArrow) {
        var nextArrow = document.getElementsByClassName(nextArrow)[0];
        var previosArrow = document.getElementsByClassName(prevArrow)[0];
    
        if( nextArrow && previosArrow ){
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
        }
    }


        sliderArrows('next-arrow', 'previos-arrow');
        sliderArrows('next-arrow2', 'previos-arrow2');
        sliderArrows('next-arrow3', 'previos-arrow3');
        sliderArrows('next-arrow4', 'previos-arrow4');
   









    

    var $grid = $('.grid').masonry({
        // options
        itemSelector: '.grid-item',
        columnWidth: 240
      });


    if($grid){
        $grid.imagesLoaded().progress( function() {
            $grid.masonry('layout');
        });


        $(".grid-item").mouseover(function(){
            $(this).find( ".modal" ).css('display', 'block');
        });

        $(".grid-item").mouseout(function(){
            $(this).find( ".modal" ).css('display', 'none');
        });
    }

})




