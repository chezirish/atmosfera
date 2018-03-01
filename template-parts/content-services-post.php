

<section class="services__content">
    <div class="row">
        <div class="medium-4 large-4 columns services-items">   
        <!-- <ul class="vertical menu accordion-menu" data-accordion-menu>
            <li class="accordion-menu-container">
                <a href="#">Парикмахерские услуги</a>
                <ul class="menu vertical nested">
                <li><a href="#">Item 1A</a></li>
                <li><a href="#">Item 1B</a></li>
                </ul>
            </li>
            <li class="accordion-menu-container">
                <a href="#">Ногтевой сервис</a>
                <ul class="menu vertical nested">
                <li><a href="#">Item 1A</a></li>
                <li><a href="#">Item 1B</a></li>
                </ul>
            </li>
            <li class="accordion-menu-container">
                <a href="#">SPA-маникюр</a>
                <ul class="menu vertical nested">
                <li><a href="#">Item 1A</a></li>
                <li><a href="#">Item 1B</a></li>
                </ul>
            </li>
            <li class="accordion-menu-container">
                <a href="#">Наращивание ресниц</a>
                <ul class="menu vertical nested">
                <li><a href="#">Item 1A</a></li>
                <li><a href="#">Item 1B</a></li>
                </ul>
            </li>
            <li class="accordion-menu-container">
                <a href="#">Косметалогия</a>
                <ul class="menu vertical nested">
                <li><a href="#">Item 1A</a></li>
                <li><a href="#">Item 1B</a></li>
                </ul>
            </li>
        </ul> -->

        <?php //service_nav_bar();  ?>
        <ul class="vertical menu accordion-menu" data-accordion-menu>

        <?php


        $categories=get_categories(
            array( 'parent' => 19 )
        );

        // var_dump( $categories);
        
        global $post;

        foreach ($categories as $c) {
            $id = $c->cat_ID;
        // var_dump( $c);
        
            $subCat=get_categories(
                array( 'parent' => $id )
            );
            // var_dump($subCat[0]->cat_ID);

            $args = array(
                'post_type'        => 'services-post',
                // 'category'         => $id,
                'category__in' => array($subCat[0]->cat_ID)
            );

            $childCat = get_posts( $args );

            $args = array(
                'post_type'        => 'services-post',
                // 'category'         => $id,
                'category__in' => array($id)
            );

            $parentCat = get_posts( $args );

            // var_dump($parentCat[0]);

            
            $current = false;

            for($i=0; $i < count($childCat); $i++) {
                if($post->ID === $childCat[$i]->ID){
                    $current = true;
                }
            }
            if($post->ID === $parentCat[0]->ID){
                $current = true;
            }
            
            
            ?>



                <?php if($current): ?>
                <a class="<?php if($post->ID === $parentCat[0]->ID) echo "current-service "; ?>" href="<?php echo $parentCat[0]->guid . '#breadcrumbs' ?>"> <?php  echo $parentCat[0]->post_title; ?> </a>
                    <li class="accordion-menu-container">           
                        <ul class="menu vertical nested is-active">
                            <?php for($i=0; $i < count($childCat); $i++): ?>
                                <?php if($childCat[$i]->ID === $post->ID): ?>
                                    <li><a class="current-service" href="<?php echo $childCat[$i]->guid . '#breadcrumbs' ?>"><?php  echo $childCat[$i]->post_title; ?></a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo $childCat[$i]->guid . '#breadcrumbs' ?>"><?php  echo $childCat[$i]->post_title; ?></a></li>
                                <?php endif ?>
                            <?php endfor ?>
                        </ul>
                    </li>     

                <?php else: ?>           
                    <li class="accordion-menu-container">
                        <a href="<?php echo $parentCat[0]->guid . '#breadcrumbs' ?>"> <?php  echo $parentCat[0]->post_title; ?> </a>
                    </li>    

                <?php endif ?>
            <?php


        }


        // Restore original post data.
        wp_reset_postdata();
        
        ?>

        </ul>
        </div>
        <div class="medium-8 large-8 columns">
            <div class="services__conten-wrapper">
                <div class="services__service-img">
                    <?php the_post_thumbnail(array(500), array( 'class' => "",)) ?>
                </div>
                <div class="services__service-info">
                    <h3><?php the_title(); ?></h3>
                    <?php //the_content(); ?>
                </div>
            </div>
            <?php the_content(); ?>
            <h3 class="price-list-title">Прайс - лист на услугу <?php the_title(); ?></h3>
            <table>
            <tbody>
                <!-- <tr>
                <td>Классический маникюр</td>
                <td>3 500/5 100*</td>
                </tr>
                <tr>
                <td>Детский маникюр</td>
                <td>3 900/5 100*</td>
                </tr>
                <tr>
                <td>Экспресс-маникюр</td>
                <td>4 500/5 100*</td>
                </tr>
                <tr>
                <td>Классический маникюр</td>
                <td>3 500/5 100*</td>
                </tr>
                <tr>
                <td>Детский маникюр</td>
                <td>3 900/5 100*</td>
                </tr>
                <tr>
                <td>Экспресс-маникюр</td>
                <td>4 500/5 100*</td>
                </tr>
                <tr>
                <td>Классический маникюр</td>
                <td>3 500/5 100*</td>
                </tr>
                <tr>
                <td>Детский маникюр</td>
                <td>3 900/5 100*</td>
                </tr>
                <tr>
                <td>Экспресс-маникюр</td>
                <td>4 500/5 100*</td>
                </tr> -->


                <?php


                    $array = get_post_meta( get_the_ID(), 'services_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) { 
                            
                            if( isset( $entry['val'] ) ) { $val = esc_html( $entry['val'] );  }
                            if( isset( $entry['name'] ) ) { $name = esc_html( $entry['name'] );  }
                            
                            ?>
                                                    
                                    <tr>
                                    <td><?php if( !empty($name) ) echo $name; ?></td>
                                    <td><?php if( !empty($val) ) echo $val; ?></td>
                                    </tr>
                                                        
                                <?php 
                            }
                            
                    }

                ?>


            </tbody>
            </table>
            <div class="section-title">
                <div class="services__button">
                    <span><a href="#" class="button">ОСТАВИТЬ ЗАЯВКУ</a></span>
                </div>
            </div>
        </div>
    </div>
    <img class="salon-img" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/kkk.png" alt="salon">
</section>


<?php 

$services = get_pages(array(
   'meta_value' => 'page-templates/services.php'
));

    $services = $services[0]->ID;

?>

<section class="seo-text">
    <h1> <?php the_field('seo-title') ?></h1>
    <p><?php the_field('seo-content') ?></p>
</section>


