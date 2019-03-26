<!-- ==========[ Services Ribbon ]========== -->

<div id="services-ribbon" 
	<?php /* Checks to see if Display Section checkbox is checked */
	    if (get_theme_mod( 'display_services_ribbon' ) == 1) {
	        echo '>';
	    } else {
	        echo ' style="display: none;">';		        
	    }
	?>

<div id="gsapbg1" class="container">
  
  <div class="row">
    <div class="col-md-12">
      <h1 class="text-center primary-neutral-text-color"><?php echo get_theme_mod('services_section_heading', 'Services'); ?></h1>
    </div>
  </div>
  
  <div class="row padding-tb-80">
  
    <div class="col-lg-6">
	<svg class="svgcircle1" width="<?php echo get_theme_mod('svgcontainer_size', '60'); ?>" height="<?php echo get_theme_mod('svgcontainer_size', '60'); ?>">
  	    <circle cx="<?php echo get_theme_mod('svgcircle_radius', '30'); ?>" cy="<?php echo get_theme_mod('svgcircle_radius', '30'); ?>" r="<?php echo get_theme_mod('svgcircle_radius', '30'); ?>" fill="<?php echo get_theme_mod('svgcircle1_color', '#f00'); ?>" />
	</svg>
    </div><!-- /.col -->
    
    <div class="col-lg-6">
      <h2 class="text-center primary-neutral-text-color"><?php echo get_theme_mod('services_item1_heading', ''); ?></h2>    
      <p class="text-center"><?php echo get_theme_mod('services_item1_text', ''); ?></p>
    </div><!-- /.col -->
    
  </div><!-- /.row -->
  
  <div class="row">
  
    <div class="col-lg-6">
	<svg class="svgcircle2" width="80" height="80">
  	    <circle cx="40" cy="40" r="40" fill="<?php echo get_theme_mod('svgcircle2_color', '#0f0'); ?>" />
	</svg>
    </div><!-- /.col -->
    
    <div class="col-lg-6">
      <h2 class="text-center primary-neutral-text-color"><?php echo get_theme_mod('services_item2_heading', ''); ?></h2>
      <p class="text-center"><?php echo get_theme_mod('services_item1_text', ''); ?></p>
    </div><!-- /.col -->
    
  </div><!-- /.row -->
  
  <div class="row">
  
    <div class="col-lg-6">
	<svg class="svgcircle3" width="80" height="80">
  	    <circle cx="40" cy="40" r="40" fill="<?php echo get_theme_mod('svgcircle3_color', '#00f'); ?>" />
	</svg>
    </div><!-- /.col -->
    
    <div class="col-lg-6">
      <h2 class="text-center primary-neutral-text-color"><?php echo get_theme_mod('services_item3_heading', ''); ?></h2>
      <p class="text-center"><?php echo get_theme_mod('services_item1_text', ''); ?></p>
    </div><!-- /.col -->
    
  </div><!-- /.row -->
    
</div><!-- /.container -->    
   
<script>
$(document).ready(function(){  

    
    })
    
</script>    

</div><!-- /services-ribbon -->