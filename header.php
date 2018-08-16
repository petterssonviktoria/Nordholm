<!DOCTYPE html>
<html>
	<head>
		<title>Nordholm</title>
		<meta charset="utf-8" />
		<!-- <link rel="stylesheet" href="<?php bloginfo() ?>"> -->
		<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

		
        <?php
        	wp_head();
        ?>
	</head>
	<body>
		<header>
		    <img class="header-image" src="<?php header_image(); ?>" 
			    height="20% <?php echo get_custom_header()->height; ?>" 
			    width="100% <?php echo get_custom_header()->width; ?>" alt="" /> <!-- För att få fram masthead-->
			<div id="title">
			    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php bloginfo('name'); ?></h1></a> <!--För att få fram Namnet i vänstra hörnet-->
			    <p>
			      <?php bloginfo( 'description' ); ?>
			    </p>
		    </div>
    		<div id="menu">
		      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?> <!--För att få fram menyn-->
		    </div>

			    

		</header>
		
	</body>

