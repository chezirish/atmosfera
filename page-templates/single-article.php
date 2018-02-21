<?php
/*
Template Name: Страница статьи
*/
get_header(); ?>

<section class="shares__content">
    <div class="article-info">
        <div class="article-preview">
            <!-- <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line"> -->
        </div>
        <h4>Поступление новых средств по уходу за волосами</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor non itaque expedita placeat dolore veritatis, voluptatibus perferendis omnis nisi neque ab labore incidunt repudiandae eaque consequatur ipsam in provident voluptas.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa a voluptatibus, dolore, voluptatem doloribus harum odit earum vero debitis exercitationem sint voluptates pariatur reprehenderit necessitatibus, quibusdam officiis minima error molestiae aliquid corrupti qui id commodi sed vel. Repudiandae id officiis ratione culpa, maxime perferendis fuga sapiente voluptatum possimus unde amet officia rem doloremque distinctio aut et sequi asperiores ipsa accusamus!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel commodi tempore quo iure rerum veritatis consectetur officiis assumenda. Magnam, dolorum perferendis. Qui nostrum impedit veritatis fugit, dolorem consequuntur tempore obcaecati quisquam eius iste. Voluptatibus ipsum dignissimos odit magnam odio nostrum eaque temporibus animi consectetur non, tempora obcaecati amet distinctio fugiat illum dolores perspiciatis molestiae eveniet hic est, rerum vel ea?</p>
    </div>
</section>

<section class="about__form">
    <div class="feedback">
        <h3>Записатся к нам очень просто</h3>
        <div class="feedback-wrapper clearfix">
            <div class="form-feedback-wrapper float-right">
                <form class="">
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
                        <?php if(get_field('politics', get_option( 'page_on_front' ))) : ?>
                            <p><a target="_blank" href="<?php the_field('politics', get_option( 'page_on_front' ));  ?>">Политика конфиденциальности</a></p> 
                        <?php endif; ?>
                    </span>   
                </form>
            </div>        
        </div>
    </div>
</section>

<section class="also">
    <h3>ЧИТАТЬ ТАКЖЕ</h3>
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow">
        <div class="articles-carousel">
            <div class="article-item">
                <div class="slick-item shares-block">
                    <p>25.06.2018</p>
                    <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                    <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
                </div>
                <h5>Поступление новых средств по уходу за волосами </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
                <p class="articles__link"><a  href="#">Читать далее</a></p>
            </div>
            <div class="article-item">
                <div class="slick-item shares-block">
                    <p>25.06.2018</p>
                    <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                    <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
                </div>
                <h5>Поступление новых средств по уходу за волосами </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
                <p class="articles__link"><a  href="#">Читать далее</a></p>
            </div>
            <div class="article-item">
                <div class="slick-item shares-block">
                    <p>25.06.2018</p>
                    <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                    <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
                </div>
                <h5>Поступление новых средств по уходу за волосами </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
                <p class="articles__link"><a  href="#">Читать далее</a></p>
            </div>
            <div class="article-item">
                <div class="slick-item shares-block">
                    <p>25.06.2018</p>
                    <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/images/sl_viz2.jpg" alt="line">
                    <p class="slick-link-wrapper"><a class="slick-link" href="../single-article/">Подробнее</a></p>
                </div>
                <h5>Поступление новых средств по уходу за волосами </h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor optio ab debitis deserunt vel illo voluptate necessitatibus ullam architecto soluta.</p>
                <p class="articles__link"><a  href="#">Читать далее</a></p>
            </div>
        </div>

</section>

<?php get_footer();
