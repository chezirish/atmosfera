<?php
/*
Template Name: Акции
*/
get_header(); ?>

<section class="shares__content">
    <div class="shares__wrapper">

            <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => 4,
                'post_type' => 'shares-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                
                    $imageContent = get_the_content();
                    $stripped = strip_tags($imageContent, '<p>');
                    
                     ?>

                        

                        <div class="slick-item shares-block">
                            <p class="slick-text"><?php the_field('title'); ?> <span class="slick-span"><?php the_field('red-span'); ?></span></p>
                            <?php the_post_thumbnail('', array(
                                'class' => "",
                                )) ?>
                            <p class="slick-link-wrapper"><a class="slick-link" href="<?php the_permalink(); ?>">Подробнее</a></p>
                        </div>
                        

                    <?php

                endwhile;
            endif;
            ?>

    </div>
    <div class="pagination"  role="navigation" aria-label="Pagination">
        <?php echo paginate_links(array('total' => $postslist->max_num_pages));  ?>
    </div>       
</section>

<?php 

$pages = get_pages(array(
   'meta_value' => 'page-templates/shares.php'
));

    $shares = $pages[0]->ID;

?>

<section class="seo-text">
    <h1> <?php the_field('seo-title', $shares ) ?></h1>
    <p><?php the_field('seo-content', $shares ) ?></p>
</section>

<?php get_footer();
