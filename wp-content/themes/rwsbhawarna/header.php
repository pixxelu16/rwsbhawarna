<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php bloginfo('template_url'); ?>/assets/css/cutmize.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		 <script src= https://www.ptiacademy.in//assets/front/js/angular.min.js></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:400,700&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet"> 
<?php wp_head(); ?>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V1N8DMYE4S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V1N8DMYE4S');
</script>
	
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
<header id="masthead" class="site-header" role="banner">

<?php if ( has_nav_menu( 'top' ) ) : ?>

<div class="navigation-top">
<div class="wrap">
<div class="row">
<div class="col-md-3">
<div class="logo-left">
<?php the_custom_logo(); ?>
</div>
</div>
<div class="col-md-9">
<div class="top-buttion-row">
<div class="btn-box">
<a href="tel:247999, 247997" class="phone-bt"><i class="fa fa-mobile" aria-hidden="true"></i>247999, 247997</a>
<a href="#" class="login-btn popmake-home-work">LOGIN FOR HOME WORK</a>
</div>
<div class="log-boxtop">
<ul>
<li><a href="http://rwsbhawarna.com/what-offer/"><img src="<?php bloginfo('template_url'); ?>/assets/images/india-school-image.png"></a></li>
<li><a href="http://rwsbhawarna.com/british-council/"><img src="<?php bloginfo('template_url'); ?>/assets/images/british-image.png"></a></li>
</ul>
</div>
</div>
<div class="center-nav">
<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
</div>
</div>
</div>
</div>
</div>

<?php endif; ?>
</header>
