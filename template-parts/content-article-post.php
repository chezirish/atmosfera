
<section class="shares__content">
    <div class="article-info">
        <div class="article-preview">
            <!-- <img class="cover" src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line"> -->
            <?php the_post_thumbnail('', array( 'class' => "",)) ?>
        </div>
        <h4><?php the_title() ?></h4>
        <p><?php the_content(); ?></p>
    </div>
</section>

<section class="about__form">
    <div class="feedback">
        <h3>Записатся к нам очень просто</h3>
        <div class="feedback-wrapper clearfix">
            <div class="form-feedback-wrapper float-right">
                <!-- <form class="">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                        <div class="medium-4 cell">
                            <input required type="text" placeholder="Ваше имя">
                        </div>
                        <div class="medium-4 cell">
                            <input required type="number" placeholder="Телефон">
                        </div>
                        <div class="medium-4 cell">
                            <input required type="submit" class="button" value="Отправить сообщение">
                        </div>
                        </div>
                    </div>
                    <span class="politics"> 
                        <?php //if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                            <p><a target="_blank" href="<?php //the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                        <?php //endif; ?>
                    </span>   
                </form> -->
                <?php echo do_shortcode( '[contact-form-7 id="371" title="Страница статьи"]' ); ?>
                <span class="politics"> 
                        <?php if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                            <p><a target="_blank" href="<?php the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                        <?php endif; ?>
                    </span>   
            </div>        
        </div>
    </div>
</section>

<section class="also">
    <h3>ЧИТАТЬ ТАКЖЕ</h3>
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
        <div class="articles-carousel">
            <!-- <div class="article-item">
                <div class="slick-item shares-block">
                    <p>25.06.2018</p>
                    <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                    <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
                </div>
                <h5>Поступление новых средств по уходу за волосами </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
                <p class="articles__link"><a  href="#">Читать далее</a></p>
            </div> -->



            

            <?php
            
            $args = array(
                'posts_per_page'   => 6,
                'no_found_rows' => true,
                'post_type' => 'article-post' );
            $postslist = new WP_Query( $args );

            if ( $postslist->have_posts() ) :
                while ( $postslist->have_posts() ) : $postslist->the_post();
                

                     ?>


                        <div class="article-item">
                            <div class="slick-item shares-block">
                                <p><?php  the_time('d.m.Y'); ?></p>
                                <?php the_post_thumbnail('', array(
                                'class' => "news__img",
                                )) ?>
                                <p class="slick-link-wrapper"><a class="slick-link" href="<?php the_permalink(); ?>">Подробнее</a></p>
                            </div>
                            <h5><?php the_title() ?> </h5>
                            <?php wordwrap(the_excerpt(), 50, "<br>", false);?> 
                            <p class="articles__link"><a  href="<?php the_permalink(); ?>"> Читать далее</a></p>
                        </div>

                    <?php

                        

                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>

</section>