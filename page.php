<?php get_header(); ?>
<!-- page.php -->  
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
    </div><!-- /.container-->

<!-- ===[ contact-ribbon.php ]=== -->

<?php get_template_part( '/theme-components/contact-ribbon' ); ?>

<!-- ==========[ Social Sidebar ]========== -->

<?php get_template_part( 'theme-components/social-sidebar' ); ?>

<!-- ==========[ footer.php ]========== -->

<?php get_footer(); ?>
