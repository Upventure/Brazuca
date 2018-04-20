<!DOCTYPE html>
<html lang="nl">
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico"/>
<meta name="robots" content="noindex, nofollow">
<title>Brazuca <?php wp_title('');?></title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Jeroen Goemans" content="Mondfit">
<meta name="description" content="Mondhygiënist in Rotterdam en Katwijk">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">




<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- <div class="container-doc container-fixed-padding color-blue"> -->
<div class="mask-menu">
<div class="nav-container">

<nav class="fixed">

          <div class="nav-images">
          <span>    <img class="logo" src="<?php bloginfo('template_url')?>/Images_Brazuca/Logo-Brazuca.png">  </span>

<!-- MF_LOGO_W_200px.png
mondfit_logo_wit.png -->
          <span>
             <img class="hamburger" src="<?php bloginfo('template_url')?>/Images_Brazuca/hamburger.png">
           </span>
          </div>


          <?php
          wp_nav_menu( array(

              'theme_location' => 'header-menu',
              'container' => ' ',
              'menu_class' => ''

               )
              );
              ?>

</nav>
</div>
</div>
