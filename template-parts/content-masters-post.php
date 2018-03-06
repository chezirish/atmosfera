
<section class="masters-single__content">
    <div class="row">
        <div class="medium-6 medium-centered small-centered large-uncentered  large-6 columns">   
            <div class="slick-item shares-block">
                <?php the_post_thumbnail('', array( 'class' => "",)) ?>
            </div>
        </div>
        <div class="medium-12 large-6 columns masters-single__content-wrapper">
           <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
           <h5>Ключивые навыки</h5>
           <?php the_field('skills'); ?>
            <div class="services__button">
                <a href="<?php $link = get_field('dikidi_master');  echo (isset(explode('"', $link)[1])) ? explode('"', $link)[1] : the_field('dikidi_master'); ?>" class="button">ОСТАВИТЬ ЗАЯВКУ</a>
            </div>
        </div>
    </div>
</section>

