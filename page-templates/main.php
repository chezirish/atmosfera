<?php
/*
Template Name: Main
*/
get_header(); ?>

<section class="section-info">
    <div class="row">
        <div class="medium-4 large-4 columns">   
        <a href="/atmosfera"><img class="header-logo" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/logo.png" alt=""></a>

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
        <div class="medium-5 large-4 columns main__form">
            <p class="footer-phone"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i></span><?php the_field('phone', get_option( 'page_on_front' ));  ?> <span class="address"><i class="fas fa-map-marker"></i></span><?php the_field('address', get_option( 'page_on_front' ));  ?></p>
            <p class="info-time"><span class="address"><i class="far fa-clock"></i></span><?php the_field('time', get_option( 'page_on_front' ));  ?></p>
            <div class="social-icons">
                <ul class="menu align-center">
                    <li><a target="_blank" href="<?php the_field('vk-link', get_option( 'page_on_front' ));  ?>"><i class="fab fa-vk"></i></a></li>
                    <li><a target="_blank" href="<?php the_field('fb-link', get_option( 'page_on_front' ));  ?>"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a target="_blank" href="<?php the_field('inst-link', get_option( 'page_on_front' ));  ?>"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
            <div class="info-form">
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/line.png" alt="line">
                <p class="title-form">оставьте заявку</p>
                <!--<form class="header-form" action="">-->
                <!--    <input required type="text" placeholder="Имя">-->
                <!--    <input required type="number" placeholder="Телефон">-->
                <!--    <input required type="submit" class="button" value="ЗАПИСАТЬСЯ">-->
                <!--</form>-->
                <?php echo do_shortcode( '[contact-form-7 id="319" title="Контактная форма на главной 1"]' ); ?>
                <p class="text-form">Администратор перезвонит Вам в ближайшее время</p>
                <span class="politics"> 
                <span class="politics"> 
                    <?php if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                        <p><a target="_blank" href="<?php the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                    <?php endif; ?>
                </span>   
                </span>   
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
            <!-- <div class="slick-item">
                <p class="slick-text">Визаж <span class="slick-span">-10%</span></p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz3.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="#">Подробнее</a></p>
            </div> -->


            <?php 
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'post_type' => 'shares-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                
                    $imageContent = get_the_content();
                    $stripped = strip_tags($imageContent, '<p>');
                    
                     ?>


                        <div class="slick-item">
                            <p class="slick-text"><?php the_field('title'); ?>  <span class="slick-span"><?php the_field('red-span'); ?></span></p>
                            <?php the_post_thumbnail('', array('class' => "",)) ?>
                            <p class="slick-link-wrapper"><a class="slick-link" href="<?php the_permalink(); ?>">Подробнее</a></p>
                        </div>

                    <?php

                endwhile;
                wp_reset_postdata(); 
            endif;
            ?>

        </div>
    </div>
</section>

<section class="services">
    <div class="section-title">
        <span>Галерея услуг</span>
    </div>
    <div class="services-wrapper">
        <div class="grid">
            <!-- <div class="grid-item">
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
            <div class="grid-item">
                <a href="#">
                    <div class="modal">
                        <p class="modal-title">КОСМЕТАЛОГИЯ</p>
                        <p>Узнать подробнее</p>
                    </div>
                </a>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/6.jpg" alt="">
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
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/img/gallery/7.jpg" alt="">
                <p class="name-service">ПАРИКМАХЕРСКИЕ УСЛУГИ</p>
            </div> -->


            <?php /*


                    $array = get_post_meta( get_option( 'page_on_front' ), 'main_services_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) { 
                            
                            if( isset( $entry['img'] ) ) { $img = $entry['img_id'];  }
                            if( isset( $entry['name'] ) ) { $name = esc_html( $entry['name'] );  }
                            if( isset( $entry['url'] ) ) { $link = $entry['url'] ;  }
                            
                            $blank = $link['blank'] === 'true' ? true : false;

                            ?>                                                  
                                    
                                        <div class="grid-item">
                                            <a target="<?php  if( $blank  )  echo '_blank';  ?>" href="<?php  if( !empty($link['url']) ) echo $link['url']; ?>">
                                                <div class="modal">
                                                    <p class="modal-title"><?php  if( !empty($name) ) echo $name; ?></p>
                                                    <p>Узнать подробнее</p>
                                                </div>
                                            </a>
                                            <!-- <img src="<?php //if( !empty($img) ) echo $img; ?>" alt="service"> -->
                                            <?php echo wp_get_attachment_image( $img, 'full' ); ?>
                                            <p class="name-service"><?php  if( !empty($name) ) echo $name; ?></p>
                                        </div>

                                                        
                                <?php 
                            }
                            
                    }

                */?>

        <?php


        $categories=get_categories(
            array( 'parent' => 19 )
        );
        

        foreach ($categories as $c) {
            $id = $c->cat_ID;
           
            $args = array(
                'post_type'        => 'services-post',
                // 'category'         => 10,
                'category__in' => array($id)
            );

            $posts_array = get_posts( $args );

            ?>

            
                    <div class="grid-item">
                        <a target="_blank" href="<?php echo $posts_array[0]->guid; ?>">
                            <div class="modal">
                                <p class="modal-title"><?php  echo $posts_array[0]->post_title; ?> </p>
                                <p>Узнать подробнее</p>
                            </div>
                        </a>
                        <!-- <img src="<?php //if( !empty($img) ) echo $img; ?>" alt="service"> -->
                        <?php echo get_the_post_thumbnail($posts_array[0]->ID); ?>
                        <p class="name-service"><?php  echo $posts_array[0]->post_title; ?></p>
                    </div>

            <?php


        }


        // Restore original post data.
        wp_reset_postdata();
        
        ?>



        </div>
        <div class="services-button">
            <a href="/atmosfera/services" class="button">СМОТРЕТЬ ВСЕ УСЛУГИ</a>
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
                <!-- <div class="reviews-carousel-item">
                    <h3>Имя</h3>
                    <div class="review">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui porro sunt et eum iste atque, rerum nostrum ex itaque quod?</p>
                    </div>
                </div> -->


                <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'post_type' => 'otziv-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

            
                    
                     ?>

                        
                        <div class="reviews-carousel-item">
                            <h3><?php the_title(); ?></h3>
                            <div class="review">
                                <?php  the_excerpt(); ?>
                            </div>
                        </div>
               
                        

                    <?php

                endwhile;

                wp_reset_postdata(); 
            endif;
            ?>

            </div>
            <div class="reviews-button">
                <a href="/atmosfera/reviews" class="button visited">СМОТРЕСТЬ ВСЕ ОТЗЫВЫ</a>
            </div>
        </div>
</section>

<section class="feedback">
    <h3>ЕСЛИ ЕСТЬ ВОПРОСЫ, ПОЖЕЛАНИЯ К НАШЕЙ РАБОТЕ</h3>
    <div class="feedback-wrapper clearfix">
        <div class="form-feedback-wrapper float-right">
            <!--<form class="">-->
            <!--    <div class="grid-container">-->
            <!--        <div class="grid-x grid-padding-x">-->
            <!--        <div class="medium-4 cell">-->
            <!--            <input required type="text" placeholder="Ваше имя">-->
            <!--        </div>-->
            <!--        <div class="medium-4 cell">-->
            <!--            <input required type="number" placeholder="Телефон">-->
            <!--        </div>-->
            <!--        <div class="medium-4 cell">-->
            <!--            <input type="email"  placeholder="Email (не обязательно)">-->
            <!--        </div>-->
            <!--        </div>-->
            <!--    </div>-->

            <!--    <div class="grid-container">-->
            <!--        <div class="grid-x grid-padding-x">-->
            <!--        <div class="medium-8 cell">-->
            <!--            <input required type="text" placeholder="Введите сообщение">-->
            <!--        </div>-->
            <!--        <div class="medium-4 cell">-->
            <!--            <input required type="submit" class="button" value="Отправить сообщение">-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</form>-->
            
            
            <?php echo do_shortcode( '[contact-form-7 id="320" title="Контактная форма на главной 2"]' ); ?>
                <span class="politics"> 
                    <?php if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                        <p><a target="_blank" href="<?php the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                    <?php endif; ?>
                </span>
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
                    <!-- <div class="masters-slick-item clearfix">
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
                    </div> -->
                   
                    <?php /*
                    $array = get_post_meta( get_option( 'page_on_front' ), 'masters_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) { 
                            
                            if( isset( $entry['img'] ) ) { $img = $entry['img_id'];  }
                            if( isset( $entry['name'] ) ) { $name = esc_html( $entry['name'] );  }
                            if( isset( $entry['title'] ) ) { $title = esc_html( $entry['title'] );  }
                            if( isset( $entry['content'] ) ) { $content = esc_html( $entry['content'] );  }
                            
                    
                            ?>
                                                    
                                <div class="masters-slick-item clearfix">
                                    <div class="float-left master-img-wrapper">
                                        <?php echo wp_get_attachment_image( $img, 'full', false, array('class' => 'master-img') );  ?>
                                        <!-- <img class="master-img" src="<?php //if( !empty($img) ) echo $img; ?>" alt="women"> -->
                                    </div>
                                    <div class="masters-text float-left">
                                        <h4><?php  if( !empty($name) ) echo $name; ?></h4>
                                        <p class="masters-title"><?php if( !empty($title) ) echo $title; ?></p>
                                        <p><?php if( !empty($content) ) echo $content; ?></p>
                                    </div>
                                        <div class="masters-button">
                                            <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                                        </div>
                                    </div>
                                                        
                                <?php 
                            }
                            
                    }

                   */ ?>


                    <?php 
                    
                    $ourCurrentPage = get_query_var('paged');
                    $args = array(
        
                        'paged' => $ourCurrentPage,
                        'post_type' => 'masters-post' );
                    $postslist = new WP_Query( $args );
        
                    if ( $postslist->have_posts() ) :
                        while ( $postslist->have_posts() ) : $postslist->the_post();
                        
                            $imageContent = get_the_content();
                            $stripped = strip_tags($imageContent, '<p>');
                            
                             ?>
        
        
                        

                                <div class="masters-slick-item clearfix">
                                    <div class="float-left master-img-wrapper">
                                        <?php //echo wp_get_attachment_image( $img, 'full', false, array('class' => 'master-img') );  ?>
                                        <?php the_post_thumbnail('', array('class' => "master-img",)) ?>
                                    </div>
                                    <div class="masters-text float-left">
                                        <h4><?php  the_title(); ?></h4>
                                        <p class="masters-title"><?php echo $stripped ?></p>
                                        <p><?php the_field('skills'); ?></p>
                                    </div>
                                    <div class="masters-button">
                                        <a href="#" class="button visited">ЗАПИСАТЬСЯ</a>
                                    </div>
                                </div>
        
                            <?php
        
                        endwhile;
                        wp_reset_postdata(); 
                    endif;
                    
                    ?>


                </div>
            <div class="masters-list">
                <p class="masters-list-title">Наши мастера</p>
                <img class="next-arrow4" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
                <img class="previos-arrow4" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
                <div class="masters-list-imges">

                    <!-- <div class="single-master single-master-selected">
                        <img src="<?php //echo get_template_directory_uri(); ?>/dist/assets/images/images/mas_1.jpg" alt="women">
                    </div>-->


                    <?php

                    $ourCurrentPage = get_query_var('paged');
                    $args = array(
        
                        'paged' => $ourCurrentPage,
                        'post_type' => 'masters-post' );
                    $postslist = new WP_Query( $args );
        
                    if ( $postslist->have_posts() ) :
                        while ( $postslist->have_posts() ) : $postslist->the_post();
                        
                            $imageContent = get_the_content();
                            $stripped = strip_tags($imageContent, '<p>');
                            
                             ?>

                                <div class="single-master">
                                    <?php the_post_thumbnail('full', array('class' => "master-img",)) ?>
                                </div>
        
                            <?php
        
                        endwhile;
                        wp_reset_postdata(); 
                    endif;
                    

                    ?>


                </div>
            </div> 
            </div>
        </div>
</section>

<section class="seo-text">
    <h1><?php the_field('seo-title', get_option( 'page_on_front' ))  ?></h1>
    <p><?php the_field('seo-content', get_option( 'page_on_front' ))  ?></p>
</section>


<section class="maps">
    <?php //the_field('map', get_option( 'page_on_front' ))  ?>
    <?php the_field('map');  ?>
</section>

<?php get_footer();
