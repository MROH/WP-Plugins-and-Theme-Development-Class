<?php
/**
 * Plugin Name: OH Admin Bar Remover
 */

 // Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );