<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit();

$bootstrap_version = get_theme_mod(
    'understrap_bootstrap_version',
    'bootstrap4'
);
$navbar_type = get_theme_mod('understrap_navbar_type', 'collapse');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&family=Overlock:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Roboto:ital,wght@0,100;0,300;0,700;1,400;1,500&display=swap" rel="stylesheet">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action('wp_body_open'); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">
		<div class=top-up>
			<div class="top-header">
				<div class="container animate__animated animate__backInDown">
					<div class="logo-holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" width="160">
					</div>
					<div class="social-media">
						<a href="tel:08 638 5863"><i class="fa fa-phone"><span>08 638 5863</span></i></a>
						<a href="mailto:ogholili@yahoo.com"><i class="fa fa-envelope"><span>Send Email</span></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>				
					</div>				
				</div>
			</div>
		</div>
		<div class=top>
			<div class="top-header">
				<div class="container-fluid animate__animated animate__backInDown">
					<div class="logo-holder">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo" width="160">
					</div>
					<div class="social-media">
						<a href="tel:08 638 5863"><i class="fa fa-phone"><span>08 638 5863</span></i></a>
						<a href="mailto:ogholili@yahoo.com"><i class="fa fa-envelope"><span>Send Email</span></i></a>
						<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>				
					</div>
					<div>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e(
          'Toggle navigation',
          'understrap'
      ); ?>">
							<div class='bar'></div>
							<div class='bar'></div>
							<div class='bar'></div>
						</button>
					</div>
				</div>
			</div>
		</div>

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e(
      'Skip to content',
      'understrap'
  ); ?></a>

		<?php get_template_part(
      'global-templates/navbar',
      $navbar_type . '-' . $bootstrap_version
  ); ?>

	</header><!-- #wrapper-navbar end -->

	


