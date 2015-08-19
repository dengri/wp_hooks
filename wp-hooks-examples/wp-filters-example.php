<?php 
/*-------------------------------------------------------------------
 *
 *    Wordpress Filter example: add_filter / apply_filter functions
 *
 * -----------------------------------------------------------------*/


	$date = date('d F Y');
	echo "Doing some things...<br>";

	//Outputting Unfilterd value
	echo "===> Current (unfiltered) date is $date<br>";

	echo "Doing other things...<br>";

	//Creating filter function that adds day of the week to current date
	function day_of_the_week( $old_date ){
		$new_date = $old_date . ', ' . date( 'l' );
		return $new_date;	
	}

	//Adding our filter to the hook
	add_filter('my_date_hook', 'day_of_the_week');

	//Somewhere in the code below... Aplying filter
	$new_date = apply_filters( 'my_date_hook', $date );
	echo "===> And the filtered date is: $new_date";

?>
