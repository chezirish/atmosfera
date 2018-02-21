<?php
/*
Template Name: Подарочные сертификаты
*/
get_header(); ?>

<section class="gift-sertificates">
    <h3>ЗАКАЗАТЬ СЕРТИФИКАТ</h3>
    <div class="gift-sertificates-wrapper">
    <div class="row">
        <div class="medium-7 large-8 columns">   
        <!-- <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow"> -->
        <!-- <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow"> -->
            <div class="gift-sertificates-carousel">
                <div class="slick-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/s1.png" alt="gift">
                </div>
                <div class="slick-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/s2.png" alt="gift">
                </div>
            </div>
        </div>
        <div class="medium-5 large-4 columns">
            <div class="info-form">
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/line.png" alt="line">
                <p class="title-form">оставьте заявку</p>
                <form class="header-form" action="">
                    <input required type="text" placeholder="Имя">
                    <input required type="number" placeholder="Телефон">
                    <select name="" id="">
                        <option value="">Номинал 5000 р.</option>
                        <option value="">Номинал 4000 р.</option>
                    </select>
                    <input type="submit" class="button" value="ЗАПИСАТЬСЯ">
                </form>
                <p class="text-form">Администратор перезвонит Вам в ближайшее время</p>
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
