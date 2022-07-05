<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit();

$container = get_theme_mod('understrap_container_type');
?>

<nav id="main-nav" class="navbar navbar-expand-md" aria-labelledby="main-nav-label">

	<h2 id="main-nav-label" class="screen-reader-text">
		<?php esc_html_e('Main Navigation', 'understrap'); ?>
	</h2>

  <!-- The WordPress Menu goes here -->
		<?php wp_nav_menu([
      'theme_location' => 'primary',
      'container_class' => 'collapse navbar-collapse',
      'container_id' => 'navbarNavDropdown',
      'menu_class' => 'navbar-nav',
      'fallback_cb' => '',
      'menu_id' => 'main-menu',
      'depth' => 2,
      'walker' => new Understrap_WP_Bootstrap_Navwalker(),
  ]); ?>

</nav><!-- .site-navigation -->
