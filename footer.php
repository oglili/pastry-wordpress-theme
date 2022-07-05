<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit();

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">
	<div class="arrow-top">
		<a href="#"><i class="fa fa-arrow-up"></i></a>
	</div>
	<div class="subscribe">
		<div class="subscribe-content">
			<div class="container">
				<h2>
					<span>Sign Up</span>
					Subscribe to our email newsletter
				</h2>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-11">
						<?php echo do_shortcode('[contact-form-7 id="46" title="Newsletter"]'); ?>
					</div>
					
				</div>
			</div>
		</div>	
    </div>
	<div class="footer-info">
		<div class=top>
			<div class="top-header">
				<div class="container-fluid">
					<div class="logo-holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" width="160">
					</div>
					<div class="social-media"><a href="#"><span>@copy Oghomwen Osazuwa 2022</span></a></div>
					<div class="social-media">
						<a href="tel:08 638 5863"><i class="fa fa-phone hide"><span>08 638 5863</span></i></a>
						<a href="mailto:ogholili@yahoo.com"><i class="fa fa-envelope hide"><span>Send Email</span></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>				
					</div>						
				</div>	
			</div>	
		</div>
	</div>
</div>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

