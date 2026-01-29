<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="container site-header-inner">
      <div>
        <h1 class="site-title">
          <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
        </h1>
        <p style="font-size: 0.9rem; color:#9ca3af;">
          <?php bloginfo('description'); ?>
        </p>
      </div>
      <nav class="site-nav">        
      <?php
       wp_nav_menu( array(
         'theme_location' => 'primary',
         'container'      => false,
         'fallback_cb'    => false,
         'items_wrap'     => '%3$s', // niente <ul>, usiamo direttamente i <a> (lo stile li prende lo stesso)
       ) );
       ?>
      </nav>
    </div>
  </header>