<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package prueba1
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<section id="intro" style="background: linear-gradient(45deg, rgba(29, 224, 153, 0.8), rgba(29, 200, 205, 0.8)), url('<?php bloginfo('template_url'); ?>/img/intro-bg.jpg') center top no-repeat;">

<div class="intro-text">
  <h2>Welcome to Avilon</h2>
  <p>We are team of talanted designers making websites with Bootstrap</p>
  <a href="#about" class="btn-get-started scrollto">Get Started</a>
</div>

<div class="product-screens">

  <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
	<img src="<?php bloginfo('template_url'); ?>/img/product-screen-1.png" alt="">
  </div>

  <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
	<img src="<?php bloginfo('template_url'); ?>/img/product-screen-2.png" alt="">
  </div>

  <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
	<img src="<?php bloginfo('template_url'); ?>/img/product-screen-3.png" alt="">
  </div>

</div>

</section><!-- #intro -->

<main id="main">



