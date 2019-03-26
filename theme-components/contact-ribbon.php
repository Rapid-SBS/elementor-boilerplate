<!-- ===============[ Contact Ribbon ]=============== -->

<div id="contact-ribbon" 

	<?php
	    if (get_theme_mod( 'override_color' ) == 1) {
	        echo 'style="background-color: ';
	        echo get_theme_mod('contact_ribbon_color', '#ff0000');
	        echo ' !important;">';
	    } else {
	        echo 'class="primary-highlight-color"> ';		        
	    }
	?>

<div class="container">
    <div class="row">
	
	  <div class="col-sm-4 contact-ribbon-icons text-center">
	        <img src="<?php echo get_theme_mod('contact_icon1', '/wp-content/themes/rapid_bootstrap/img/map-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>>
	        <p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text1', '111 11th Ave City, WA 98000'); ?></p>
	  </div>
	  
	  <div class="col-sm-4 contact-ribbon-icons text-center">
	  	<img src="<?php echo get_theme_mod('contact_icon2', '/wp-content/themes/rapid_bootstrap/img/email-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>>
	  	<a href="tel:<?php echo get_theme_mod('contact_ribbon_text2', ''); ?>"><p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text2', '(111) 111-1111'); ?></p></a>
	  </div>
	  
	  <div class="col-sm-4 contact-ribbon-icons text-center">
	  	<img src="<?php echo get_theme_mod('contact_icon3', '/wp-content/themes/rapid_bootstrap/img/call-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('contact_icons_height' , '50') . '" width="' . get_theme_mod('contact_icons_width' , '') . '"'; ?>>
	  	<a href="mailto:<?php echo get_theme_mod('contact_ribbon_text3', ''); ?>"><p class="contact-ribbon-span"><?php echo get_theme_mod('contact_ribbon_text3', 'email@example.com'); ?></p></a>
	  </div>
	
    </div><!-- /row -->
</div><!-- /container -->

<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_contact_ribbon.js"></script>

</div><!-- /contact-ribbon -->