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
                'post_type' => 'masters-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                    
                     ?>


                        <div class="master">
                        <?php the_post_thumbnail('', array('class' => "",)) ?>
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                            <div class="services__button">
                                <a href="<?php the_permalink(); ?>" class="button">ЗАПИСАТЬСЯ ОНЛАЙН</a>
                            </div>
                        </div>
                        

                    <?php

                endwhile;
            endif;
            ?>


    </div>
</section>

<?php get_footer();
