<?php
/* Template name: fram*/

	get_header();


// if ( have_posts() ) {
// 	while ( have_posts() ) {
// 		the_post(); 
// 		//
// 		the_title();
// 		the_post_thumbnail();// Post Content here
// 		//
// 	} // end while
// } // end if





?>

<?php

$args = array(
	'post_type' => 'fram', 'posts_per_page'=>-1, 
	
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul class="fram">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<div class="fram-del">';
			
			echo '<div class="post-over post-title">';
				// echo '<h2>';
				// 	the_title();
				// echo '</h2>';
			echo '</div>';
			echo '<div class="post-over">';
				the_content();
			echo '</div>';

		echo '</div>';
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}


// Här 


$args = array(
	'post_type' => 'om', 'posts_per_page'=>-1,
	
);

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul class="om">';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();

		echo '<div class="inner-om">';
			echo '<div class="post-over post-title">';
				echo '<h2>';
					the_title();
				echo '</h2>';
			echo '</div>';
			echo '<div class="post-over">';
				the_content();
			echo '</div>';
		echo '</div>';
	}
	echo '</ul>';
	/* Restore original Post Data */
	wp_reset_postdata();
} else {
	// no posts found
}


	get_footer();
?>
