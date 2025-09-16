<?php
/**
 * Header Navbar (bootstrap4)
 *
 * @package Understrap
 * @since 1.1.0
 */

defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<nav id="main-nav" class="navbar navbar-expand-md navbar-dark fixed-top tbics-nav" aria-labelledby="main-nav-label">
  <h2 id="main-nav-label" class="screen-reader-text">
    <?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
  </h2>

  <?php if ( 'container' === $container ) : ?>
    <div class="container">
  <?php endif; ?>

      <?php get_template_part( 'global-templates/navbar-branding' ); ?>

      <!-- Mobile title in the navbar (visible ≤ $nav-break) -->
      <div class="tbics-mobile-title" role="heading" aria-level="1">
        <span class="line1">APSCE TBICS</span>
        <span class="line2">Festival of Learning 2026</span>
      </div>

      <!-- Hamburger Icon -->
      <button class="navbar-toggler side-menu-toggle" type="button" aria-label="Toggle side menu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Bootstrap Menu (desktop) -->
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <?php
        wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => '',
            'menu_class'      => 'navbar-nav ml-auto',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'depth'           => 2,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
          )
        );
        ?>
      </div><!-- .collapse -->

  <?php if ( 'container' === $container ) : ?>
    </div><!-- .container -->
  <?php endif; ?>

</nav><!-- #main-nav -->

<!-- Side Menu -->
<div id="side-menu" class="side-menu">
  <button class="menu-close" aria-label="Close menu">&times;</button>
  <?php
  wp_nav_menu(array(
    'theme_location' => 'primary',
    'container'      => false,
    'menu_class'     => 'side-menu-links',
    'fallback_cb'    => '__return_false'
  ));
  ?>
</div>
