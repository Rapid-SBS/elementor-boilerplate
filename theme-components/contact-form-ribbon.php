<!-- ===============[ Contact Form Ribbon ]=============== -->

<div id="contact-form-ribbon">

<div class="contact-form-bg" style="background-image: url(<?php echo get_theme_mod('contact_form_bg', '#'); ?>;">
<div class="container">
<div class="row">

  <div class="contact-form">
    <?php echo do_shortcode( get_theme_mod('contact_form_shortcode', '[formidable id= ]')); ?>
  </div>
  
</div><!-- /row -->
</div><!-- /container -->
</div><!-- /contact_form_bg -->
</div><!-- /contact_form_ribbon -->