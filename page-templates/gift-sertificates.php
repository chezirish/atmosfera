<?php
/*
Template Name: Подарочные сертификаты
*/
get_header(); ?>

<section class="gift-sertificates">
    <h3>ЗАКАЗАТЬ СЕРТИФИКАТ</h3>
    <div class="gift-sertificates-wrapper">
    <div class="row">
        <div class="medium-7 large-8 columns">   
        <!-- <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/1_1.png" alt="arrow"> -->
        <!-- <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/2_2.png" alt="arrow"> -->
            <div class="gift-sertificates-carousel">
                <div class="slick-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/s1.png" alt="gift">
                </div>
                <div class="slick-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/s2.png" alt="gift">
                </div>
            </div>
        </div>
        <div class="medium-5 large-4 columns">
            <div class="info-form">
                <img src=" <?php echo get_template_directory_uri(); ?>/dist/assets/images/line.png" alt="line">
                <p class="title-form">оставьте заявку</p>
                <form class="header-form" action="">
                    <input type="text" placeholder="Имя">
                    <input type="text" placeholder="Телефон">
                    <select name="" id="">
                        <option value="">Номинал 5000 р.</option>
                        <option value="">Номинал 4000 р.</option>
                    </select>
                    <input type="submit" class="button" value="ЗАПИСАТЬСЯ">
                </form>
                <p class="text-form">Администратор перезвонит Вам в ближайшее время</p>
            </div>     
        </div>
    </div>
</section>

<section class="seo-text">
    <h1>ЗАГОЛОВОК SEO-текста</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe facilis, ex eius corrupti libero nisi ratione. Quisquam harum aspernatur maxime numquam, iste magni incidunt, cum sequi animi doloribus soluta iure inventore ipsa, fugit voluptatum exercitationem molestias illo sapiente. Qui ipsum iusto, amet excepturi non sapiente placeat deleniti, dolores nisi consequatur nesciunt voluptatem nostrum assumenda dolor accusantium pariatur voluptate? Inventore, dolor quia nemo eius reiciendis, libero ipsa sunt impedit, velit dolore cumque perspiciatis ut veritatis totam reprehenderit! Eius exercitationem neque quos reprehenderit! Voluptas, eum nisi. Blanditiis laborum, labore repellat tempora reprehenderit non! Dolor dolore ex facilis repudiandae omnis consectetur eos dolorem.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit amet modi optio minus voluptas dicta veniam necessitatibus quaerat, cupiditate tempora?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, at?</p>
</section>

<?php get_footer();
