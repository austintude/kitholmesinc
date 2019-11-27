<?php
/**
 * Template part for displaying the header branding
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<div class="site-branding">
<div id="mobileTopBar">
	&nbsp;
</div>
<?php the_custom_logo(); ?>
<div class="titleTagWrapper">
		<h1 class="site-title">
			&nbsp;
			<!-- <?php bloginfo( 'name' ); ?> -->
		</h1>
		<h2 class="tagline"><?php bloginfo( 'description' ); ?></h2>
</div>
</div><!-- .site-branding -->
