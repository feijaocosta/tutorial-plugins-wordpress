<?php
/**
 * Plugin Name: FCW Estudos - Shortcode
 * Plugin URI: http://dev.feijaocosta.com.br/estudos/shortcode
 * Description: Aprendendo a usar shortcodes em plugins wordpress
 * Version: 1.0
 * Author: Feijao Costa
 * Author URI: http://br.linkedin.com/in/feijao 
 * License: GPL2
 */
 
 
 //Crianto um short code para exibir um texto
//[fcw_estudos_shortcode]

function fcw_estudos_shortcode_show_html( $atts ){

	$html = "<a href='#'>Hello</a> World!";
	return $html;
}

add_shortcode( 'fcw_estudos_shortcode', 'fcw_estudos_shortcode_show_html' );	

?>
