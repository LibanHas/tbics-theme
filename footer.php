<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>



			
			<div class="site-info custom-footer">
				<div class="footer-text">
				<p class="footer-title">APSCE TBICS<br>Festival of Learning 2026</p>
				<p class="footer-location">Kumamoto, Japan</p>
				<p class="footer-dates">June 25–27, 2026</p>
				<p class="footer-copy">Copyright © Asia-Pacific Society for Computers in Education. All rights reserved.</p>
				</div>
			</div>
			


		

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

