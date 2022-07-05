<?php
/**
 * Template Name: Template Contact
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit();

get_header();
$container = get_theme_mod('understrap_container_type');

if (is_front_page()) {
    get_template_part('global-templates/hero');
}
?>

<div class="home-hero contact">
	<header class="header-page entry-header">
		<div class="container  animate__animated animate__backInDown">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</div>
	</header><!-- .entry-header -->
</div>

<div class="wrapper" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while (have_posts()) {
         the_post();
         get_template_part('loop-templates/content', 'page');

         // If comments are open or we have at least one comment, load up the comment template.
         if (comments_open() || get_comments_number()) {
             comments_template();
         }
     } ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- #content -->
	<div class="contact-social-media">
		<a href="tel:08 638 5863"><i class="fa fa-phone"><span>08 638 5863</span></i></a>
		<a href="mailto:ogholili@yahoo.com"><i class="fa fa-envelope"><span>Send Email</span></i></a>
		<a href="#contact-map"><i class="fa fa-map-marker">Via XX Settembre 12, Verona, Italy </i></a>
	</div>
	
	<div class="contact-us-form">
		<?php echo do_shortcode('[contact-form-7 id="124" title="Contact Us"]'); ?>
	</div>

	<div class="container-fluid" id="contact-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2799.5332602671547!2d11.003297615070975!3d45.43890924315241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5f39fd941175%3A0x96a6a0f804bb2f42!2sVia%20Venti%20Settembre%2C%2012%2C%2037129%20Verona%20VR!5e0!3m2!1sen!2sit!4v1656855925055!5m2!1sen!2sit" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div>

</div><!-- #full-width-page-wrapper -->


<?php get_footer();
