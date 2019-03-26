<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>         
    
    <style>
	@import url(' <?php echo get_theme_mod('font1', '') ?> ');
	@import url(' <?php echo get_theme_mod('font2', '') ?> ');
	@import url(' <?php echo get_theme_mod('font3', '') ?> ');
	@import url(' <?php echo get_theme_mod('font4', '') ?> ');
    </style>

    <?php wp_head();?>
    
  </head>
  
  <body>

    <!-- Animation Utilities -->
    <?php 
      if (get_theme_mod( 'enable_gsap_animations' ) == 1) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/TextPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/ColorPropsPlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/CSSRulePlugin.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/plugins/EaselPlugin.min.js"></script>';
        echo '<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_featurette.js"></script>';
      }
      if (get_theme_mod( 'enable_scrollmagic' ) == 1) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>';
        echo '<script src="/wp-content/themes/rapid_bootstrap_1.01/includes/scrollmagic.code.js"></script>';
        echo '<link rel="stylesheet" href="/wp-content/themes/rapid_bootstrap/css/scrollmagic.css"></script>';
      }  
      if (get_theme_mod( 'enable_smooth_scroll' ) == 1) {
        echo '<script src="/wp-content/themes/rapid_bootstrap/js/smooth-scroll.js"></script>';
      }  
      if (get_theme_mod( 'enable_jquery_lazy' ) == 1) {
        echo '<script src="/wp-content/themes/rapid_bootstrap/js/jquery.lazy.js"></script>';
        echo '<script src="/wp-content/themes/rapid_bootstrap/includes/jquerylazyloader.code.js"></script>';
      }  
    ?>
               
<div class="blog-masthead">
	<?php get_template_part( '/theme-components/nav-bar' ); ?> 
</div>
