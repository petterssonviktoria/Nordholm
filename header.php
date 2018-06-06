<!DOCTYPE html>
<html>
	<head>
		<title>Nordholm</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
		
        <?php
        	wp_head();
        ?>
	</head>
	<body>
		<header>
			
			
			<div id="menu">
		      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		    </div>
		    <h1>
		      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php bloginfo('name'); ?></a>
		    </h1>
		    <p>
		      <?php bloginfo( 'description' ); ?>
		    </p>
    

		</header>
		
	</body>

