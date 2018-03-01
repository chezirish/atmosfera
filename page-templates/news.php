<?php
/*
Template Name: Новости
*/
get_header(); ?>

<section class="articles__content">
    <div class="articles__wrapper">
        <!-- <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div>
        <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div>
        <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div>
        <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div>
        <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div> -->



        <!-- <div class="article">
            <div class="slick-item shares-block">
                <p>25.06.2018</p>
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
            </div>
            <h5>Поступление новых средств по уходу за волосами </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
            <p class="articles__link"><a  href="#">Читать далее</a></p>
        </div>  -->
  
        <?php
            
            $ourCurrentPage = get_query_var('paged');
            $args = array(

                'paged' => $ourCurrentPage,
                'posts_per_page' => 4,
                'post_type' => 'new-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                     ?>

                        <div class="article">
                            <div class="slick-item shares-block">
                                <p><?php  the_time('d.m.Y'); ?></p>
                                <?php the_post_thumbnail('', array(
                                'class' => "",
                                )) ?>
                                <p class="slick-link-wrapper"><a class="slick-link" href="<?php echo the_permalink() . '#breadcrumbs' ?>">Подробнее</a></p>
                            </div>
                            <h5><?php the_title() ?> </h5>
                            <?php //$data = the_excerpt(); var_dump($data); ?>
                            <?php wordwrap(the_excerpt(), 50, "<br>", false); ?>
                            <p class="articles__link"><a  href="<?php echo the_permalink() . '#breadcrumbs' ?>">Читать далее</a></p>
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

<?php get_footer();
