

<section class="shares__content">
    <div class="row">
        <div class="medium-6 medium-centered small-centered large-uncentered  large-6 columns">   
            <div class="slick-item shares-block">
                <?php the_post_thumbnail('', array( 'class' => "",)) ?>
            </div>
        </div>
        <div class="medium-12 large-6 columns">
            <h2><?php the_field('title'); ?></h2>
            <p><?php  the_content(); ?></p>
        </div>
    </div>

    <div class="section-title">
        <div class="services__button">
            <span><a href="#" class="button">ОСТАВИТЬ ЗАЯВКУ</a></span>
        </div>
    </div>

</section>

