<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brutal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php 
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>

		<?php
		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php brutal_posted_on(); ?>
				<?php //brutal_byline(); ?> 
			</div><!-- .entry-meta -->
		<?php 
		endif; ?>
	
	</header><!-- .entry-header -->

	<?php brutal_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		/*	
			the_content( sprintf(
				wp_kses(
					// translators: %s: Name of current post. Only visible to screen readers 
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brutal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		*/			
			
			$continue_reading_text = sprintf( wp_kses(
					 //translators: %s: Name of current post. Only visible to screen readers 
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brutal' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			); 
			
			if ( is_singular() ) :
				the_content( $continue_reading_text );
			else :
				the_excerpt( $continue_reading_text );
			endif;
		
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'brutal' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php brutal_tag_list(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->


