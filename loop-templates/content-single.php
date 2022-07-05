<?php
/**
 * Single post partial template
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit(); ?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	
	<?php
//echo get_the_post_thumbnail($post->ID, 'medium');
?>

	<div class="entry-content content-image-size">
		<div class="row">
			<div class="col-md-4 ">
			<?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
			<div class="post-metadata">
				<div class="container">
					<div class="row">
						<?php understrap_entry_footer(); ?>
					</div>	
				</div>
			</div>
		</div>
		<div class="col-md-8">
		
		<?php
  the_content();
  understrap_link_pages();
  ?>
  </div>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
