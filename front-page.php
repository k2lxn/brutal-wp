<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brutal
 */

get_header( 'front' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			get_template_part( 'template-parts/content', 'frontpage' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer( 'front' );

