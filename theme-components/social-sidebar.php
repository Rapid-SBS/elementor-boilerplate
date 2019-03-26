<!-- ==========[ Social Sidebar ]========== -->

<div id="social-sidebar" 
	<?php echo ' style="' . get_theme_mod( 'social_sidebar_css_textarea' ) . '">'; ?>

<div id="social-sidebar-item1" class="social-sidebar-item text-center">
    <a href="<?php echo get_theme_mod('social_sidebar_url1', '#'); ?>" target="_blank">
	<img src="<?php echo get_theme_mod('social_sidebar_icon1', '/wp-content/themes/rapid_bootstrap/img/map-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('social_sidebar_icons_height' , '30') . '" width="' . get_theme_mod('social_sidebar_icons_width' , '') . '"'; ?> >
    </a>
</div>

<div id="social-sidebar-item2" class="social-sidebar-item text-center">
    <a href="<?php echo get_theme_mod('social_sidebar_url2', '#'); ?>" target="_blank">
	<img src="<?php echo get_theme_mod('social_sidebar_icon2', '/wp-content/themes/rapid_bootstrap/img/map-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('social_sidebar_icons_height' , '30') . '" width="' . get_theme_mod('social_sidebar_icons_width' , '') . '"'; ?> >
    </a>
</div>

    <div id="paypal-button" class="social-sidebar-item text-center" 
	<?php 
	    if (get_theme_mod( 'display_paypal_button' ) == 1) {
	        echo '>';
	    } else {
	        echo 'style="display: none;">';		        
    	    } 
    	?>
    	
    	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="<?php echo get_theme_mod('paypal_button_key', 'Input Key'); ?>">
		<input type="image" src="/wp-content/themes/rapid_bootstrap/img/paypal_icon.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" width="<?php echo get_theme_mod('paypal_button_height', '30'); ?>" height="<?php echo get_theme_mod('paypal_button_width', '30'); ?>">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
	</form>

    </div><!-- /paypal-button -->
    
</div><!-- /social-sidebar -->