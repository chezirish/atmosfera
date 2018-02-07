<?php
/*
Template Name: Main
*/
get_header(); ?>

<section class="section-info">
    <div class="row">
        <div class="medium-4 large-4 columns">   
            <img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.png" alt="">

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
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/im.png">
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
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/im.png">
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
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/im.png">
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
                        <img class="float-left" src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/im.png">
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
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/line.png" alt="line">
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
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
        <div class="shares-carousel">
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>            
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div>            
            <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
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
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/1.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/4.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/3.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/5.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item height-auto">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/6.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div>
            <div class="grid-item height-auto last-block grid-item--width2">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/2.jpg" alt="">
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
            <img class="next-arrow2" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
            <img class="previos-arrow2" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
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
                <a href="#" class="button visited">СМОТРЕСТЬ ВСЕ ОТЗЫВЫ</a>
            </div>
        </div>
</section>

<section class="feedback">
    <h3>ЕСЛИ ЕСТЬ ВОПРОСЫ, ПОЖЕЛАНИЯ К НАШЕЙ РАБОТЕ</h3>
    <div class="feedback-wrapper clearfix">
        <div class="form-feedback-wrapper float-right">
            <form class="">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                    <div class="medium-4 cell">
                        <input type="text" placeholder="Ваше имя">
                    </div>
                    <div class="medium-4 cell">
                        <input type="text" placeholder="Телефон">
                    </div>
                    <div class="medium-4 cell">
                        <input type="text" placeholder="Email (не обязательно)">
                    </div>
                    </div>
                </div>

                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                    <div class="medium-8 cell">
                        <input type="text" placeholder="Введите сообщение">
                    </div>
                    <div class="medium-4 cell">
                        <input type="submit" class="button" value="Отправить сообщение">
                    </div>
                </div>
            </form>
        </div>        
    </div>
</section>

<section class="our-masters">
    <h3>МЫ ГОРДИМСЯ НАШИМИ МАСТЕРАМИ И ИХ РАБОТАМИ:</h3>
        <div class="masters-wrapper-wrapper">
            <div class="masters-wrapper">
                <img class="next-arrow3" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
                <img class="previos-arrow3" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
                <div class="masters-carousel">
                    <div class="masters-slick-item clearfix">
                            <div class="float-left master-img-wrapper">
                                <img class="master-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_1.jpg" alt="women">
                            </div>
                            <div class="masters-text float-left">
                                <h4>Имя Фамилия</h4>
                                <p class="masters-title">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas, molestias odio nobis dolorum alias tenetur ad voluptatem dolore officia sint sequi iure ea vitae ipsam commodi, qui, rem cupiditate?</p>
                            </div>
                        <div class="masters-button">
                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                        </div>
                    </div>
                    <div class="masters-slick-item clearfix">
                            <div class="float-left master-img-wrapper">
                                <img class="master-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_2.jpg" alt="women">
                            </div>
                            <div class="masters-text float-left">
                                <h4>Имя Фамилия</h4>
                                <p class="masters-title">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas, molestias odio nobis dolorum alias tenetur ad voluptatem dolore officia sint sequi iure ea vitae ipsam commodi, qui, rem cupiditate?</p>
                            </div>
                        <div class="masters-button">
                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                        </div>
                    </div>
                    <div class="masters-slick-item clearfix">
                            <div class="float-left master-img-wrapper">
                                <img class="master-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_3.jpg" alt="women">
                            </div>
                            <div class="masters-text float-left">
                                <h4>Имя Фамилия</h4>
                                <p class="masters-title">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas, molestias odio nobis dolorum alias tenetur ad voluptatem dolore officia sint sequi iure ea vitae ipsam commodi, qui, rem cupiditate?</p>
                            </div>
                        <div class="masters-button">
                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                        </div>
                    </div>
                    <div class="masters-slick-item clearfix">
                            <div class="float-left master-img-wrapper">
                                <img class="master-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_4.jpg" alt="women">
                            </div>
                            <div class="masters-text float-left">
                                <h4>Имя Фамилия</h4>
                                <p class="masters-title">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas, molestias odio nobis dolorum alias tenetur ad voluptatem dolore officia sint sequi iure ea vitae ipsam commodi, qui, rem cupiditate?</p>
                            </div>
                        <div class="masters-button">
                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                        </div>
                    </div>
                    <div class="masters-slick-item clearfix">
                            <div class="float-left master-img-wrapper">
                                <img class="master-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_5.jpg" alt="women">
                            </div>
                            <div class="masters-text float-left">
                                <h4>Имя Фамилия</h4>
                                <p class="masters-title">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita quas, molestias odio nobis dolorum alias tenetur ad voluptatem dolore officia sint sequi iure ea vitae ipsam commodi, qui, rem cupiditate?</p>
                            </div>
                        <div class="masters-button">
                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                        </div>
                    </div>
                </div>
            <div class="masters-list">
                <p class="masters-list-title">Наши мастера</p>
                <div class="masters-list-imges">
                    <div class="single-master">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_1.jpg" alt="women">
                    </div>
                    <div class="single-master">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_2.jpg" alt="women">
                    </div>
                    <div class="single-master">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_3.jpg" alt="women">
                    </div>
                    <div class="single-master">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_4.jpg" alt="women">
                    </div>
                    <div class="single-master single-master-last">
                        <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_5.jpg" alt="women">
                    </div>
                </div>
            </div> 
            </div>
        </div>
</section>

<section class="seo-text">
    <h1>ЗАГОЛОВОК SEO-текста</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis, ex eius corrupti libero nisi ratione. Quisquam harum aspernatur maxime numquam, iste magni incidunt, cum sequi animi doloribus soluta iure inventore ipsa, fugit voluptatum exercitationem molestias illo sapiente. Qui ipsum iusto, amet excepturi non sapiente placeat deleniti, dolores nisi consequatur nesciunt voluptatem nostrum assumenda dolor accusantium pariatur voluptate? Inventore, dolor quia nemo eius reiciendis, libero ipsa sunt impedit, velit dolore cumque perspiciatis ut veritatis totam reprehenderit! Eius exercitationem neque quos reprehenderit! Voluptas, eum nisi. Blanditiis laborum, labore repellat tempora reprehenderit non! Dolor dolore ex facilis repudiandae omnis consectetur eos dolorem.</p>
</section>


<section class="maps">
    <?php the_field('map'); ?>
</section>

<?php get_footer();
