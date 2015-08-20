<?php
function custom_body_class( $classes ){
	if( 'post' == get_post_type() ){
		$classes[] = 'my-custom-class';

		return $classes;
	}
}

add_filter( 'body_class', 'custom_body_class' );

?>
