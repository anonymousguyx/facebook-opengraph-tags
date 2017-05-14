<?php
/*
* Plugin Name: Facebook OpenGraph/OG Tags for Single Posts
* Description: This plugin includes the Facebook OG tags into your blog's single posts which include Blog Title, Post Title, Description and Featured Image (if available). If you're facing issues in the thumbnails while pasting your blog post link on Facebook, this plugin is must for you. 
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
