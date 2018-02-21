<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<?php //if ( 'post' === get_post_type() ) : ?>

<?php /*foreach ( get_post_types( '', 'names' ) as $post_type ) {
   echo '<p>' . $post_type . '</p>';
} */ ?>


<?php    
$path =  dirname (__FILE__, 2) . '/page-templates/news.php';

require_once( $path );
/*
	$args = array(
       '_builtin' => false,
    );

	
	$path =  dirname (__FILE__, 2) . '/single.php';

    $output = 'names'; // names or objects, note names is the default
    $operator = 'and'; // 'and' or 'or'

    $post_types = get_post_types( $args, $output, $operator ); 

	$is_custome = false;

    foreach ( $post_types as $post_type ) {

		if( $post_type === get_post_type()) {
			require_once( $path );
			$is_custome = true;
			break;
		} else {
			$is_custome = false;
		}
	} 
?>

<?php if( !$is_custome ) : ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>

<?php endif ?>