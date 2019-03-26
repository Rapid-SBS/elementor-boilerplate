<!-- ==========[ Info Ribbon ]========== -->

<div class="info-ribbon primary-neutral-color">
<div class="container">
	
	<?php
	    $post_id = get_theme_mod('info_ribbon_post_id' , '1');
	    $queried_post = get_post($post_id);
	    
	    if ( get_post_status ( $post_id ) == 'publish' ) {
		echo $queried_post->post_content;
		} else {
		echo '<h3 class="text-center">Invalid Post ID </h3>';
		}	    	 
	?>

</div><!-- /container -->
</div><!-- /info-ribbon -->