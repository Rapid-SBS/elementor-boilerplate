<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="boilerplate.css">
  <?php wp_head();?>    
</head>
  
<body>

  <h1>
    <a href="<?php echo get_option('home'); ?>">
	<?php bloginfo('name'); ?></a>
  </h1>
  <div class="description">
	  <?php bloginfo('description'); ?>
  </div>
	
  <div class="blog-masthead">
	<?php get_template_part( '/template-part/nav-bar', 'nav-bar' ); ?> 
  </div>
