<!-- front-page-primary.php -->

<!-- ==========[ header.php ]========== -->
<?php get_header(); ?>
    
<!-- ===============[ Theme-Components ]=============== -->

<?php 
    if (get_theme_mod( 'display_carousel' ) == 1) {
        get_template_part( '/theme-components/carousel' );
    } else {
        echo '<!-- display Carousel disabled-->';		        
    }
?> 

<?php 
    if (get_theme_mod( 'display_parallax1' ) == 1) {
        get_template_part( '/theme-components/parallax-ribbon1' );
    } else {
        echo '<!-- display Parallax Ribbon 1 disabled-->';		        
    }
?> 

<?php 
    if (get_theme_mod( 'display_focus_ribbon' ) == 1) {
        get_template_part( '/theme-components/focus-ribbon' );
    } else {
        echo '<!-- display Focus Ribbon disabled-->';		        
    }
?> 
	
<?php 
    if (get_theme_mod( 'display_action_ribbon' ) == 1) {
        get_template_part( '/theme-components/action-ribbon' );
    } else {
        echo '<!-- display Action Ribbon disabled-->';		        
    }
?> 	

<?php 
    if (get_theme_mod( 'display_announcement_ribbon' ) == 1) {
        get_template_part( '/theme-components/announcement-ribbon' );
    } else {
        echo '<!-- display Announcement Ribbon disabled-->';		        
    }
?> 	

<?php 
    if (get_theme_mod( 'display_info_ribbon' ) == 1) {
        get_template_part( '/theme-components/info-ribbon' );
    } else {
        echo '<!-- display Info Ribbon disabled-->';		        
    }
?> 

<?php 
    if (get_theme_mod( 'display_about_us_ribbon' ) == 1) {
	get_template_part( '/theme-components/about-us-ribbon' );
    } else {
        echo ' <!-- display About-Us Ribbon disabled--> ';		        
    }
?>

<?php 
    if (get_theme_mod( 'display_contact_form_ribbon' ) == 1) {
	get_template_part( '/theme-components/contact-form-ribbon' );
    } else {
        echo ' <!-- display Contact Form Ribbon disabled--> ';		        
    }
?>	
	
<?php 
    if (get_theme_mod( 'display_contact_ribbon' ) == 1) {
	get_template_part( '/theme-components/contact-ribbon' );
    } else {
        echo ' <!-- display Contact Ribbon disabled--> ';		        
    }
?>
	
<?php 
    if (get_theme_mod( 'display_social_sidebar' ) == 1) {
	get_template_part( '/theme-components/social-sidebar' );
    } else {
        echo ' <!-- display Social Sidebar disabled--> ';		        
    }
?>

<!-- ==========[ footer.php ]========== -->

<?php get_footer(); ?>
