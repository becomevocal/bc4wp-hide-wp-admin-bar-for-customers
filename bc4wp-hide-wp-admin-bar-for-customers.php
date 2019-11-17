<?php
/*
Plugin Name: BC4WP > Hide Top WordPress Bar for Customers
Description: Prevents the top WordPress 'admin' bar from showing if the user logged in is a BigCommerce customer.
Author: Nate Stewart
Version: 1.0
*/

function hide_admin_bar( $show ) {
	if ( current_user_can( 'customer' ) ) :
		return false;
	endif;
	return $show;
}
add_filter( 'show_admin_bar', 'hide_admin_bar' );
