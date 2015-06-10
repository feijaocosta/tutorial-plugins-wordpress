<?php
/**
 * Plugin Name: FCW Tutoriais - Contador
 * Plugin URI: http://dev.feijaocosta.com.br/tutoriais/contador
 * Description: Contador de views simples
 * Version: 1.0
 * Author: Feijao Costa
 * Author URI: http://br.linkedin.com/in/feijao 
 * License: GPL2
 */
 
 
 
/*
#03 - Executando funções ao ativar e desativar o plugin

	register_activation_hook
	register_deactivation_hook

*/



function fcw_contador_retorno(){
	$contador = get_option("fcw_contador_views");
	update_option("fcw_contador_views",$contador+1);
	return(get_option("fcw_contador_views"));
	//delete_option("fcw_contador_views"))
}


//Crianto um short code para exibir um texto
//[fcw_contador]

function fcw_contador_show_html( $atts ){
	$html = fcw_contador_retorno();
	return $html;
}

add_shortcode('fcw_contador', 'fcw_contador_show_html');

//Inicializando o PLugin

function fcw_contador_activation(){
	add_option("fcw_contador_views");
}


//Desativando o Plugin

function fcw_contador_deactivation(){
	delete_option("fcw_contador_views");
}


register_activation_hook( __FILE__, 'fcw_contador_activation' );

register_deactivation_hook( __FILE__, 'fcw_contador_deactivation' );



?>
