<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="site-footer">
		<div class="footerGrid">
	<?php get_template_part( 'template-parts/footer/_footer-block1' ); ?>
	<?php get_template_part( 'template-parts/footer/_footer-block2' ); ?>
</div><!-- end .footerGrid -->
		<?php get_template_part( 'template-parts/footer/info' ); ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
