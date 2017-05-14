<?php
/*
* Plugin Name: Facebook OpenGraph/OG Tags for Single Posts
* Description: This plugin will put the Facebook Meta tags in your blog single posts which includes Title, URL, Description and Featured Image (If available) to display them on Facebook.
* Version: 1.0
*Author: Zeeshan Ahmed
*/
add_action('wp_head', 'opengraphsingle');
function opengraphsingle(){
	if (is_single()) {
		echo '<meta property="og:site_name" content="',bloginfo('name'),'/>';
		echo '<meta property="og:url" content="',the_permalink(),'"/>';
		echo '<meta property="og:title" content="',the_title(),'"/>';
		echo '<meta property="og:description" content="',the_excerpt(),'"/>';
		if(has_post_thumbnail()){
			$image = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );
			echo '<meta property="og:image" content="',$image[0],'"/>';
		}
	}
}