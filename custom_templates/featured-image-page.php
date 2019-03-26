<?php /* Template Name: Featured Image Template */ ?>

<?php get_header(); ?>

<!-- jQuery script to add text box over featured image and animate intro -->
	<script>
	$(document).ready(function(){
	    $(".target-featured-header").append($(".source-featured-header"));
	    $(".target-featured-text").append($(".source-featured-text"));
	    $(".target-featured-button").append($(".source-featured-button"));
	    
	    var popinbox = document.getElementsByClassName("featured-text-box");
	    TweenLite.from(popinbox, 0.8, {opacity:0, scale:0.2, top:"300px", ease: Back.easeOut.config(2), delay:1});
	});
	</script>
	
<!-- Featured Image -->  

	<div class="featured-image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
	   <div class="featured-image-overlay"></div>
	   <div class="featured-text-box">
	        <h1 class="target-featured-header"></h1>
	        <p class="target-featured-text"></p>
	        <span class="target-featured-button" ></span> 
	   </div>
	</div><!-- /.featured-image -->

<div class="container page-container">
    <div class="row">
		<?php
			if (have_posts()):
			  while (have_posts()) : the_post();
			    the_content();
			  endwhile;
			else:
			  echo '<p>Sorry, no data returned..</p>';
			endif;
		?>
    </div><!-- /.row -->
</div><!-- /.container -->

<!-- ===[ contact-ribbon.php ]=== -->

<?php get_template_part( '/theme-components/contact-ribbon' ); ?>

<!-- ==========[ Social Sidebar ]========== -->

<?php get_template_part( 'theme-components/social-sidebar' ); ?>

<!-- ==========[ footer.php ]========== -->

<?php get_footer(); ?>
