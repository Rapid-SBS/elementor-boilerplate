<?php
/* Inserts Theme Colors into header */

function color_head(){
    ?>
    <style type="text/css">
    
    /* ========== Theme Colors ========== */
    	.primary-neutral-color {
    	    background-color: <?php echo get_theme_mod('primary_neutral_color', '#373D42'); ?> !important; 
    	}
    	
    	.primary-highlight-color {
    	    background-color: <?php echo get_theme_mod('primary_highlight_color', '#1e73be'); ?> !important; 
    	}
    	
    	.secondary-neutral-color {
    	    background-color: <?php echo get_theme_mod('secondary_neutral_color', '#eeeeee'); ?> !important; 
    	}
    	
    	.accent-color {
    	    background-color: <?php echo get_theme_mod('accent_color', '#dd9933'); ?> !important; 
    	}
  
    /* ========== Button Colors ========== */	  
	.btn.primary-highlight-color:hover {
    	    background-color: <?php echo get_theme_mod('button_primary_hover', '#bb7711'); ?> !important; 
	}
	
    	.btn.accent-color:hover {
    	    background-color: <?php echo get_theme_mod('button_accent_hover', '#bb7711'); ?> !important; 
	}
	
    /* ========== Text Colors ========== */	
    	.primary-highlight-text-color {
    	    color: <?php echo get_theme_mod('primary_highlight_color', '#1e73be'); ?> !important; 
    	}
    	
    	.primary-neutral-text-color {
    	    color: <?php echo get_theme_mod('primary_neutral_color', '#373D42'); ?> !important; 
    	}
    	
    	h1 {
    	    color: <?php echo get_theme_mod('primary_neutral_color', '#373D42'); ?>; 
    	}
    	
    	h3 {
    	    color: <?php echo get_theme_mod('primary_highlight_color', '#1e73be'); ?>; 
    	}
    	
    /* ========== Link Colors ========== */
    	/* unvisited link */
	a:link {
	    color: <?php echo get_theme_mod('unvisited_link_color', '#dddddd'); ?>;
	    text-decoration: none; 
	    transition: color 0.5s ease;
	    transition: background-color 0.5s ease;
	}
	
	/* visited link */
	a:visited {
	    color: <?php echo get_theme_mod('visited_link_color', '#cccccc'); ?>;
	    text-decoration: none; 
	}
	
	/* mouse-over link */
	a:hover {
	    color: <?php echo get_theme_mod('hover_link_color', '#00e1ff'); ?>;
	    text-decoration: none; 
	}
	
	/* selected link */
	a:active {
	    color: <?php echo get_theme_mod('active_link_color', '#b200ff'); ?>;
	    text-decoration: none; 
	}
	
	.white-text {
	    color: #ffffff !important;
	    text-decoration: none; 
	}
	
    </style>
    <?php
}