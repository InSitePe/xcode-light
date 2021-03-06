<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
  <title><?php bloginfo('name'); ?> &raquo; <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Elias Fuentes">
  <meta name="generator" content="Visual Studio Code">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/fontawesome-free/css/all.min.css">
  <!-- Bootstrap 4.5.3 -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- XCODE Style  -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/xcode.css">
  <!-- Highlight -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/highlight/styles/default.css">
  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/assets/icon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_directory'); ?>/assets/icon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/icon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_directory'); ?>/assets/icon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/icon/favicon-16x16.png">
  <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/icon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_directory'); ?>/assets/icon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>
  
</head>
<body <?php body_class(); ?>>

<nav class="navbar navbar-expand-lg navbar-dark bg-white border-bottom shadow-sm">
  <div class="container-xl">
    <a class="navbar-brand text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>"><i class="fab fa-mixer"></i>CODE<!-- <?php bloginfo('name'); ?> --></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- aqui vamos -->
    <!--
    <?php wp_nav_menu([ 
      'theme_location' => 'header-menu',
      'menu_class' => 'collapse navbar-collapse', 
      'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse ',
      'items_wrap' => '<ul id="%1$s" class="navbar-nav mr-auto %2$s">%3$s</ul>',
    ]); ?>
      -->
      
      <!-- wp_bootstrap_xcode -->
      <!--
     <?php  /* menu */
                    wp_nav_menu([
                                'menu'              => 'header-menu',
                                'theme_location'    => 'header-menu',
                                'depth'             => 1,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse ',
                                'container_id'      => 'navbarsExample07XL',
                                'menu_class'        => 'navbar-nav mr-auto ',
                                'fallback_cb'       => 'wp_bootstrap_xcode::fallback',
                                'walker'            => new WP_Bootstrap_Xcode()
                    ]); 
                 ?>
      -->
      <!-- fin -->
  
    <div class="collapse navbar-collapse" id="navbarsExample07XL">
      
      <ul class="navbar-nav mr-auto">
                      <!--
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu text-dark" aria-labelledby="dropdown07XL">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
                    -->
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
      </form>
    </div>
                     
  </div>
</nav>


 

<div class="container"><!-- INICIO Contenedor  -->
