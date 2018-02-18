

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

        <?php service_nav_bar();  ?>

        </div>
        <div class="medium-8 large-8 columns">
            <div class="services__conten-wrapper">
                <div class="services__service-img">
                    <?php the_post_thumbnail('full', array( 'class' => "",)) ?>
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
    <h1> <?php the_field('seo-title', $services ) ?></h1>
    <p><?php the_field('seo-content', $services ) ?></p>
</section>


