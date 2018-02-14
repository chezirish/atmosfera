<?php /*
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

 */?>



<section class="shares__content">
    <div class="row">
        <div class="medium-6 medium-centered small-centered large-uncentered  large-6 columns">   
            <div class="slick-item shares-block">
                <?php the_post_thumbnail('', array( 'class' => "",)) ?>
            </div>
        </div>
        <div class="medium-12 large-6 columns">
            <p><?php  the_time('d.m.Y'); ?></p>
            <h2><?php the_title() ?></h2>
            <?php the_content(); ?>
        </div>
    </div>
</section>