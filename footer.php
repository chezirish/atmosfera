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
                <p><?php the_field('politics', get_option( 'page_on_front' ));  ?></p>
                <p><?php the_field('about', get_option( 'page_on_front' ));  ?></p>
            </div>
            <div class="large-3 cell">
                
                <p class="footer-phone"><span class="phone"><i class="fa fa-phone" aria-hidden="true"></i></span> <?php the_field('phone', get_option( 'page_on_front' ));  ?></p>
                <p class="footer-address"><span class="address"><i class="fas fa-map-marker"></i></span><?php the_field('address', get_option( 'page_on_front' ));  ?></p>
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