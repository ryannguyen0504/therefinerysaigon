<?php
	if ( function_exists( 'add_theme_support' ) )
		add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 240, 110, true );
	
	function get_css($name)
	{
		echo get_template_directory_uri()."/css/".$name.".css";
	}
	
	function get_js($name)
	{
		echo get_template_directory_uri()."/js/".$name.".js";
	}
	
	function get_img($name)
	{
		echo get_template_directory_uri()."/images/".$name;
	}
	
	function get_fav()
	{
		echo get_template_directory_uri()."/favicon.ico";
	}
	
	function dha_get_recent_posts($num = 10) 
	{
		global $wpdb;
		
		$num = (int) $num;
	    if ( $num )
		{
	    	$limit = "LIMIT $num";
		}

        $sql = "SELECT * FROM $wpdb->posts WHERE post_type = 'post' AND post_status IN ( 'publish', 'future', 'pending', 'private' ) ORDER BY post_date DESC $limit";
        $result = $wpdb->get_results($sql, ARRAY_A);
	
        return $result ? $result : array();
	}
	function new_excerpt_more($more) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

function new_excerpt_length($length) {
	return 40;
}
add_filter('excerpt_length', 'new_excerpt_length');


?>