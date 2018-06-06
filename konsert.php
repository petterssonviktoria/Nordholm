<?php
	/* Template name: konsert*/
	get_header();


?>

<?php

$args = array(
	'post_type' => 'konsert', 'posts_per_page'=>-1,
	
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul class="konsert">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<h2>';
		the_title();
		echo '</h2>';
		the_content();
		
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

	get_footer();
?>
