<?php
/* ======================================== */
/* =========== GSAP include_files_fonts ============ */
/* ======================================== */
    
    $wp_customize->add_section( 'include_files_fonts', array(
    	'title'			=> __( 'Include Files & Fonts', 'rapidbootstrap' ),
    	'priority'		=> 70
    ));	
    
    // ----- Enable Feature Checkbox -----
    $wp_customize->add_setting( 'enable_gsap_include_files_fonts', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'enable_gsap_include_files_fonts', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Enable GSAP',
        'description'		=> 'Greensock Animation Platform. https://greensock.com/',
        'section'		=> 'include_files_fonts',
        'priority'		=> 1
    ));
    
/* ======================================== */
/* ============ Scroll Magic ============== */
/* ======================================== */
    
    // ----- Enable Feature Checkbox -----
    $wp_customize->add_setting( 'enable_scrollmagic', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'enable_scrollmagic', array(
        'type'			=> 'checkbox',
        'description'		=> 'Scroll-triggered include_files_fonts. goo.gl/qpwTWU',
        'label' 		=> 'Enable ScrollMagic',
        'section'		=> 'include_files_fonts',
        'priority'		=> 2
    ));
    
/* ======================================== */
/* ============ Smooth Scroll ============= */
/* ======================================== */
    
    // ----- Enable Feature Checkbox -----
    $wp_customize->add_setting( 'enable_smooth_scroll', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'enable_smooth_scroll', array(
        'type'			=> 'checkbox',
        'description' 		=> 'Scroll to section onclick. goo.gl/8NXq9B',
        'label' 		=> 'Enable Smooth Scroll',
        'section'		=> 'include_files_fonts',
        'priority'		=> 3
    ));
    
/* ======================================== */
/* ============= jQuery Lazy ============== */
/* ======================================== */
    
    // ----- Enable Feature Checkbox -----
    $wp_customize->add_setting( 'enable_jquery_lazy', array(
        'default'		=> 1 , 'rapidbootstrap'
    ));

    $wp_customize->add_control( 'enable_jquery_lazy', array(
        'type'			=> 'checkbox',
        'label' 		=> 'Enable jQuery Lazy ',
        'description' 		=> 'Lazy Loads images. http://jquery.eisbehr.de/lazy/#examples',
        'section'		=> 'include_files_fonts',
        'priority'		=> 4
    )); 
    
/* ======================================== */
/* ================ Fonts ================= */
/* ======================================== */

    // ----- Font 1 -----
    $wp_customize->add_setting('font1', array(
        'default'		=> _x('', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('font1', array(
        'label'			=> __('Font 1', 'rapidbootstrap'),
        'description'		=> 'Insert Font URL',
        'section'		=> 'include_files_fonts',
        'priority'		=> 10
    ));
    
    // ----- Font 2 -----
    $wp_customize->add_setting('font2', array(
        'default'		=> _x('', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('font2', array(
        'label'			=> __('Font 2', 'rapidbootstrap'),
        'section'		=> 'include_files_fonts',
        'priority'		=> 15
    ));
    
    // ----- Font 3 -----
    $wp_customize->add_setting('font3', array(
        'default'		=> _x('', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('font3', array(
        'label'			=> __('Font 3', 'rapidbootstrap'),
        'section'		=> 'include_files_fonts',
        'priority'		=> 20
    ));
    
    // ----- Font 4 -----
    $wp_customize->add_setting('font4', array(
        'default'		=> _x('', 'rapidbootstrap'),
        'type'			=> 'theme_mod'
    ));
    
    $wp_customize->add_control('font4', array(
        'label'			=> __('Font 4', 'rapidbootstrap'),
        'section'		=> 'include_files_fonts',
        'priority'		=> 25
    ));
    
?>      