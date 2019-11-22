<?php
/**
 * Template part for oneThreeWrapper
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
$leftonethirdblock	= get_field('leftonethirdblock');
$righttwothirdsblock	= get_field('righttwothirdsblock');
$cta_form_url			= get_field('cta_form_url');
$cta_text			= get_field('cta_text');
$cta_loading_image			= get_field('cta_loading_image');
?>
	<div class="onethreewrapper">
		<div class="leftOneThirdBlock">
			<img src="<?php echo $leftonethirdblock['url']; ?>" alt="<?php echo $leftonethirdblock['alt']; ?>">

		</div><!-- end .leftBlock -->
		<div class="rightTwoThirdsBlock">
			<div class="content">
			<?php echo $righttwothirdsblock; ?>
			</div><!-- end .content -->
		</div><!-- end .rightBlock -->
	</div> <!-- end .wrapper -->
	<div class="ctaButton">
	<!-- <amp-lightbox id="my-lightbox" layout="nodisplay">
    <div class="lightbox" on="tap:my-lightbox.close" role="button" tabindex="0">

      <amp-iframe width="350" height="300" layout="fixed"
              sandbox="allow-scripts allow-same-origin allow-popups" frameborder="0"
              src="<?php echo $cta_form_url; ?>">
    <amp-img layout="fill"
             src="<?php echo $cta_loading_image['url']; ?>"
             placeholder></amp-img>
  </amp-iframe>
    </div>
  </amp-lightbox> -->
  <a href="<?php echo $cta_form_url; ?>">
  <button id="estimate" class="btn btn-lg btn-danger" role="button" tabindex="0"><?php echo $cta_text; ?> »</button>
</a>
	</div><!-- end .ctaButton -->
