<?php
/*
Template Name: Отзывы
*/
get_header(); ?>

<section class="reviews-wrapper">
        <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(
                'posts_per_page' => -1,
                'paged' => $ourCurrentPage,
                'post_type' => 'otziv-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                     ?>


                    <div class="single-review">
                        <p class="single-review-date"><?php  the_time('d.m.Y'); ?></p>
                        <h5><?php the_title() ?> </h5>
                        <?php the_excerpt(); ?>
                    </div>


                    <?php

                        

                endwhile;



            endif;
        ?>
</section>



<?php get_footer();
