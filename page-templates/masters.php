<?php
/*
Template Name: Специалисты
*/
get_header(); ?>

<section class="masters__content">
    <div class="masters__wrapper">
        <!-- <div class="master">
            <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/katerina.png" alt="women">
            <h2>Имя фамилия</h2>
            <p>Специальист по ногтевому сервису</p>
            <div class="services__button">
                <a href="../single-master/" class="button">ЗАПИСАТЬСЯ ОНЛАЙН</a>
            </div>
        </div> -->

        <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => 6,
                'post_type' => 'masters-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                    
                     ?>

                        
                        <div class="master">
                        <a href="<?php echo the_permalink() . '#breadcrumbs' ?>"> <?php the_post_thumbnail('', array('class' => "",)) ?> </a>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <div class="services__button">
                                <a href="<?php $link = get_field('dikidi_master');  echo (isset(explode('"', $link)[1])) ? explode('"', $link)[1] : the_field('dikidi_master'); ?>" class="button">ЗАПИСАТЬСЯ ОНЛАЙН</a>
                            </div>
                        </div>
                        

                    <?php

                endwhile;
                wp_reset_postdata();
            endif;
            ?>


    </div>
    <div class="pagination"  role="navigation" aria-label="Pagination">
        <?php echo paginate_links(array('total' => $postslist->max_num_pages));  ?>
    </div>    
</section>

<section class="seo-text">
    <h1><?php the_field('seo-title');  ?></h1>
    <p><?php the_field('seo-content');  ?></p>
</section>

<?php get_footer();
