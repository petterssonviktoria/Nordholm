<?php
	/* Template name: press*/
	get_header();


?>
<p>test</p>
<?php

$args = array(
	'post_type' => 'press', 'posts_per_page'=>-1,
	
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
		the_post_thumbnail();
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}

	get_footer();
?>

