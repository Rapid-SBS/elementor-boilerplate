<?php
/*
 * Theme Customizer PHP File
 */
 
function bootstrap_customize_register( $wp_customize ) {

/* =============== Theme Colors:  https://www.youtube.com/watch?v=Mq8G8_3Ujpo =============== */
       
    // ----- Primary Neutral color -----   
    $wp_customize->add_setting( 'primary_neutral_color', array(
        'default'		=> '#373D42',
        'transport'		=> 'refresh',
        'sanitize_callback' 	=> 'sanitize_hex_color'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_neutral_color', array(
    	'label'			=> __( 'Primary Neutral Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'primary_neutral_color',
    )));
    
    // ----- Primary Highlight color -----
    $wp_customize->add_setting( 'primary_highlight_color', array(
        'default'		=> '#1e73be',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'primary_highlight_color', array(
    	'label'			=> __( 'Primary Highlight Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'primary_highlight_color',
    )));
    
    // ----- Secondary Neutral color -----   
    $wp_customize->add_setting( 'secondary_neutral_color', array(
        'default'		=> '#eeeeee',
        'transport'		=> 'refresh'
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'secondary_neutral_color', array(
    	'label'			=> __( 'Secondary Neutral Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'secondary_neutral_color',
    )));
    
    // ----- Accent color -----
    $wp_customize->add_setting( 'accent_color', array(
        'default'		=> '#dd9933',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'accent_color', array(
    	'label'			=> __( 'Accent Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'accent_color',
    )));
    
    // ----- Button Primary Hover color -----
    $wp_customize->add_setting( 'button_primary_hover', array(
        'default'		=> '#bb7711',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_primary_hover', array(
    	'label'			=> __( 'Button Primary Hover Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'button_primary_hover',
    )));
    
    // ----- Button Accent Hover color -----
    $wp_customize->add_setting( 'button_accent_hover', array(
        'default'		=> '#bb7711',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'button_accent_hover', array(
    	'label'			=> __( 'Button Accent Hover Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'button_accent_hover',
    )));
    
    // ----- Unvisited Link color -----
    $wp_customize->add_setting( 'unvisited_link_color', array(
        'default'		=> '#dddddd',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'unvisited_link_color', array(
    	'label'			=> __( 'Unvisited Link Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'unvisited_link_color',
    )));
    
    // ----- Visited Link color -----
    $wp_customize->add_setting( 'visited_link_color', array(
        'default'		=> '#cccccc',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'visited_link_color', array(
    	'label'			=> __( 'Visited Link Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'visited_link_color',
    )));
    
    // ----- Hover Link color -----
    $wp_customize->add_setting( 'hover_link_color', array(
        'default'		=> '#00e1ff',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'hover_link_color', array(
    	'label'			=> __( 'Hover Link Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'hover_link_color',
    )));
    
    // ----- Active Link color -----
    $wp_customize->add_setting( 'active_link_color', array(
        'default'		=> '#b200ff',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'active_link_color', array(
    	'label'			=> __( 'Active Link Color', 'rapidbootstrap' ),
    	'section'		=> 'colors',
    	'settings'		=> 'active_link_color',
    )));
       

include 'bootstrap-customizer-includes.php';
        
/* ======================================== */
/* =============== Nav Bar ================ */
/* ======================================== */
    
    $wp_customize->add_section( 'nav_bar', array(
    	'title'			=> __( 'Nav Bar', 'rapidbootstrap' ),
    	'priority'		=> 90
    ));	
    
    // ----- Nav Bar Fixed Positioning Toggle -----
    $wp_customize->add_setting( 'nav_fixed_toggle', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'nav_fixed_toggle', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Fixed Nav Bar',
        'section'		=> 'nav_bar',
        'priority'		=> 1
    ));

    // ----- Nav Bar Collapse Radio -----    
    $wp_customize->add_setting( 'navbar_collapse', array(
        'default' => 'lg', 'rapidbootstrap'
    ));
	 
    $wp_customize->add_control( 'navbar_collapse', array(
        'type' 			=> 'radio',
        'label' 		=> 'Navbar Collapse Width',
        'description' 		=> 'Sets .navbar-expand[-sm|-md|-lg|-xl] ',
        'section' 		=> 'nav_bar',
        'priority'		=> 2,
        'choices' 		=> array(
			            'sm' => 'Small',
			            'md' => 'Medium',
			            'lg' => 'Large',
			            'xl' => 'Extra-Large',
				),
    ));
    
    // ----- Display Nav Brand Checkbox -----
    $wp_customize->add_setting( 'display_nav_brand', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_nav_brand', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Nav Brand Image',
        'section'		=> 'nav_bar',
        'priority'		=> 3
    ));
   
     // ----- Display Search Checkbox -----
    $wp_customize->add_setting( 'display_search', array(
        'default'		=> 1 , 'rapidbootstrap'
    )   );

    $wp_customize->add_control( 'display_search', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Search bar',
        'section'		=> 'nav_bar',
        'priority'		=> 4
    ));
    
    // ----- Override Navbar Color Checkbox -----
    $wp_customize->add_setting( 'override_navbar_color', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));
    
    $wp_customize->add_control( 'override_navbar_color', array(
	'type'			=> 'checkbox',
	'label' 		=> 'Override Navbar Background Color',
	'section'		=> 'nav_bar',
	'priority'		=> 5
    ));    
    
    // -----Navbar Override Color -----        
    $wp_customize->add_setting('navbar_color', array(
        'default'		=> '#ff0000',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'navbar_color', array(
        'label' 		=> 'Navbar Color',
        'description' 		=> 'Use #hexcolor or rgba()',
        'section' 		=> 'nav_bar',
        'type' 			=> 'text',
        'priority'		=> 15
    ));
    
    // ----- Nav Brand Text ----- 
    $wp_customize->add_setting('nav_brand_text', array(
        'default'		=> 'Rapid-SBS',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'nav_brand_text', array(
        'label' 		=> 'Nav Brand Text',
        'section' 		=> 'nav_bar',
        'type' 			=> 'text',
        'priority'		=> 15
    ));
    
    // ----- Nav Brand URL ----- 
    $wp_customize->add_setting('nav_brand_url', array(
        'default'		=> '#',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'nav_brand_url', array(
        'label' 		=> 'Nav Brand URL',
        'section' 		=> 'nav_bar',
        'type' 			=> 'text',
        'priority'		=> 16
    ));
    
    // ----- Nav Brand Image ----- 
    $wp_customize->add_setting('nav_brand_image', array(
        'default'		=> get_bloginfo('template_directory').'/img/rapid_sbs_logo400.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'nav_brand_image', array(
        'label'			=> __('Nav Brand Image', 'rapidbootstrap'),
        'section'		=> 'nav_bar',
        'settings'		=> 'nav_brand_image',
        'priority'		=> 17
    ))); 
    
    // ----- Nav Brand Image Height Box -----
    $wp_customize->add_setting( 'nav_brand_image_height', array(
        'default'		=> '40',
    ));
    
    $wp_customize->add_control( 'nav_brand_image_height', array(
        'label'			=> 'Height:',
        'section' 		=> 'nav_bar',
        'type' 			=> 'number',
        'priority'		=> 18
    ));
    
    // ----- Nav Brand Image Width Box -----
    $wp_customize->add_setting( 'nav_brand_image_width', array(
        'default'		=> '',
    ));
    
    $wp_customize->add_control( 'nav_brand_image_width', array(
        'label'			=> 'Width:',
        'section' 		=> 'nav_bar',
        'type' 			=> 'number',
        'description'		=> 'Best left blank.',
        'priority'		=> 19
    ));
    
    // ----- Nav Bar Image: CSS Text Area -----
    $wp_customize->add_setting( 'nav_brand_css_textarea', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'example: style;',
	  'sanitize_callback' 	=> 'sanitize_text_field',
    ));
	
    $wp_customize->add_control( 'nav_brand_css_textarea', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'nav_bar',
	  'label' 		=> __( 'Custom CSS' ),
	  'description' 	=> __( 'Tags and class already wrapped, just add styles by line.' ),
	  'priority'		=> 20
    ));
 
/* ======================================== */
/* ============= Parallax  1 ============== */
/* ======================================== */

    $wp_customize->add_section('parallax1', array(
        'title'			=> __('Parallax 1', 'rapidbootstrap'),
        'priority' 		=>  95
    ));
    
    // ----- Display Section Checkbox -----
    $wp_customize->add_setting( 'display_parallax1', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_parallax1', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Parallax 1',
        'section'		=> 'parallax1',
        'priority'		=> 2
    ));    
    
    // ----- Parallax Image 1 -----
    $wp_customize->add_setting( 'parallax_ribbon1', array(
        'default'		=> get_bloginfo('template_directory').'/img/parallax/marketing1.jpg',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'parallax_ribbon1', array(
        'label'			=> __('Parallax Ribbon 1', 'rapidbootstrap'),
        'section'		=> 'parallax1',
        'settings'		=> 'parallax_ribbon1',
        'priority'		=> 5
    )));
        
    // ----- Parallax Image 1 Height -----
    $wp_customize->add_setting( 'parallax-ribbon1-height', array(
        'default'		=> '90vh',
    ));
    
    $wp_customize->add_control( 'parallax-ribbon1-height', array(
        'label'			=> 'Parallax Image 1 Height',
        'section' 		=> 'parallax1',
        'type'			=> 'text',
        'description'		=> 'Height of Parallax image. Specify size and unit. Default 90vh',
        'priority'		=> 3
    ));
    
    // ----- Parallax Image 1 Vertical Offset -----
    $wp_customize->add_setting( 'parallax-ribbon1-yoffset', array(
        'default'		=> '0px',
    ));
    
    $wp_customize->add_control( 'parallax-ribbon1-yoffset', array(
        'label'			=> 'Parallax Image 1 Y-Offset',
        'section' 		=> 'parallax1',
        'type'			=> 'text',
        'description'		=> 'Vertical Offset of Parallax mirror. Specify size and unit.',
        'priority'		=> 4
    ));
    
    // ----- Parallax Image 1 Overlay -----
    $wp_customize->add_setting( 'parallax-ribbon1-overlay', array(
        'default'		=> 'rgba(0,0,0,0.5)',
    ));
    
    $wp_customize->add_control( 'parallax-ribbon1-overlay', array(
        'label'			=> 'Parallax Image 1 Overlay',
        'section' 		=> 'parallax1',
        'type'			=> 'text',
        'description'		=> 'Overlay opacity and color.',
        'priority'		=> 5
    ));
    
    // ----- Parallax 1 Image Box -----
    $wp_customize->add_setting( 'parallax_imagebox1', array(
        'default'		=> get_bloginfo('template_directory').'/img/rapid_sbs_logo400.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'parallax_imagebox1', array(
        'label'			=> __('Parallax 1 Image Box', 'rapidbootstrap'),
        'section'		=> 'parallax1',
        'settings'		=> 'parallax_imagebox1',
        'priority'		=> 6
    ))); 
    
    // ----- Parallax 1 Text Box -----
    $wp_customize->add_setting('parallax_textbox1', array(
        'default'		=> _x('Text Box', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('parallax_textbox1', array(
        'label'			=> __('Text Box', 'rapidbootstrap'),
        'section'		=> 'parallax1',
        'priority'		=> 7
    ));
    
        
/* ======================================== */
/* =============== Carousel =============== */
/* ======================================== */

    $wp_customize->add_section('carousel', array(
        'title'			=> __('Carousel', 'rapidbootstrap'),
        'priority' 		=>  100
    ));
    
    // ----- Display Section Checkbox -----
    $wp_customize->add_setting( 'display_carousel', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_carousel', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Carousel',
        'section'		=> 'carousel',
        'priority'		=> 2
    ));
    
    // ----- Carousel Vertical Offset -----
    $wp_customize->add_setting( 'carousel-y-offset', array(
        'default'		=> '0',
    ));
    
    $wp_customize->add_control( 'carousel-y-offset', array(
        'label'			=> 'Vertical Offset',
        'section' 		=> 'carousel',
        'type' 			=> 'text',
        'description'		=> 'Compensates for nav bars. Specify size and unit. Default = 0px',
        'priority'		=> 3
    ));
    
    // ----- Carousel Image Height -----
    $wp_customize->add_setting( 'carousel-height', array(
        'default'		=> '90vh',
    ));
    
    $wp_customize->add_control( 'carousel-height', array(
        'label'			=> 'Carousel Height',
        'section' 		=> 'carousel',
        'type'			=> 'text',
        'description'		=> 'Height of Carousel images. Specify size and unit. Default 90vh',
        'priority'		=> 4
    ));
    
    // ----- Carousel Image 1 -----
    $wp_customize->add_setting('carousel_image1', array(
        'default'		=> get_bloginfo('template_directory').'/img/carousel/carousel1.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image1', array(
        'label'			=> __('Slider Image 1', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'settings'		=> 'carousel_image1',
        'priority'		=> 5
    )));
    
    // ----- Heading 1 -----
    $wp_customize->add_setting('carousel_heading1', array(
        'default'		=> _x('Carousel Heading 1', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_heading1', array(
        'label'			=> __('Heading 1', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 6
    ));
    
    // ----- Text 1 -----
    $wp_customize->add_setting('carousel_text1', array(
        'default'		=> _x('Carousel Text 1', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_text1', array(
        'label'			=> __('Text 1', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 7
    ));
    
    // ----- Button URL 1 -----
    $wp_customize->add_setting('carousel_btn_url1', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_url1', array(
        'label'			=> __('Button URL 1', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 8
    ));
    
    // ----- Button Text 1 -----
    $wp_customize->add_setting('carousel_btn_text1', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_text1', array(
        'label'			=> __('Button Text 1', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 9
    ));
    
    
    // ----- Carousel Image 2 -----
    $wp_customize->add_setting('carousel_image2', array(
        'default'		=> get_bloginfo('template_directory').'/img/carousel/carousel2.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image2', array(
        'label'			=> __('Slider Image 2', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'settings'		=> 'carousel_image2',
        'priority'		=> 10
    )));
    
    // ----- Heading 2 -----
    $wp_customize->add_setting('carousel_heading2', array(
        'default'		=> _x('Carousel Heading 2', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_heading2', array(
        'label'			=> __('Heading 2', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 11
    ));
    
    // ----- Text 2 -----
    $wp_customize->add_setting('carousel_text2', array(
        'default'		=> _x('Carousel Text 2', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_text2', array(
        'label'			=> __('Text 2', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 12
    ));
    
    // ----- Button URL 2 -----
    $wp_customize->add_setting('carousel_btn_url2', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_url2', array(
        'label'			=> __('Button URL 2', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 13
    ));
    
    // ----- Button Text 2 -----
    $wp_customize->add_setting('carousel_btn_text2', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_text2', array(
        'label'			=> __('Button Text 2', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 14
    ));
    
    // ----- Carousel Image 3 -----
    $wp_customize->add_setting('carousel_image3', array(
        'default'		=> get_bloginfo('template_directory').'/img/carousel/carousel3.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'carousel_image3', array(
        'label'			=> __('Slider Image 3', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'settings'		=> 'carousel_image3',
        'priority'		=> 15
    )));
    
    // ----- Heading 3 -----
    $wp_customize->add_setting('carousel_heading3', array(
        'default'		=> _x('Carousel Heading 3', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_heading3', array(
        'label'			=> __('Heading 3', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 16
    ));
    
    // ----- Text 3 -----
    $wp_customize->add_setting('carousel_text3', array(
        'default'		=> _x('Carousel Text 3', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_text3', array(
        'label'			=> __('Text 3', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 17
    ));    
    
        // ----- Button URL 3 -----
    $wp_customize->add_setting('carousel_btn_url3', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_url3', array(
        'label'			=> __('Button URL 3', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 18
    ));
    
    // ----- Button Text 3 -----
    $wp_customize->add_setting('carousel_btn_text3', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('carousel_btn_text3', array(
        'label'			=> __('Button Text 3', 'rapidbootstrap'),
        'section'		=> 'carousel',
        'priority'		=> 19
    ));


/* ======================================== */
/* ============= Focus Ribbon ============= */
/* ======================================== */

    $wp_customize->add_section('focus_ribbon', array(
        'title'			=> __('Focus Ribbon', 'rapidbootstrap'),
        'priority' 		=>  105
    ));
    
    // ----- Display Focus-Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_focus_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_focus_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Focus Ribbon',
        'section'		=> 'focus_ribbon',
        'priority'		=> 1
        
    ));
    
    // ----- Display Buttons Checkbox -----
    $wp_customize->add_setting( 'display_btn', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_btn', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Buttons',
        'section'		=> 'focus_ribbon',
        'priority'		=> 1
        
    ));
    
    // ----- Focus Section Heading -----
    $wp_customize->add_setting( 'focus_section_heading', array(
        'default'		=> 'Focus Section',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_section_heading', array(
        'label' 		=> 'Focus Section Heading',
        'section' 		=> 'focus_ribbon',
        'type'			=> 'text',
        'priority'		=> 2
    ));
    

    // ----- Focus Icons Height Box -----
    $wp_customize->add_setting( 'focus_icons_height', array(
        'default'		=> '200',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_icons_height', array(
        'label'			=> 'Height of all icons:',
        'section' 		=> 'focus_ribbon',
        'type' 			=> 'number',
        'priority'		=> 12
    ));
    
    // ----- Focus Icons Width Box -----
    $wp_customize->add_setting( 'focus_icons_width', array(
        'default'		=> '200',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_icons_width', array(
        'label'			=> 'Width of all icons:',
        'section' 		=> 'focus_ribbon',
        'type' 			=> 'number',
        'priority'		=> 13
    ));

    // ----- Focus Icon 1 -----
    $wp_customize->add_setting( 'focus_ribbon_icon1', array(
        'default'		=> get_bloginfo('template_directory').'/img/it-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'focus_ribbon_icon1', array(
        'label'			=> __('Focus Icon 1', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'settings'		=> 'focus_ribbon_icon1',
        'priority'		=> 15
    )));
    
    // ----- Focus Heading 1 -----
    $wp_customize->add_setting( 'focus_ribbon_heading1', array(
        'default'		=> 'Focus Heading 1',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_ribbon_heading1', array(
        'label' 		=> 'Focus Heading 1',
        'section' 		=> 'focus_ribbon',
        'type'			=> 'text',
        'priority'		=> 16
    ));
    
    // ----- Focus Text Area 1 -----
    $wp_customize->add_setting( 'focus_ribbon_textarea1', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'Lorem ipsum dolor sit amet.',
	  'sanitize_callback' 	=> 'sanitize_text_field',
    ));
	
    $wp_customize->add_control( 'focus_ribbon_textarea1', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'focus_ribbon',
	  'label' 		=> __( 'Text area' ),
	  'priority'		=> 17
    ));
    
    // ----- Focus Button URL 1 -----
    $wp_customize->add_setting('focus_ribbon_btn_url1', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_url1', array(
        'label'			=> __('Button URL 1', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 18
    ));
    
    // ----- Focus Button Text 1 -----
    $wp_customize->add_setting('focus_ribbon_btn_text1', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_text1', array(
        'label'			=> __('Button Text 1', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 19
    ));
    
    // ----- Focus Icon 2 -----
    $wp_customize->add_setting( 'focus_ribbon_icon2', array(
        'default'		=> get_bloginfo('template_directory').'/img/webdesign-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'focus_ribbon_icon2', array(
        'label'			=> __('Focus Icon 2', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'settings'		=> 'focus_ribbon_icon2',
        'priority'		=> 20
    )));
    
    // ----- Focus Heading 2 -----
    $wp_customize->add_setting( 'focus_ribbon_heading2', array(
        'default'		=> 'Focus Heading 2',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_ribbon_heading2', array(
        'label' 		=> 'Focus Heading 2',
        'section' 		=> 'focus_ribbon',
        'type'			=> 'text',
        'priority'		=> 21
    ));
    
    // ----- Focus Text Area 2 -----
    $wp_customize->add_setting( 'focus_ribbon_textarea2', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'Lorem ipsum dolor sit amet.',
	  'sanitize_callback' 	=> 'sanitize_text_field',
    ));
	
    $wp_customize->add_control( 'focus_ribbon_textarea2', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'focus_ribbon',
	  'label' 		=> __( 'Text area' ),
	  'priority'		=> 22
    ));

    // ----- Focus Button URL 2 -----
    $wp_customize->add_setting('focus_ribbon_btn_url2', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_url2', array(
        'label'			=> __('Button URL 2', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 23
    ));
    
    // ----- Focus Button Text 2 -----
    $wp_customize->add_setting('focus_ribbon_btn_text2', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_text2', array(
        'label'			=> __('Button Text 2', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 24
    ));
    
    // ----- Focus Icon 3 -----
    $wp_customize->add_setting( 'focus_ribbon_icon3', array(
        'default'		=> get_bloginfo('template_directory').'/img/marketing-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'focus_ribbon_icon3', array(
        'label'			=> __('Focus Icon 3', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'settings'		=> 'focus_ribbon_icon3',
        'priority'		=> 25
    )));
    
    // ----- Focus Heading 3 -----
    $wp_customize->add_setting( 'focus_ribbon_heading3', array(
        'default'		=> 'Focus Heading 3',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'focus_ribbon_heading3', array(
        'label' 		=> 'Focus Heading 3',
        'section' 		=> 'focus_ribbon',
        'type'			=> 'text',
        'priority'		=> 26
    ));
    
    // ----- Focus Text Area 3 -----
    $wp_customize->add_setting( 'focus_ribbon_textarea3', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'Lorem ipsum dolor sit amet.',
	  'sanitize_callback' 	=> 'sanitize_text_field',
    ));
	
    $wp_customize->add_control( 'focus_ribbon_textarea3', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'focus_ribbon',
	  'label' 		=> __( 'Text area' ),
	  'priority'		=> 27
    ));
    
    // ----- Focus Button URL 3 -----
    $wp_customize->add_setting('focus_ribbon_btn_url3', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_url3', array(
        'label'			=> __('Button URL 3', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 28
    ));
    
    // ----- Focus Button Text 3 -----
    $wp_customize->add_setting('focus_ribbon_btn_text3', array(
        'default'		=> _x('Read More', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('focus_ribbon_btn_text3', array(
        'label'			=> __('Button Text 3', 'rapidbootstrap'),
        'section'		=> 'focus_ribbon',
        'priority'		=> 29
    ));
    

/* ==================================== */
/* ======== Announcement Ribbon ======= */
/* ==================================== */

    $wp_customize->add_section('announcement_ribbon', array(
        'title'			=> __('Announcement Ribbon', 'rapidbootstrap'),
        'priority' 		=>  109
    ));
    
    // ----- Display Action-Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_announcement_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    )   );

    $wp_customize->add_control( 'display_announcement_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Announcement Ribbon',
        'section'		=> 'announcement_ribbon',
        'priority'		=> 1
        
    ));
    
    // ----- Announcement CSS Text Area -----
    $wp_customize->add_setting( 'announcement_ribbon_css_textarea', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'example: style;',
	  'sanitize_callback' 	=> 'sanitize_text_field',
	));
    
    $wp_customize->add_control( 'announcement_ribbon_css_textarea', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'announcement_ribbon',
	  'label' 		=> __( 'Custom CSS' ),
	  'description' 	=> __( 'Tags and class already wrapped, just add styles by line.' ),
	  'priority'		=> 4
	));

    // ----- Announcement Text -----
    $wp_customize->add_setting( 'announcement_ribbon_text', array(
        'default'		=> 'Announcement Text',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'announcement_ribbon_text', array(
        'label' 		=> 'Announcement Text',
        'section' 		=> 'announcement_ribbon',
        'type'			=> 'text',
        'priority'		=> 5
    ));
    
    
/* ==================================== */
/* =========== Action Ribbon ========== */
/* ==================================== */

    $wp_customize->add_section('action_ribbon', array(
        'title'			=> __('Action Ribbon', 'rapidbootstrap'),
        'priority' 		=>  110
    ));
    
    // ----- Display Action-Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_action_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_action_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Action Ribbon',
        'section'		=> 'action_ribbon',
        'priority'		=> 1
        
    ));
    
    // ----- Action Icons Height Box -----
    $wp_customize->add_setting( 'action_icons_height', array(
        'default'		=> '50',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'action_icons_height', array(
        'label'			=> 'Height of all icons:',
        'section' 		=> 'action_ribbon',
        'type' 			=> 'number',
        'priority'		=> 2
    ));
    
    // ----- Action Icons Width Box -----
    $wp_customize->add_setting( 'action_icons_width', array(
        'default'		=> '',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'action_icons_width', array(
        'label'			=> 'Width of all icons:',
        'section' 		=> 'action_ribbon',
        'type' 			=> 'number',
        'description'		=> 'Best left blank.',
        'priority'		=> 3
    ));
    
    // ----- Action Icons: CSS Text Area -----
    $wp_customize->add_setting( 'action_ribbon_css_textarea', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'example: style;',
	  'sanitize_callback' 	=> 'sanitize_text_field',
	));
    
    $wp_customize->add_control( 'action_ribbon_css_textarea', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'action_ribbon',
	  'label' 		=> __( 'Custom CSS' ),
	  'description' 	=> __( 'Tags and class already wrapped, just add styles by line.' ),
	  'priority'		=> 4
	));

    // ----- Action Icon 1 -----
    $wp_customize->add_setting('action_icon1', array(
        'default'		=> get_bloginfo('template_directory').'/img/arrow-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'action_icon1', array(
        'label'			=> __('Action Icon 1', 'rapidbootstrap'),
        'section'		=> 'action_ribbon',
        'settings'		=> 'action_icon1',
        'priority'		=> 7
    )));
    
    // ----- Action Text 1 -----
    $wp_customize->add_setting( 'action_ribbon_text1', array(
        'default'		=> 'Click',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'action_ribbon_text1', array(
        'label'			=> 'Action Text 1',
        'section' 		=> 'action_ribbon',
        'type' 			=> 'text',
        'priority'		=> 8
    ));
    
    // ----- Action Icon 2 -----
    $wp_customize->add_setting('action_icon2', array(
        'default'		=> get_bloginfo('template_directory').'/img/thumbs-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'action_icon2', array(
        'label'			=> __('Action Icon 2', 'rapidbootstrap'),
        'section'		=> 'action_ribbon',
        'settings'		=> 'action_icon2',
        'priority'		=> 9
    )));
    
    
    // ----- Action Text 2 -----
    $wp_customize->add_setting( 'action_ribbon_text2', array(
        'default'		=> 'Thumbs',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'action_ribbon_text2', array(
        'label' 		=> 'Action Text 2',
        'section' 		=> 'action_ribbon',
        'type'			=> 'text',
        'priority'		=> 10
    ));
    
    // ----- Action Icon 3 -----
    $wp_customize->add_setting('action_icon3', array(
        'default'		=> get_bloginfo('template_directory').'/img/phone-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'action_icon3', array(
        'label'			=> __('Action Icon 3', 'rapidbootstrap'),
        'section'		=> 'action_ribbon',
        'settings'		=> 'action_icon3',
        'priority'		=> 11
    )));

    // ----- Action Text 3 -----
    $wp_customize->add_setting( 'action_ribbon_text3', array(
        'default'		=> 'Call',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'action_ribbon_text3', array(
        'label' 		=> 'Action Text 3',
        'section' 		=> 'action_ribbon',
        'type' 			=> 'text',
        'priority'		=> 12
    ));
    
    
/* ================================ */
/* ====== Fullscreen Image  ======= */
/* ================================ */

    $wp_customize->add_section('fullscreen_image', array(
        'title'			=> __('Fullscreen Image', 'rapidbootstrap'),
        'priority' 		=>  80
    ));
    
    // ----- Use Fullscreen Image Checkbox -----
    $wp_customize->add_setting( 'use_fullscreen_image', array(
        'default'		=> 0 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'use_fullscreen_image', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Use fullscreen background',
        'section'		=> 'fullscreen_image',
        'priority'		=> 0
    ));    
          
    // ----- Fullscreen Image URL-----
    $wp_customize->add_setting( 'fullscreen_image_url', array(
        'default'		=> get_bloginfo('template_directory').'',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'fullscreen_image_url', array(
        'label'			=> __('Select Fullscreen Image', 'rapidbootstrap'),
        'section'		=> 'fullscreen_image',
        'settings'		=> 'fullscreen_image_url',
        'priority'		=> 2
    )));
          
    // ----- Fullscreen Image Height -----
    $wp_customize->add_setting( 'fullscreen_image_height', array(
        'default'		=> '100vh',
    ));
    
    $wp_customize->add_control( 'fullscreen_image_height', array(
        'label'			=> 'Fullscreen Image Height',
        'section' 		=> 'fullscreen_image',
        'type'			=> 'text',
        'description'		=> 'Height of Fullscreen image. Specify size and unit. Default 100vh',
        'priority'		=> 3
    ));
    
    // ----- Fullscreen Image Overlay -----
    $wp_customize->add_setting( 'fullscreen_image_overlay', array(
        'default'		=> 'rgba(0,0,0,0.3)',
    ));
    
    $wp_customize->add_control( 'fullscreen_image_overlay', array(
        'label'			=> 'Fullscreen Image Overlay',
        'section' 		=> 'fullscreen_image',
        'type'			=> 'text',
        'description'		=> 'Overlay opacity and color.',
        'priority'		=> 5
    ));
        
    // ----- Fullscreen Image Text Box -----
    $wp_customize->add_setting('fullscreen_image_textbox', array(
        'default'		=> _x('Text Box', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('fullscreen_image_textbox', array(
        'label'			=> __('Text Box', 'rapidbootstrap'),
        'section'		=> 'fullscreen_image',
        'priority'		=> 7
    ));
    
    // -----Fullscreen Navbar Color -----        
    $wp_customize->add_setting('fullscreen_navbar_color', array(
        'default'		=> '#ff0000',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'fullscreen_navbar_color', array(
        'label' 		=> 'Fullscreen Navbar Color',
        'description' 		=> 'Use #hexcolor or rgba()',
        'section' 		=> 'fullscreen_image',
        'type' 			=> 'text',
        'priority'		=> 10
    ));
    
    // ----- Fullscreen Contact-Ribbon Color -----    
    $wp_customize->add_setting('fullscreen_contact_ribbon_color', array(
        'default'		=> 'rgba(0,0,0,0.3)',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'fullscreen_contact_ribbon_color', array(
        'label' 		=> 'Fullscreen Contact Ribbon Color',
        'description' 		=> 'Use #hexcolor or rgba()',
        'section' 		=> 'fullscreen_image',
        'type' 			=> 'text',
        'priority'		=> 15
    ));
    
    
/* ================================ */
/* ========== Info Ribbon ========= */
/* ================================ */

    $wp_customize->add_section('info_ribbon', array(
        'title'			=> __('Info Ribbon', 'rapidbootstrap'),
        'priority' 		=>  140
    ));
    
    // ----- Display Info Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_info_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_info_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Info Ribbon',
        'section'		=> 'info_ribbon',
        'priority'		=> 0
        
    ));
    
    // ----- Info Ribbon Post ID -----
    $wp_customize->add_setting( 'info_ribbon_post_id', array(
        'default'		=> '#',
    ));
    
    $wp_customize->add_control( 'info_ribbon_post_id', array(
        'label'			=> 'Post ID #:',
        'section' 		=> 'info_ribbon',
        'type' 			=> 'number',
        'description'		=> 'Pulls content from specific post.',
        'priority'		=> 2
    ));
    
    
/* ==================================== */
/* ========== About Us Ribbon ========= */
/* ==================================== */

    $wp_customize->add_section('about_us_ribbon', array(
        'title'			=> __('About Us Ribbon', 'rapidbootstrap'),
        'priority' 		=>  160
    ));
    
    // ----- Display About Us Checkbox -----
    $wp_customize->add_setting( 'display_about_us_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_about_us_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display About Us Ribbon',
        'section'		=> 'about_us_ribbon',
        'priority'		=> 0
        
    ));
    
    // ----- Override About Us Ribbon Color Checkbox -----
    $wp_customize->add_setting( 'override_about_us_color', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));
    
    $wp_customize->add_control( 'override_about_us_color', array(
	'type'			=> 'checkbox',
	'label' 		=> 'Override About Us Background Color',
	'section'		=> 'about_us_ribbon',
	'priority'		=> 2
    ));    
    
    // -----About Us Ribbon Override Color -----    
    $wp_customize->add_setting( 'about_us_ribbon_color', array(
        'default'		=> '#ff0000',
        'transport'		=> 'refresh'
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'about_us_ribbon_color', array(
    	'label'			=> __( 'About Us Ribbon Color Override', 'rapidbootstrap' ),
    	'section'		=> 'about_us_ribbon',
    	'settings'		=> 'about_us_ribbon_color',
    	'priority'		=> 3
    )));
    
    // ----- About Us Post ID -----
    $wp_customize->add_setting( 'about_us_post_id', array(
        'default'		=> '#',
    ));
    
    $wp_customize->add_control( 'about_us_post_id', array(
        'label'			=> 'Post ID #:',
        'section' 		=> 'about_us_ribbon',
        'type' 			=> 'number',
        'description'		=> 'Pulls content from specific post.',
        'priority'		=> 2
    ));
    
     
/* ======================================== */
/* ========== Contact Form Ribbon ========= */
/* ======================================== */

    $wp_customize->add_section('contact_form_ribbon', array(
        'title'			=> __('Contact Form Ribbon', 'rapidbootstrap'),
        'priority' 		=>  170
    ));
    
    // ----- Display Focus-Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_contact_form_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_contact_form_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Contact Form Ribbon',
        'section'		=> 'contact_form_ribbon',
        'priority'		=> 1
        
    ));
    
    // ----- Contact Form Background -----
    $wp_customize->add_setting('contact_form_bg', array(
        'default'		=> get_bloginfo('template_directory').'/img/contact_form_bg.jpg',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_form_bg', array(
        'label'			=> __('Contact Form Background', 'rapidbootstrap'),
        'section'		=> 'contact_form_ribbon',
        'settings'		=> 'contact_form_bg',
        'priority'		=> 1
    )));
    
    // ----- Contact Form Shortcode -----    
    $wp_customize->add_setting( 'contact_form_shortcode', array(
        'default'		=> '[formidable id= title= description= ]',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_form_shortcode', array(
        'label' 		=> 'Contact Form Shortcode',
        'section' 		=> 'contact_form_ribbon',
        'description'		=> 'Fill in shortcode',
        'type' 			=> 'text',
        'priority'		=> 5
    ));

  
/* ==================================== */
/* ========== Contact Ribbon ========== */
/* ==================================== */

    $wp_customize->add_section('contact_ribbon', array(
        'title'			=> __('Contact Ribbon', 'rapidbootstrap'),
        'priority' 		=>  175
    ));
    
    // ----- Display Contact-Ribbon Checkbox -----
    $wp_customize->add_setting( 'display_contact_ribbon', array(
        'default'		=> 1 , 'rapidbootstrap'
    )   );

    $wp_customize->add_control( 'display_contact_ribbon', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Contact Ribbon',
        'section'		 => 'contact_ribbon',
        'priority'		=> 0
        
    ));
    
    // ----- Override Contact-Ribbon Color Checkbox -----
    $wp_customize->add_setting( 'override_color', array(
        'default'		=> 1 , 'rapidbootstrap'
    )   );
    
    $wp_customize->add_control( 'override_color', array(
	'type'			=> 'checkbox',
	'label' 		=> 'Override Background Color',
	'section'		=> 'contact_ribbon',
	'priority'		=> 2
    ));    
    
    // ----- Contact-Ribbon Override Color -----    
   $wp_customize->add_setting('contact_ribbon_color', array(
        'default'		=> '#ff0000',
        'type'			=> 'theme_mod',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_ribbon_color', array(
        'label' 		=> 'Contact Ribbon Color',
        'description' 		=> 'Use #hexcolor or rgba()',
        'section' 		=> 'contact_ribbon',
        'type' 			=> 'text',
        'priority'		=> 5
    ));
    
    // ----- Contact Icons Height Box -----
    $wp_customize->add_setting( 'contact_icons_height', array(
        'default'		=> '50',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_icons_height', array(
        'label'			=> 'Height of all icons:',
        'section' 		=> 'contact_ribbon',
        'type' 			=> 'number',
        'priority'		=> 4
    ));
    
    // ----- Contact Icons Width Box -----
    $wp_customize->add_setting( 'contact_icons_width', array(
        'default'		=> '',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_icons_width', array(
        'label'			=> 'Width of all icons:',
        'section' 		=> 'contact_ribbon',
        'type' 			=> 'number',
        'description'		=> 'Best left blank.',
        'priority'		=> 5
    ));
    
    // ----- Contact Icon 1 -----
    $wp_customize->add_setting('contact_icon1', array(
        'default'		=> get_bloginfo('template_directory').'/img/map-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_icon1', array(
        'label'			=> __('Contact Icon 1', 'rapidbootstrap'),
        'section'		=> 'contact_ribbon',
        'settings'		=> 'contact_icon1',
        'priority'		=> 11
    )));
    
    // ----- Contact Text 1 -----
    $wp_customize->add_setting( 'contact_ribbon_text1', array(
        'default'		=> 'Address',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_ribbon_text1', array(
        'label'			=> 'Contact Text 1',
        'section' 		=> 'contact_ribbon',
        'type' 			=> 'text',
        'priority'		=> 12
    ));
    
    // ----- Contact Icon 2 -----
    $wp_customize->add_setting('contact_icon2', array(
        'default'		=> get_bloginfo('template_directory').'/img/email-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_icon2', array(
        'label'			=> __('Contact Icon 2', 'rapidbootstrap'),
        'section'		=> 'contact_ribbon',
        'settings'		=> 'contact_icon2',
        'priority'		=> 13
    )));
   
    // ----- Contact Text 2 -----
    $wp_customize->add_setting( 'contact_ribbon_text2', array(
        'default'		=> 'Email',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_ribbon_text2', array(
        'label' 		=> 'Contact Text 2',
        'section' 		=> 'contact_ribbon',
        'type'			=> 'text',
        'priority'		=> 14
    ));
    
    // ----- Contact Icon 3 -----
    $wp_customize->add_setting('contact_icon3', array(
        'default'		=> get_bloginfo('template_directory').'/img/call-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'contact_icon3', array(
        'label'			=> __('Contact Icon 3', 'rapidbootstrap'),
        'section'		=> 'contact_ribbon',
        'settings'		=> 'contact_icon3',
        'priority'		=> 15
    )));

    // ----- Contact Text 3 -----
    $wp_customize->add_setting( 'contact_ribbon_text3', array(
        'default'		=> 'Phone',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'contact_ribbon_text3', array(
        'label' 		=> 'Contact Text 3',
        'section' 		=> 'contact_ribbon',
        'type' 			=> 'text',
        'priority'		=> 16
    ));
    

/* =============================== */
/* ======= Social Sidebar ======== */
/* =============================== */     
   
    $wp_customize->add_section('social_sidebar', array(
        'title'			=> __('Social Sidebar', 'rapidbootstrap'),
        'priority' 		=>  176
    ));
    
    // ----- Display Social Sidebar Checkbox -----
    $wp_customize->add_setting( 'display_social_sidebar', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_social_sidebar', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Social Sidebar',
        'section'		=> 'social_sidebar',
        'priority'		=> 1
    ));

   // ----- Social Sidebar Icons Height Box -----
    $wp_customize->add_setting( 'social_sidebar_icons_height', array(
        'default'		=> '30',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'social_sidebar_icons_height', array(
        'label'			=> 'Height of all icons:',
        'section' 		=> 'social_sidebar',
        'type' 			=> 'number',
        'priority'		=> 2
    ));
    
    // ----- Social Sidebar Icons Width Box -----
    $wp_customize->add_setting( 'social_sidebar_icons_width', array(
        'default'		=> '',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'social_sidebar_icons_width', array(
        'label'			=> 'Width of all icons:',
        'section' 		=> 'social_sidebar',
        'type' 			=> 'number',
        'description'		=> 'Best left blank.',
        'priority'		=> 3
    ));
    
    // ----- Social Sidebar Icon 1 -----
    $wp_customize->add_setting('social_sidebar_icon1', array(
        'default'		=> get_bloginfo('template_directory').'/img/arrow-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_sidebar_icon1', array(
        'label'			=> __('Social Icon 1', 'rapidbootstrap'),
        'section'		=> 'social_sidebar',
        'settings'		=> 'social_sidebar_icon1',
        'priority'		=> 10
    )));
    
    // ----- Social Sidebar URL 1 -----
    $wp_customize->add_setting('social_sidebar_url1', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('social_sidebar_url1', array(
        'label'			=> __('Icon 1 URL', 'rapidbootstrap'),
        'section'		=> 'social_sidebar',
        'priority'		=> 11
    ));
    
    // ----- Social Sidebar Icon 2 -----
    $wp_customize->add_setting('social_sidebar_icon2', array(
        'default'		=> get_bloginfo('template_directory').'/img/arrow-icon.png',
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'social_sidebar_icon2', array(
        'label'			=> __('Social Icon 2', 'rapidbootstrap'),
        'section'		=> 'social_sidebar',
        'settings'		=> 'social_sidebar_icon2',
        'priority'		=> 12
    )));
    
    // ----- Social Sidebar URL 2 -----
    $wp_customize->add_setting('social_sidebar_url2', array(
        'default'		=> _x('#', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('social_sidebar_url2', array(
        'label'			=> __('Icon 2 URL', 'rapidbootstrap'),
        'section'		=> 'social_sidebar',
        'priority'		=> 13
    ));    
    
    // ----- Social Sidebar CSS Text Area -----
    $wp_customize->add_setting( 'social_sidebar_css_textarea', array(
	  'capability' 		=> 'edit_theme_options',
	  'default' 		=> 'example: style;',
	  'sanitize_callback' 	=> 'sanitize_text_field',
    ));
    
    $wp_customize->add_control( 'social_sidebar_css_textarea', array(
	  'type' 		=> 'textarea',
	  'section' 		=> 'social_sidebar',
	  'label' 		=> __( 'Social Sidebar Custom CSS' ),
	  'description' 	=> __( 'Tags and class already wrapped, just add styles by line.' ),
	  'priority'		=> 50
    ));
	
/* ============ PayPal Button =========== */	

    // ----- Display Paypal Button Checkbox -----
    $wp_customize->add_setting( 'display_paypal_button', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_paypal_button', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display PayPal Button',
        'section'		=> 'social_sidebar',
        'priority'		=> 1
    ));

    // ----- Paypal Button Key -----
    $wp_customize->add_setting( 'paypal_button_key', array(
        'default'		=> 'Input Key',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'paypal_button_key', array(
        'label'			=> 'PayPal Key',
        'section' 		=> 'social_sidebar',
        'type' 			=> 'text',
        'priority'		=> 80
    )); 
        
    // ----- PayPal Button Height -----
    $wp_customize->add_setting( 'paypal_button_height', array(
        'default'		=> '40',
    ));
    
    $wp_customize->add_control( 'paypal_button_height', array(
        'label'			=> 'Height:',
        'section' 		=> 'social_sidebar',
        'type' 			=> 'number',
        'priority'		=> 81
    ));
    
    // ----- PayPal Button Width -----
    $wp_customize->add_setting( 'paypal_button_width', array(
        'default'		=> '',
    ));
    
    $wp_customize->add_control( 'paypal_button_width', array(
        'label'			=> 'Width:',
        'section' 		=> 'social_sidebar',
        'type' 			=> 'number',
        'priority'		=> 82
    ));
               
/* =============================== */
/* ============ Footer =========== */
/* =============================== */     
   
    $wp_customize->add_section( 'footer', array(
        'title'			=> __('Footer', 'rapidbootstrap'),
        'priority' 		=>  180
    ));
    
    // ----- Display Footer Menu Checkbox -----
    $wp_customize->add_setting( 'display_footer_menu', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_footer_menu', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display Footer menu',
        'section'		=> 'footer'
    ));
   
    // ----- Display Copyright Checkbox -----
    $wp_customize->add_setting( 'display_copyright', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'display_copyright', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Display copyright text',
        'section'		=> 'footer'
    ));
   
    // ----- Copyright Text -----    
    $wp_customize->add_setting( 'copyright_text', array(
        'default'		=> '© 2018. All Rights Reserved.',
        'sanitize_callback'	=> 'sanitize_text'
    ));
    
    $wp_customize->add_control( 'copyright_text', array(
        'label' 		=> 'Copyright text',
        'section' 		=> 'footer',
        'description'		=> 'Accepts HTML tags.',
        'type' 			=> 'text'
    ));

}
