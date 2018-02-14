<?php
/*
Template Name: Услуги и цены
*/
get_header(); ?>


<section class="services__content">
    <div class="row">
        <div class="medium-4 large-4 columns services-items">   
        <ul class="vertical menu accordion-menu" data-accordion-menu>
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
        </ul>
        </div>
        <div class="medium-8 large-8 columns">
            <div class="services__conten-wrapper">
                <div class="services__service-img">
                    <img  src="<?php echo get_template_directory_uri(); ?>/dist/assets/images/images/hands.png" alt="">
                </div>
                <div class="services__service-info">
                    <h3>Детский маникюр</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Vero iusto veniam fugit expedita placeat voluptas explicabo voluptatum, itaque, laboriosam nulla quae eaque quam nihil alias eligendi. Velit a iste quia.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Possimus, consequuntur?</p>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Et molestias, ipsa ut harum officiis temporibus molestiae reprehenderit, eius quas libero voluptatem quisquam saepe doloremque sint vel itaque quibusdam nam vitae?</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Id repellat explicabo velit quam autem. Nam repellat laborum numquam doloribus corrupti quia deserunt reiciendis quod voluptatem debitis optio magni sint officiis dignissimos eligendi, perferendis perspiciatis sed mollitia ullam libero facilis tempora! Quod modi quas esse voluptatibus dolorum, eveniet, error perferendis quidem itaque culpa ea reiciendis sed voluptatem sequi, veritatis atque harum!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique doloremque magnam dolor delectus fugit debitis in. Quam eaque iure quisquam sunt, excepturi, aliquid fuga ratione et neque consequuntur voluptate doloremque?</p>
            <h3 class="price-list-title">Прайс - лист на услугу "Детский маникюр"</h3>
            <table>
            <tbody>
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


<section class="seo-text">
    <h1> <?php the_field('seo-title') ?></h1>
    <p><?php the_field('seo-content') ?></p>
</section>

<?php get_footer();
