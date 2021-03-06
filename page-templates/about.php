<?php
/*
Template Name: О нас
*/
get_header(); ?>

<section class="about__info">
    <h3><?php the_field('title');  ?></h3>
    <?php the_field('content');  ?>
</section>

<section class="gallery">
    <h2>ГАЛЕРЕЯ САЛОНА</h2>
    <div class="gallery-wrapper">
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
        <div class="gallery-carousel">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about/ofice-photo.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about/s1.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about/s2.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about/s3.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/about/s4.png" alt="салон">
            </div>
        </div>
    </div>
</section>

<section class="about__form">
    <div class="feedback">
        <h3>Записатся к нам очень просто</h3>
        <div class="feedback-wrapper clearfix">
            <div class="form-feedback-wrapper float-right">
                <!-- <form class="">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                            <div class="medium-4 cell">
                                <input required type="text" placeholder="Ваше имя">
                            </div>
                            <div class="medium-4 cell">
                                <input required type="number" placeholder="Телефон">
                            </div>
                            <div class="medium-4 cell">
                                <input required type="submit" class="button" value="Отправить сообщение">
                            </div>
                        </div>
                    </div>
                    <span class="politics"> 
                    <?php //if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                        <p><a target="_blank" href="<?php //the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                    <?php //endif; ?>
                    </span>     
                </form> -->

                <?php echo do_shortcode( '[contact-form-7 id="366" title="О салоне"]' ); ?>
                <span class="politics"> 
                    <?php if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                        <p><a target="_blank" href="<?php the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                    <?php endif; ?>
                </span>   
            </div>       
        </div>
    </div>
</section>

<section class="seo-text">
    <h1> <?php the_field('seo-title') ?></h1>
    <p><?php the_field('seo-content') ?></p>
</section>



<?php get_footer();
