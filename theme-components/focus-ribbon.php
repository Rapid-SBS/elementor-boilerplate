<!-- ==========[ Focus Ribbon ]========== -->

<div id="focus-ribbon">
<div class="container">
  
  <div id="r-trigger" class="row">
  <div class="col-md-12">
      <h1 class="text-center primary-neutral-text-color"><?php echo get_theme_mod('focus_section_heading', ''); ?></h1>
      <br>
  </div>
  </div>
  
  <div class="row">  
    <div class="r-leftitem hover-zoom-parent focus-ribbon-columns col-lg-4">
      <div class="ribbon-objects hover-zoom-target text-center bottom-border">
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url1', '#'); ?>">
            <img class="focus-icons" src="<?php echo get_theme_mod('focus_ribbon_icon1', 'wp-content/themes/rapid_bootstrap/img/it-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('focus_icons_height' , '200') . '" width="' . get_theme_mod('focus_icons_width' , '200') . '"'; ?>>
        </a>    
        <h3 class="primary-highlight-text-color text-center"><?php echo get_theme_mod('focus_ribbon_heading1', 'Heading 1'); ?></h3>
        <p class="focus-ribbon-span text-center"><?php echo get_theme_mod('focus_ribbon_textarea1', 'Lorem ipsum dolor sit amet.'); ?></p>
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url1', '#'); ?>" class="btn btn-primary primary-highlight-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('focus_ribbon_btn_text1', 'Read More'); ?></a>
      </div>
    </div>
  
  
    <div class="r-middleitem hover-zoom-parent focus-ribbon-columns col-lg-4">
      <div class="ribbon-objects hover-zoom-target text-center bottom-border">
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url2', '#'); ?>"> 
            <img class="focus-icons" src="<?php echo get_theme_mod('focus_ribbon_icon2', 'wp-content/themes/rapid_bootstrap/img/webdesign-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('focus_icons_height' , '200') . '" width="' . get_theme_mod('focus_icons_width' , '200') . '"'; ?>>
        </a>    
        <h3 class="primary-highlight-text-color text-center"><?php echo get_theme_mod('focus_ribbon_heading2', 'Heading 2'); ?></h3>
        <p class="focus-ribbon-span text-center"><?php echo get_theme_mod('focus_ribbon_textarea2', 'Lorem ipsum dolor sit amet.'); ?></p>
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url2', '#'); ?>" class="btn btn-primary primary-highlight-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('focus_ribbon_btn_text2', 'Read More'); ?></a>
      </div>
    </div>

    <div class="r-rightitem hover-zoom-parent focus-ribbon-columns col-lg-4">
      <div class="ribbon-objects hover-zoom-target text-center bottom-border">
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url3', '#'); ?>">
            <img class="focus-icons" src="<?php echo get_theme_mod('focus_ribbon_icon3', 'wp-content/themes/rapid_bootstrap/img/marketing-icon.png'); ?>" <?php echo ' height="' . get_theme_mod('focus_icons_height' , '200') . '" width="' . get_theme_mod('focus_icons_width' , '200') . '"'; ?>>
        </a>    
        <h3 class="primary-highlight-text-color text-center"><?php echo get_theme_mod('focus_ribbon_heading3', 'Heading 3'); ?></h3>
        <p class="focus-ribbon-span text-center"><?php echo get_theme_mod('focus_ribbon_textarea3', 'Lorem ipsum dolor sit amet.'); ?></p>
        <a href="<?php echo get_theme_mod('focus_ribbon_btn_url3', '#'); ?>" class="btn btn-primary primary-highlight-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('focus_ribbon_btn_text3', 'Read More'); ?></a>
      </div>
    </div>

  </div><!-- /.row -->
  
</div><!-- /.container -->    
    <style>
	<?php /* Checks to see if Display Section checkbox is checked */
	    if (get_theme_mod( 'display_btn' ) == 1) {
	        echo '';
	    } else {
	        echo '.btn { display: none;}';		        
	    }
	?>
    </style>
    
<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_hover.js"></script>    
<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_inline_right.js"></script>

</div><!-- /focus-ribbon -->