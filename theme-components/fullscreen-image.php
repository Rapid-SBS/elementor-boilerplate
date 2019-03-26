<!-- fullscreen-image.php -->

<!-- ==========[ header.php ]========== -->
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
    <script src="/wp-content/themes/rapid_bootstrap/js/parallax.js"></script>        
     	
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
      }
      if (get_theme_mod( 'enable_scrollmagic' ) == 1) {
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js"></script>';
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>';
        echo '<script src="/wp-content/themes/rapid_bootstrap_1.01/includes/scrollmagic.code.js"></script>';
        echo '<link rel="stylesheet" href="/wp-content/themes/rapid_bootstrap/css/scrollmagic.css"></script>';
      }  
    ?>
    
<div class="blog-masthead">            
<!-- ==========[ nav-bar.php ]========== -->           

<?php
  if ( is_admin_bar_showing() ) {
    echo '<div class="adminmenuspacer"></div>';
  }
?>   

<nav class="navbar navbar-expand-xl navbar-dark notfixednavbarspacer" style="background-color: <?php echo get_theme_mod('fullscreen_navbar_color', ''); ?>">    

  <div class="container-fluid">
	       
      <!-- Nav Brand Image -->
      <a class="nav-brand" href="<?php echo get_theme_mod('nav_brand_url', '#'); ?> "
        <?php
	    if (get_theme_mod( 'display_nav_brand' ) == 1) {
	        echo ' style="' . get_theme_mod( 'nav_brand_css_textarea' ) . '">';
	    } else {
	        echo ' style="display: none;">';		        
	    }
        ?>
      <img src="<?php echo get_theme_mod('nav_brand_image', '#'); ?>" <?php echo ' height="' . get_theme_mod('nav_brand_image_height' , '40') . '" width="' . get_theme_mod('nav_brand_image_width' , '') . '"'; ?>
      </a>	
      
      <!-- Nav Brand Text -->
      <a class="navbar-brand nav_brand_text" href="<?php echo get_theme_mod('nav_brand_url', '#'); ?> ">
          <?php echo get_theme_mod('nav_brand_text', 'Rapid-SBS'); ?>
      </a>
      
      <div class="d-flex justify-content-end">
      <!-- Nav Collapse Toggle -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarCollapse">
      <?php
	 wp_nav_menu( array(
	    'theme_location'		=> 'header-menu',
	    'depth'			=> 2,
		'container'		=> '',
		'container_class'	=> '',
		'container_id'		=> '',
		'menu_class'		=> 'navbar-nav mr-auto',
	    'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
	    'walker'			=> new WP_Bootstrap_Navwalker()
	 ));
      ?>
      
      </div><!-- /.navbar-collapse -->
      </div><!-- /.d-flex -->
      
  </div>
</nav>	
</div><!-- /container-fluid -->

<style>
.navbar-toggler {
	position: absolute;
	top: 10px;
}
</style>

<!-- ==========[Image]========== -->

<div class="fullscreen-image" style="background-image: url(<?php echo get_theme_mod('fullscreen_image_url', ''); ?>); height: <?php echo get_theme_mod('fullscreen_image_height', '100vh'); ?>;">
    <div class="fullscreen-image-overlay" style="background-color: <?php echo get_theme_mod('fullscreen_image_overlay', 'rgba(0,0,0,0.5)'); ?>;"></div>
    <div class="fullscreen-text-box"><h1 class="fullscreen-h1 text-center white-text" style="padding: 30px;"><?php echo get_theme_mod('fullscreen_image_textbox', '#'); ?></div>
</div>

<!-- ==========[ Announcement Ribbon ]========== -->

<div id="announcement-ribbon" 
	<?php
	    if (get_theme_mod( 'display_announcement_ribbon' ) == 1) {
	        echo ' style="' . get_theme_mod( 'announcement_ribbon_css_textarea' ) . '">';
	    } else {
	        echo ' style="display: none;">';		        
	    }
	?>

        <h3 class="announcement-ribbon-text text-center"><?php echo get_theme_mod('announcement_ribbon_text', 'Announcement!'); ?></h3>

</div><!-- /announcement-ribbon -->

<!-- ==========[ Contact Ribbon ]========== -->

<div class="fullscreen-contact-ribbon pad-t-40" style="background-color: <?php echo get_theme_mod('fullscreen_contact_ribbon_color', 'rgba(0,0,0,0.3)'); ?> !important;">	        

<div class="row">

  <div class="col-md-4 contact-ribbon-icons text-center">
        <img src="<?php echo get_theme_mod('contact_icon1', '/wp-content/themes/rapid_bootstrap/img/map-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>>
        <p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text1', '111 11th Ave City, WA 98000'); ?></p>
  </div>
  
  <div class="col-md-4 contact-ribbon-icons text-center">
  	<a href="tel:<?php echo get_theme_mod('contact_ribbon_text2', ''); ?>"><img src="<?php echo get_theme_mod('contact_icon2', '/wp-content/themes/rapid_bootstrap/img/email-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>></a>
  	<a href="tel:<?php echo get_theme_mod('contact_ribbon_text2', ''); ?>"><p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text2', 'email@example.com'); ?></p></a>
  </div>
  
  <div class="col-md-4 contact-ribbon-icons text-center">
  	<a href="mailto:<?php echo get_theme_mod('contact_ribbon_text3', ''); ?>"><img src="<?php echo get_theme_mod('contact_icon3', '/wp-content/themes/rapid_bootstrap/img/call-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>></a>
  	<a href="mailto:<?php echo get_theme_mod('contact_ribbon_text3', ''); ?>"><p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text3', '(111) 111-1111'); ?></p></a>
  </div>

	<?php
		    if (get_theme_mod( 'display_copyright' ) == 1) {
		        echo '<div id="copyright" class="container" style="padding: 10px;">' , get_theme_mod('copyright_text', '&#169; 2018. All Rights Reserved.');
		    } else {
		        echo '<div id="copyright" class="container" style="display: none;"></div>';		        
		    }
		?>			
		</div><!-- /.copyright -->
	</div><!-- /row -->
	
</div><!-- /row -->
</div><!-- /fullscreen-contact-ribbon -->

<!-- ==========[ Social Sidebar ]========== -->

<?php get_template_part( 'theme-components/social-sidebar' ); ?>

<!-- ==========[ footer.php ]========== -->
    
	<?php wp_footer(); ?> 
	
	</body>
  
</html>
