<?php
	get_header();


if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		the_title();
		the_content();// Post Content here
		//
	} // end while
} // end if

	get_footer();
?>
