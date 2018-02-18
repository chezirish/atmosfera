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
                    <h3>Выберите услугу</h3>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="seo-text">
    <h1> <?php the_field('seo-title') ?></h1>
    <p><?php the_field('seo-content') ?></p>
</section>

<?php get_footer();
