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
		    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1><?php bloginfo('name'); ?></h1></a>
		    <p>
		      <?php bloginfo( 'description' ); ?>
		    </p>
    		<div id="menu">
		      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		    </div>

		</header>
		
	</body>

