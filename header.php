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
  <!-- Bootstrap 4.5.3 -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/bootstrap/css/bootstrap.min.css">
  <!-- Aqui va el CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/xcode.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/highlight/styles/default.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="my-logo">
  <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
</header>
<?php wp_nav_menu( array( 'header-menu' => 'header-menu' ) ); ?>



<nav class="navbar navbar-expand-lg navbar-dark bg-white border-bottom shadow-sm">
  <div class="container-xl">
    <a class="navbar-brand text-dark" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample07XL">
      <ul class="navbar-nav mr-auto">
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
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Buscar" aria-label="Search">
      </form>
    </div>
  </div>
</nav>


 

<div class="container"><!-- INICIO Contenedor  -->
