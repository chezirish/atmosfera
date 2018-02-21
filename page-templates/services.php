<?php
/*
Template Name: Услуги и цены
*/
get_header(); ?>


<section class="services__content">
    <div class="row">
        <div class="medium-4 large-4 columns services-items">   
        <ul class="vertical menu accordion-menu" data-accordion-menu>
            <?php service_nav_bar();  ?>
        </div>
        <div class="medium-8 large-8 columns">
            <div class="services__conten-wrapper">
                <div class="services__service-info">
                    <h3><?php wp_title(""); ?></h3>
                </div>
            </div>
            <?php
                if (have_posts()):

                    
                    while (have_posts()) : the_post(); 
                        $Content = get_the_content();
                        $stripped = strip_tags($Content); ?>
                        
                        <p class="service__info"><?php echo $stripped; ?></p>
                    <?php endwhile;
                endif;
            ?>
            <!-- <p class="service__info">Сдесь вы можете узнать о различных услугах нашего салона.</p> -->
        </div>
    </div>
</section>


<section class="seo-text">
    <h1> <?php the_field('seo-title') ?></h1>
    <p><?php the_field('seo-content') ?></p>
</section>

<?php get_footer();
