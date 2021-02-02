<?php 
	function regolazucche_scripts() {
		wp_enqueue_style( 'style', get_stylesheet_uri());
		wp_enqueue_script( 'script', get_template_directory_uri() . 'script.js', array(), 1.1, true);
	}
	add_action( 'wp_enqueue_scripts', 'regolazucche_scripts' );
?>