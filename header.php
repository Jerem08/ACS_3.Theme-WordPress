<!doctype html>

<html <?php language_attributes(); ?>>

<head>
  <meta <?php bloginfo( 'charset' ); ?> />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="author" lang="fr" content="Laila PROVOST">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- balise php pour pouvoir modifier le titre du site -->
  <title><?php the_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="containerfluid">
    <!---NAV BAR--->
    <header id="header" class="d-flex justify-content-between flex-column">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent mb-5">
          <a class="navbar-brand" href="#">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" height="30" class="d-inline-block align-top" alt="logo Cuda" id="logo_cuda">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link text-uppercase ml-4" href="#section-our-services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase ml-4" href="#portfolio-container">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase ml-4" href="#our-team">Team</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase ml-4" href="#portfolio-container">Offices</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase ml-4" href="#get_in_touch">Contact</a>
              </li>
            </ul>
          </div>
        </nav>

<!-- contenu header -->


    </div>
    <h1 class="page-title"><?php bloginfo('name'); the_title(); ?></h1>

    <div class="overflow-background1 d-flex align-items-center justify-content-center">
      <img src="<?php bloginfo('template_directory'); ?>/img\Scroll-down.png" class="mt-5 mb-n5" height="52px" width="90.8px" alt="">
    </div>

  </header>
<div id="content">
