
<section class="shares__content">
    <div class="row">
        <div class="medium-6 medium-centered small-centered large-uncentered  large-6 columns">   
            <div class="slick-item shares-block">
                <?php the_post_thumbnail('', array( 'class' => "",)) ?>
            </div>
        </div>
        <div class="medium-12 large-6 columns">
            <p><?php  the_time('d.m.Y'); ?></p>
            <h2><?php the_title() ?></h2>
            <?php the_content(); ?>
        </div>
    </div>
</section>