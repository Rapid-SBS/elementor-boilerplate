<!-- Nav Bar -->

<?php
  if ( is_admin_bar_showing() ) {
    echo '<div class="adminmenuspacer"></div>';
  }
?>   

 <?php
    $nav_collapse_width = get_theme_mod( 'navbar_collapse' ); 
 
    if (get_theme_mod( 'nav_fixed_toggle' ) == 1) {
	    echo '<nav class="navbar navbar-dark fixednavbar '; 
	  } else {
	    echo '<nav class="navbar navbar-dark notfixednavbar '; 
	  }
	  
    if( $nav_collapse_width  != '' ) {
        switch ( $nav_collapse_width  ) {
            case 'sm':
                echo 'navbar-expand-sm ';
                break;
            case 'md':
                echo 'navbar-expand-md ';
                break;
            case 'lg':
                echo 'navbar-expand-lg ';
                break;
            case 'xl':
                echo 'navbar-expand-xl ';
                break;
        }
    }
	 
    if (get_theme_mod( 'override_navbar_color' ) == 1) {
	        echo ' " style="background-color: ';
	        echo get_theme_mod('navbar_color', '');
	        echo ' !important;">';
	    } else {
	        echo ' primary-neutral-color">';		        
	    }
?>   

  <div class="container">
	       
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
	
	<form class="form-inline my-2 my-lg-0" 
          <?php
	    if (get_theme_mod( 'display_search' ) == 1) {
	        echo '>';
	    } else {
	        echo 'style="display: none;">';		        
	    }
	  ?> 
          <input class="form-control mr-sm-2" type="search" placeholder="Enter text..." aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0 accent-color" type="submit">Search</button>
      </form>
      
      </div><!-- /.navbar-collapse -->
      
  </div><!-- /.container -->
</nav>