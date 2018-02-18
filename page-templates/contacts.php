<?php
/*
Template Name: Контакты
*/
get_header(); ?>

<section class="contacts__content">
    <div class="grid-x grid-margin-x">
        <div class="medium-6 large-6 cell">
            <h4>Контактная информация</h4>
            <div class="contacts__content-text ">
                <div class=" contacts__content-querstions">

                    <?php


                    $array = get_post_meta( get_the_ID(), 'contact_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) {
                                                      
                                if ( isset( $entry['key'] ) ) {
                                    $data = esc_html( $entry['key'] );
                                    echo  '<p>' . $data . '</p>';
                                }                        
                                
                            }
                            
                    }

                    ?>
                        
                    <!-- <p>Телефон/факс:</p>
                    <p>Электронный адрес:</p>
                    <p>Адрес:</p> -->
                </div>
                <div class=" contacts__content-answers">

                    <?php


                    $array = get_post_meta( get_the_ID(), 'contact_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) {
                                                      
                                if ( isset( $entry['value'] ) ) {
                                    $data = esc_html( $entry['value'] );
                                    echo  '<p>' . $data . '</p>';
                                }                        
                                
                            }
                            
                    }

                    ?>


                    <!-- <p>+7 (495) 510-02-00</p>
                    <p>rooby.market@yandex.ru</p>
                    <p>г. Тамбов, ул. 2-я Шацкая, д. 4, кв. 76</p> -->
                </div>
            </div>
            <h4>Реквизиты</h4>
            <div class="contacts__content-text ">
                <div class=" contacts__content-querstions">

                    <?php


                    $array = get_post_meta( get_the_ID(), 'requisites_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) {
                                                      
                                if ( isset( $entry['key'] ) ) {
                                    $data = esc_html( $entry['key'] );
                                    echo  '<p>' . $data . '</p>';
                                }                        
                                
                            }
                            
                    }

                    ?>

                    <!-- <p>ИП</p>
                    <p>Юридический адрес</p>
                    <p>Телефон</p>
                    <p>ИНН/ОГРН</p>
                    <p>ОКПО</p>
                    <p>Банк</p>
                    <p>Расчётный счёт</p>
                    <p>Кор/счёт</p>
                    <p>БИК</p>
                    <p>Адрес торговой точки</p> -->
                </div>
                <div class=" contacts__content-answers">


                    <?php


                    $array = get_post_meta( get_the_ID(), 'requisites_group', true );
                    // var_dump($array);
                        
                    if( !empty($array) ){

                        foreach ( $array as $key => $entry ) {
                                                      
                                if ( isset( $entry['value'] ) ) {
                                    $data = esc_html( $entry['value'] );
                                    echo  '<p>' . $data . '</p>';
                                }                        
                                
                            }
                            
                    }

                    ?>

                    <!-- <p>Истомин Игорь Юрьевич</p>
                    <p>392008, г. Тамбов, ул. 2-я Шацкая, д. 4, кв. 76</p>
                    <p>+7 (495) 510-02-00</p>
                    <p>683208603508/409682910400032</p>
                    <p>0152763848</p>
                    <p>Липецкий филиал ОАО АКБ "РОСБАНК"</p>
                    <p>40802810750160000121</p>
                    <p>30101810200000000709</p>
                    <p>044206709</p>
                    <p>Ярославль </p> -->
                </div>
            </div>
        </div>
        <div class="medium-6 large-6 cell">
            <?php the_field('map'); ?>  
        </div>
    </div>
</section>

<?php get_footer();
