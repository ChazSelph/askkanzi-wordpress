<?php


function askkanzi_register_styles(){


	// $version = wp_get_theme()->get

	wp_enqueue_style('askkanzi-style', get_template_directory_uri()."/style.css", array('askkanzi-bootstrap'), '1.0', 'all');
	wp_enqueue_style('askkanzi-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '1.0', 'all');
	wp_enqueue_style('askkanzi-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'askkanzi_register_styles');

?>