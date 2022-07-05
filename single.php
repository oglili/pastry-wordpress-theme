<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit();

get_header();
$container = get_theme_mod('understrap_container_type');
?>
<div class="post-header"
	<?php if (has_post_thumbnail()) { ?>
		style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);"
	<?php } ?> >
	<div class="container">	
	<header class="entry-header">
		<div class="container  animate__animated animate__backInDown">
			<?php the_title('<h1 class="entry-title text-center">', '</h1>'); ?>
		</div>
	</header><!-- .entry-header -->
	</div>
</div>

<div class="wrapper" id="single-wrapper">
	<?php get_search_form(); ?>
	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">

				<?php while (have_posts()) {
        the_post();
        get_template_part('loop-templates/content', 'single');
        understrap_post_nav();

        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
    } ?>

			</main><!-- #main -->

			<!-- Do the right sidebar check -->
			<?php get_template_part('global-templates/right-sidebar-check'); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
