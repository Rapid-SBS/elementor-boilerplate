<!-- ===============[ Carousel ]=============== -->
<div id="carousel-section" 
	
        <div id="carouselPortfolio" class="carousel slide" data-ride="carousel" style="top: <?php echo get_theme_mod('carousel-y-offset', '0'); ?>">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" role="listbox">

                <!-- Images -->
                <div class="carousel-item active" style="height: <?php echo get_theme_mod('carousel-height', '90vh'); ?>">
                    <div class="carousel-bg" style="background-image: url(<?php echo get_theme_mod('carousel_image1', '/wp-content/themes/rapid_bootstrap/img/carousel/carousel1.png'); ?>);"></div>
                    <div class="carousel-caption">
                        <h3 class="white-text"><?php echo get_theme_mod('carousel_heading1', 'Slide 1 Heading'); ?></h3>
                        <p><?php echo get_theme_mod('carousel_text1', 'Slide 1 Text'); ?></p>
                        <a href="<?php echo get_theme_mod('carousel_btn_url1', '#'); ?>" class="btn btn-primary accent-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('carousel_btn_text1', 'Btn 1'); ?></a>
                    </div>
                </div>

                <div class="carousel-item" style="height: <?php echo get_theme_mod('carousel-height', '90vh'); ?>">
                    <div class="carousel-bg" style="background-image: url(<?php echo get_theme_mod('carousel_image2', '/wp-content/themes/rapid_bootstrap/img/carousel/carousel2.png'); ?>);"></div>
                    <div class="carousel-caption d-none d-md-block">
                        <h3 class="white-text"><?php echo get_theme_mod('carousel_heading2', 'Slide 2 Heading'); ?></h3>
                        <p><?php echo get_theme_mod('carousel_text2', 'Slide 2 Text'); ?></p>
                        <a href="<?php echo get_theme_mod('carousel_btn_url2', '#'); ?>" class="btn btn-primary accent-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('carousel_btn_text2', 'Btn 2'); ?></a>
                    </div>
                </div>

                <div class="carousel-item" style="height: <?php echo get_theme_mod('carousel-height', '90vh'); ?>">
                    <div class="carousel-bg" style="background-image: url(<?php echo get_theme_mod('carousel_image3', '/wp-content/themes/rapid_bootstrap/img/carousel/carousel3.png'); ?>);"></div>
                    <div class="carousel-caption">
                        <h3 class="white-text"><?php echo get_theme_mod('carousel_heading3', 'Slide 3 Heading'); ?></h3>
                        <p><?php echo get_theme_mod('carousel_text3', 'Slide 3 Text'); ?></p>
                        <a href="<?php echo get_theme_mod('carousel_btn_url3', '#'); ?>" class="btn btn-primary accent-color white-text" style="color:#ffffff !important;"><?php echo get_theme_mod('carousel_btn_text3', 'Btn 3'); ?></a>
                    </div>
                </div>
            <!-- Controls -->
               <a class="carousel-control-prev" href="#carouselPortfolio" role="button" data-slide="prev">
           	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span></a>

               <a class="carousel-control-next" href="#carouselPortfolio" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span></a>       
           
            </div> <!-- Carousel Inner -->
        </div><!-- Carousel -->
</div><!-- Carousel Section -->
                
