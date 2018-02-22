<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<?php

	$is_custome = false;

		if( get_post_type() === 'shares-post') {
			require_once( dirname (__FILE__, 1) . '/page-templates/shares.php' );
			$is_custome = true;
			get_footer(); 
			
		} elseif (get_post_type() === 'services-post') {
			require_once( dirname (__FILE__, 1) . '/page-templates/services.php' );
			$is_custome = true;
			get_footer(); 
			
		} elseif (get_post_type() === 'masters-post') {
			require_once( dirname (__FILE__, 1) . '/page-templates/masters.php' );
			$is_custome = true;
			get_footer(); 
			
		} elseif (get_post_type() === 'new-post') {
			require_once( dirname (__FILE__, 1) . '/page-templates/news.php' );
			$is_custome = true;
			get_footer(); 
			
		} elseif (get_post_type() === 'article-post') {
			require_once( dirname (__FILE__, 1) . '/page-templates/articles.php' );
			$is_custome = true;
			get_footer(); 
			
		} else {
			$is_custome = false;
		}
?>

<?php if( !$is_custome ) : ?>
<?php get_header(); ?>

<div class="main-container">
	<div class="main-grid">
		<main class="main-content">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?>

		</main>
		<?php get_sidebar(); ?>

	</div>
</div>

<?php get_footer(); ?>

<?php endif ?>

