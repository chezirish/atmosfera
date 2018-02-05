<?php
/*
Template Name: О нас
*/
get_header(); ?>

<section class="about__info">
    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates maiores animi, repellat rerum a soluta dicta eos aliquam cupiditate totam nostrum odio alias vitae officiis incidunt mollitia dolor tempora. Commodi, veniam blanditiis.</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut libero fugit accusantium itaque, omnis voluptatibus cumque temporibus aliquam obcaecati dicta totam corrupti, quasi modi at quo esse maxime, repudiandae distinctio ab inventore rem repellat deserunt ipsa. Optio nostrum illo eaque, voluptatibus earum cupiditate deserunt quae repellendus dolores. Officia earum, asperiores sequi culpa quos sapiente eos, vel dolorum accusamus minus veritatis reiciendis exercitationem!</p>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora sint obcaecati quam et atque dicta, nihil voluptate natus ea fugiat unde facilis adipisci, ex mollitia sunt ipsum? Voluptatem modi, perferendis quas facilis fugiat deleniti suscipit, iste, minima eos voluptas sit!</p>
</section>

<section class="gallery">
    <h2>ГАЛЕРЕЯ САЛОНА</h2>
    <div class="gallery-wrapper">
        <img class="next-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/1_1.png" alt="arrow">
        <img class="previos-arrow" src="<?php echo get_template_directory_uri(); ?>/src/assets/images/images/2_2.png" alt="arrow">
        <div class="gallery-carousel">
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/about/ofice-photo.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/about/s1.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/about/s2.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/about/s3.png" alt="салон">
            </div>
            <div>
                <img src="<?php echo get_template_directory_uri(); ?>/src/assets/images/about/s4.png" alt="салон">
            </div>
        </div>
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
                            <input type="text" placeholder="Ваше имя">
                        </div>
                        <div class="medium-4 cell">
                            <input type="text" placeholder="Телефон">
                        </div>
                        <div class="medium-4 cell">
                            <input type="submit" class="button" value="Отправить сообщение">
                        </div>
                        </div>
                    </div>
                </form>
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
