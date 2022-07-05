<?php
/**
 * Template Name: Template About
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
    <div class="contact-social-media">
		<a href="tel:08 638 5863"><i class="fa fa-phone"><span>08 638 5863</span></i></a>
		<a href="mailto:ogholili@yahoo.com"><i class="fa fa-envelope"><span>Send Email</span></i></a>
		<a href="contact#contact-map"><i class="fa fa-map-marker">Via XX Settembre 12, Verona, Italy </i></a>
	</div>

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
	


</div><!-- #full-width-page-wrapper -->


<?php get_footer();
