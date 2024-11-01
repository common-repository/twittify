<?php
/*
Plugin Name: Twittify
Plugin URI: http://www.chris-alexander.co.uk/410
Description: Automatically link Twitter @usernames and #hashtags in Wordpress blog posts
Version: 0.1
Author: Chris Alexander
Author URI: http://www.chris-alexander.co.uk
*/

function twittify($content) {

	$content2 = preg_replace('/([^a-zA-Z0-9-_&])@([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/$2\" target=\"_blank\">@$2</a>",$content);
	
	$content2 = preg_replace('/([^a-zA-Z0-9-_&])#([0-9a-zA-Z_]+)/',"$1<a href=\"http://twitter.com/search?q=%23$2\" target=\"_blank\">#$2</a>",$content2);
	
	return $content2;
	
}

add_filter('the_content', 'twittify');   
