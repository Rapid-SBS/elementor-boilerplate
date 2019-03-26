<!-- ===============[ Parallax 1 ]=============== -->

<div id="parallax-ribbon1" 

<div class="parallax1Title" style="top: <?php echo get_theme_mod('parallax-ribbon1-yoffset', '0px'); ?>;">
	<img class="parallax1 img-fluid" style="padding: 0px 20px 10px 20px;" src="<?php echo get_theme_mod('parallax_imagebox1', '/wp-content/themes/rapid_bootstrap_1.01/img/parallax/marketing1.jpg'); ?>">
	<h2 class="parallax1heading white-text" style="font-size: 40px; padding: 0px 20px 10px 20px;"><?php echo get_theme_mod('parallax_textbox1', '#'); ?></h2>
</div>

<div id="parallax-image" class="parallaxParent" style="height: <?php echo get_theme_mod('parallax-ribbon1-height', '80vh'); ?>; background-color: <?php echo get_theme_mod('parallax-ribbon1-overlay', 'rgba(0,0,0,0.5)'); ?>;">	
	<div class="parallax1Image" style="background: url(<?php echo get_theme_mod('parallax_ribbon1', '/wp-content/themes/rapid_bootstrap/img/parallax/marketing1.jpg'); ?>) no-repeat; z-index: -100;">
	</div>
</div>

<script src="/wp-content/themes/rapid_bootstrap/gsap/gsap_parallax_image.js"></script>

</div><!-- /parallax-ribbon -->