<!-- front-page chooses between front-page-primary.php and fullscreen.php -->
	
	<?php
	    if (get_theme_mod( 'use_fullscreen_image' ) == 0) {
		get_template_part( '/theme-components/front-page-primary' );
	    } else {
	        get_template_part( '/theme-components/fullscreen-image' );		        
	    }
	?>