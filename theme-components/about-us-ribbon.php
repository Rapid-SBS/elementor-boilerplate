<!-- ==========[ About Us Ribbon ]========== -->

<div id="about-us-ribbon" 

	<?php
	    if (get_theme_mod( 'override_about_us_color' ) == 1) {
	        echo 'style="background-color: ';
	        echo get_theme_mod('about_us_ribbon_color', '#ff0000');
	        echo ' !important;"> ';
	    } else {
	        echo ' class="primary-highlight-color"> ';		        
	    }
	?>

<div class="container">
	<h3 class="text-center">
	<?php
	    $post_id = get_theme_mod('about_us_post_id' , '1');
	    $queried_post = get_post($post_id);
	    
	    if ( get_post_status ( $post_id ) == 'publish' ) {
		echo $queried_post->post_title;
		echo "</h3><p> $queried_post->post_content</p>";
		} else {
			echo 'Invalid Post ID </h3>';
		}	    	 
	?>
	
</div><!-- /container -->
</div><!-- /about-us-ribbon -->