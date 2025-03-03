<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package foodie_theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info text-center">
			<div class="container">
				<?php echo "©".date('Y')." Foodie Receipes." ?>
				<?php echo "Web Design & Development Provided by Pritesh Rajpura"; ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
