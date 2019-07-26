<?php 

//-------------------------- ACTIONS ---------------------
/**
 * General
 *
 */
add_action( 'after_setup_theme', 'necrowolf_theme_setup', 10 );
add_action( 'after_setup_theme', 'necrowolf_theme_scripts', 10 );
/**
 * Header Secction
 *
 */
add_action( 'customize_register', 'necrowolf_theme_customize_register_topHeader',10,1 );

//-------------------------- FILTROS ---------------------
add_filter('document_title_parts', 'necrowolf_theme_render_title_tag_filtered', 10, 1);
add_filter('get_custom_logo', 'necrowolf_theme_logo',10,2);
add_filter('wp_nav_menu', 'necrowolf_theme_filter_menu1', 10, 2); 
add_filter( 'image_size_names_choose', 'necrowolf_theme_media_uploader_custom_sizes' );