<?php
/*
Template Name: Услуги и цены
*/
get_header(); ?>


<section class="services__content">
    <div class="row">
        <div class="medium-4 large-4 columns services-items">   
        <ul class="vertical menu accordion-menu" data-accordion-menu>

        <?php


        $categories=get_categories(
            array( 'parent' => 19 )
        );
        

        foreach ($categories as $c) {
            $id = $c->cat_ID;
           
            $args = array(
                'post_type'        => 'services-post',
                // 'category'         => 10,
                'category__in' => array($id)
            );

            $posts_array = get_posts( $args );
            // var_dump($posts_array);

            ?>

                
                    <li class="accordion-menu-container">
                        <a href="<?php echo $posts_array[0]->guid . '#breadcrumbs' ?>"> <?php  echo $posts_array[0]->post_title; ?> </a>
                    </li>
                

            <?php


        }


        // Restore original post data.
        wp_reset_postdata();
        
        ?>

        </ul>
        </div>
        <div class="medium-8 large-8 columns">
            <div class="services__conten-wrapper">
                <div class="services__service-info">
                    <h3><?php wp_title(""); ?></h3>
                </div>
            </div>
            <?php
                if (have_posts()):

                    $pages = get_pages(array(
                        'meta_value' => 'page-templates/services.php'
                     ));
                     
                         $services = $pages[0]->ID;
                     
                    //while (have_posts()) : the_post(); 

                        $content = get_post_field('post_content', $services);
                        $stripped = strip_tags($content); ?>
                        
                        <p class="service__info"><?php echo $stripped; ?></p>
                    <?php //endwhile;
                endif;
            ?>
            <!-- <p class="service__info">Сдесь вы можете узнать о различных услугах нашего салона.</p> -->
        </div>
    </div>
</section>


<section class="seo-text">
    <h1> <?php the_field('seo-title', $services) ?></h1>
    <p><?php the_field('seo-content', $services) ?></p>
</section>

<?php get_footer();
