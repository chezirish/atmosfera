<?php
/*
Template Name: Лицензии
*/
get_header(); ?>

<div class="licence__content">
    <div class="licences">
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
        <div class="licences-carousel">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis1.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis2.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis3.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis4.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis5.png" alt="лицензия">
            </div>

            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis1.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis2.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis3.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis4.png" alt="лицензия">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/lis5.png" alt="лицензия">
            </div>
        </div>
    </div>


</div>

<div class="certificates-background">
    <div class="certificates">
            <div class="lols"></div>
            <img class="next-arrow2" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
            <img class="previos-arrow2" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
            <div class="certificates-carousel">
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser1.png" alt="лицензия">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser2.png" alt="лицензия">
                </div>

                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser1.png" alt="лицензия">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser2.png" alt="лицензия">
                </div>

                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser1.png" alt="лицензия">
                </div>
                <div>
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/ser2.png" alt="лицензия">
                </div>
            </div>
    </div>
</div>


<section class="seo-text requisites">
    <h1><?php the_field('seo-title') ?></h1>
    <div class="requisites-content">
        <p><?php the_field('seo-content') ?></p>
    </div>
</section>

<?php get_footer();
