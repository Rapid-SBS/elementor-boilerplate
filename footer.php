<footer class="blog-footer secondary-neutral-color">	
		
		<?php
		    if (get_theme_mod( 'display_footer_menu' ) == 1) {
		        echo '<div id="footer-block" class="container">';
		    } else {
		        echo '<div id="footer-block" class="container" style="display: none;">';		        
		    }
		?>
		    <div class="row">
			<?php
			    wp_nav_menu( array( 
			      'theme_location' => 'footer-menu', 
			      'container_class' => 'footer-menu' ) ); 
			?>
		    </div>
		</div><!-- /.footer-block -->
		
		<?php
		    if (get_theme_mod( 'display_copyright' ) == 1) {
		        echo '<div id="copyright" class="container"><p>' , get_theme_mod('copyright_text', '&#169; 2018. All Rights Reserved.</p>');
		    } else {
		        echo '<div id="copyright" class="container" style="display: none;"></div>';		        
		    }
		?>			
		</div><!-- /.copyright -->
	</footer>
    
	<?php wp_footer(); ?> 
	
	</body>
  
</html>