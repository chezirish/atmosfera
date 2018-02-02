<?php
/*
Template Name: Main
*/
get_header(); ?>

<section class="section-info">
    <div class="row">
        <div class="medium-4 large-4 columns">   
            <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/logo.png" alt="">

            <div class="orbit clearfix" data-auto-play="false" role="region" data-orbit>
                <div class="orbit-wrapper">
                    <!-- <div class="orbit-controls">
                        <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                        <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                    </div> -->
                    <ul class="orbit-container">
                    <li class="is-active orbit-slide">
                        <figure class="orbit-figure clearfix">
                        <div class="header-text">
                            <p>Высший уровень <br>Вашего преображения</p>
                        </div>
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/im.png">
                        <div class="slider-text float-left">
                            <p>Только лучшие бренды <br> косметики экстра - класса</p>
                        </div>
                        </figure>
                    </li>
                    <li class="orbit-slide">
                        <figure class="orbit-figure clearfix">
                        <div class="header-text">
                            <p>Высший уровень <br>Вашего преображения</p>
                        </div>
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/im.png">
                        <div class="slider-text float-left">
                            <p>Только лучшие бренды <br> косметики экстра - класса</p>
                        </div>
                        </figure>
                    </li>
                    <li class="orbit-slide">
                        <figure class="orbit-figure clearfix">
                        <div class="header-text">
                            <p>Высший уровень <br>Вашего преображения</p>
                        </div>
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/im.png">
                        <div class="slider-text float-left">
                            <p>Только лучшие бренды <br> косметики экстра - класса</p>
                        </div>
                        </figure>
                    </li>
                    <li class="orbit-slide">
                        <figure class="orbit-figure clearfix">
                        <div class="header-text">
                            <p>Высший уровень <br>Вашего преображения</p>
                        </div>
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/im.png">
                        <div class="slider-text float-left">
                            <p>Только лучшие бренды <br> косметики экстра - класса</p>
                        </div>
                        </figure>
                    </li>
                    </ul>
                </div>
                <nav class="orbit-bullets float-left">
                    <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
                    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
                </nav>
            </div>
        </div>
        <div class="medium-5 large-4 columns">
            <p class="footer-phone"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i></span>8 812 717 0037 <span class="address"><i class="fas fa-map-marker"></i></span>Невский пр., 166</p>
            <p class="info-time"><span class="address"><i class="far fa-clock"></i></span> c 10:00 до 22:00, без выходных</p>
            <div class="social-icons">
                <ul class="menu align-center">
                    <li><a href="#"><i class="fab fa-vk"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="info-form">
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/line.png" alt="line">
                <p class="title-form">оставьте заявку</p>
                <form class="header-form" action="">
                    <input type="text" placeholder="Имя">
                    <input type="text" placeholder="Телефон">
                    <input type="submit" class="button" value="ЗАПИСАТЬСЯ">
                </form>
                <p class="text-form">Администратор перезвонит Вам в ближайшее время</p>
            </div>     
        </div>
    </div>
</section>

<section class="shares">
    <div class="section-title">
        <span>наши акции</span>
    </div>
    <div class="shares-wrapper">
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/2_2.png" alt="arrow">
        <div class="shares-carousel">
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>            
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>            
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
        </div>
    </div>
</section>

<section class="services">
    <div class="section-title">
        <span>Галерея услуг</span>
    </div>
    <div class="services-wrapper">
        <div class="grid">
            <div class="grid-sizer"></div>
            <div class="grid-item grid-item--width2">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/1.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/4.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/3.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/5.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item height-auto">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/6.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item height-auto last-block grid-item--width2">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/src/assets/images/img/gallery/2.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
        </div>
        <div class="services-button">
            <a href="#" class="button">СМОТРЕСТЬ ВСЕ УСЛУГИ</a>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="section-title">
        <span>отзывы клиентов</span>
    </div>
        <div class="reviews-wrapper">
            <img class="next-arrow1" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/1_1.png" alt="arrow">
            <img class="previos-arrow2" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/2_2.png" alt="arrow">
            <div class="reviews-carousel">
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
                <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div>
            </div>
            <div class="reviews-button">
                <a href="#" class="button visited">СМОТРЕСТЬ ВСЕ УСЛУГИ</a>
            </div>
        </div>
</section>

<?php get_footer();
