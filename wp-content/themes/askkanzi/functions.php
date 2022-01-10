<?php


function askkanzi_register_styles(){

	wp_enqueue_style('askkanzi-bootstrap', get_template_directory_uri()."/style.css", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'askkanzi_register_styles');

?>