<?php
function my_filter( $title, $sep, $sep_location ){
	global $page;

	$title.= get_bloginfo( 'name' );
	$description = get_bloginfo( 'description', 'display' );

	if( $description && ( is_home() || is_front_page() ) ){	
		$title = "$title $sep $description";
	}

	return $title;
}	

add_filter( 'wp_title', 'my_filter', 20, 3 );

?>
