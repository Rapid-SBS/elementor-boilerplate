<!-- ==========[ Action Ribbon ]========== -->

<div id="action-ribbon" class="secondary-neutral-color">
    <?php get_theme_mod( 'action_ribbon_css_textarea' ); ?>
    
<div class="container">   
  <div id="l-trigger" class="row">


    <div class="l-leftitem col-md-4 action-ribbon-icons text-center">
        <img src="<?php echo get_theme_mod('action_icon1', 'wp-content/themes/rapid_bootstrap/img/arrow-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('action_icons_height' , '50') . '" width="' . get_theme_mod('action_icons_width' , '') . '"'; ?>>
        <h5 class="action-ribbon-span"><?php echo get_theme_mod('action_ribbon_text1', 'Click Here!'); ?></h5>
    </div>
  
    <div class="l-middleitem col-md-4 action-ribbon-icons text-center">
        <img src="<?php echo get_theme_mod('action_icon2', 'wp-content/themes/rapid_bootstrap/img/thumbs-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('action_icons_height' , '50') . '" width="' . get_theme_mod('action_icons_width' , '') . '"'; ?>>
        <h5 class="action-ribbon-span"><?php echo get_theme_mod('action_ribbon_text2', 'Thumbs Up!'); ?></h5>
    </div>
  
    <div class="l-rightitem col-md-4 action-ribbon-icons text-center">
        <img src="<?php echo get_theme_mod('action_icon3', 'wp-content/themes/rapid_bootstrap/img/phone-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('action_icons_height' , '50') . '" width="' . get_theme_mod('action_icons_width' , '') . '"'; ?>>
        <h5 class="action-ribbon-span"><?php echo get_theme_mod('action_ribbon_text3', 'Call Now!'); ?></h5>
    </div>
    
  </div><!-- /row -->    
</div><!-- /container -->

<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_inline_left.js"></script>
</div><!-- /action-ribbon -->