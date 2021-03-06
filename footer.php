<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brutal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<span>&copy; <?php echo date('Y'); ?></span>

			<span class="sep"> | </span>
			<span>
			<?php
				$author_string = get_the_author_meta('display_name', 1);
				/* translators: 1: Primary site author. */
				printf( esc_html__( '%1$s', 'brutal' ), $author_string );
			?>
			</span>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
