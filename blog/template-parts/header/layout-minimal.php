<?php
/**
 * Template part for minimal Header layout.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travelop
 */
?>

<div class="header-container__flex">
	<?php travelop_social_list( 'header' ); ?>
	<div class="site-branding">
		<?php travelop_header_logo() ?>
		<?php travelop_site_description(); ?>
	</div>
	<?php travelop_main_menu(); ?>
</div>
