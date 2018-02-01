<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-grid grid-x">
            <div class="large-3 cell logo"><?php dynamic_sidebar( 'footer-widgets' ); ?></div>
            <div class="large-6 cell footer-info">
                <div class="footer-nav-bar">
                    <?php footer_nav_bar(); ?>
                </div>
                <p><a href="#">Политика конфиденциальности</a></p>
                <p>Салон красоты «Атмосфера» 2015-2017 (c) Все права защищены Создание сайта - <a href="#">"Папин Сайт"</a></p>
            </div>
            <div class="large-3 cell">
                
                <p class="footer-phone"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i></span>8 812 717 0037</p>
                <p class="footer-address"><span class="address"><i class="fas fa-map-marker"></i></span>Невский пр., 166</p>
                <div class="social-icons">
                    <ul class="menu align-center">
                        <li><a href="#"><i class="fab fa-vk"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>   
            </div>
        </div>
    </div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>