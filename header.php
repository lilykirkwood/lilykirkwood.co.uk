<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.min.css">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <!-- site header -->
    <header class="site-header">
      <div class="mw-container">
        <a id="logo-expanded" class="flex" href="http://lilykirkwood.co.uk/"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" ></a>
        <a id="logo-collapsed" class="flex" href="http://lilykirkwood.co.uk/"><img src="http://lilykirkwood.co.uk/wp-content/uploads/2016/11/lk-logo-s2.png" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" ></a>

        <nav class="site-nav left flex">
          <?php
          $args = array (
            'theme_location' => 'primary-left'
          );
          wp_nav_menu( $args ); ?>
        </nav>
        <nav class="site-nav right flex">
          <?php
          $args = array (
            'theme_location' => 'primary-right'
          );
          wp_nav_menu( $args ); ?>
        </nav>

      </div> <!--mw-container-->
    </header>

    <main>
