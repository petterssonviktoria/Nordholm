<?php
	/* Template name: konsert*/
	get_header();


?>
<p>test</p>
<?php

$args = array(
	'post_type' => 'konsert', 'posts_per_page'=>-1,
	
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		the_title();
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
