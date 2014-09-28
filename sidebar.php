<!-- Target for toggling the sidebar `.sidebar-checkbox` is for regular
     styles, `#sidebar-checkbox` for behavior. -->
<input type="checkbox" class="sidebar-checkbox" id="sidebar-checkbox">

<!-- Toggleable sidebar -->
<div class="sidebar" id="sidebar">
  <div class="sidebar-item">
    <p><?php bloginfo( 'description' ); ?></p>
  </div>

  <nav class="sidebar-nav">
    <ul>
        <?php
            wp_nav_menu(array(
                'theme_location' => 'lanyonwp-nav-menu',
                'items_wrap' => '%3$s',
                'container' => false,
            ));
        ?>
    </ul>
  </nav>

  <div class="sidebar-widgets">

    <?php if ( is_active_sidebar( 'lanyonwp-sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'lanyonwp-sidebar' ); ?>
    <?php endif; ?>

  </div>

  <div class="sidebar-item">
    <p>
      &copy; <?php echo date("Y"); ?>. All rights reserved.
    </p>
  </div>
</div>