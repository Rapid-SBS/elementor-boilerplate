function bootstrap_theme_setup(){
	
	add_theme_support( 'post-thumbnails' );
        add_theme_support('menus');
        
        register_nav_menus( array(
            'header-menu' => 'Header Menu',
            'footer-menu'  => 'Footer Menu' ,
            'social-menu'  => 'Social Menu' ,
        ));
    }
    
add_action( 'init', 'bootstrap_theme_setup');
add_theme_support('custom-background');
