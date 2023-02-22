<?php

//Função para criar post type adicionado por Raphael 05/07

function erwise_create_post_type() { 

    	register_post_type( 'Equipe', array(
		'labels' 		=> array( 'name' => 'Equipe', 'singular_name' => 'Equipe', 'all_items' => 'Todos' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-groups',
		'supports' 		=> array( 'title', 'thumbnail' ) 
	) );
}
add_action( 'init', 'erwise_create_post_type' );

//Criar taxonomia:
function erwise_create_taxonomy() {
	register_taxonomy( 'funcao', 'equipe', array( 'labels' => array( 'name' => 'Função', 'singular_name' => 'Função' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    }
add_action( 'init', 'erwise_create_taxonomy' );