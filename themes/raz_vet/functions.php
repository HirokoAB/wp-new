<?php

function twp_setup_theme(){
	//サムネイル画像を表示させるPHP
	add_theme_support( 'post-thumbnails' );
	// set_post_thumbnail_size( 300, 300, false);
}
add_action( 'after_setup_theme', 'twp_setup_theme' );




























  ?>