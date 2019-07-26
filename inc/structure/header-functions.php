<?php
/**
 * Filtro para logos
 */
function necrowolf_theme_logo($html,$blod_id) {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    if ( $custom_logo_id != "" ) {
        $logo=get_post($custom_logo_id);
       $html = "<img class='img-fluid img-thumbnail rounded-circle' src='{$logo->post_content}' alt=''>";
    } else {
        $url_imagen_default= get_template_directory_uri().'/img/secologo.png';
       $html = "<img class='img-fluid img-thumbnail rounded-circle' src='$url_imagen_default' alt=''>";
       
    }
    return $html;
}
/**
 * Filtro del menu superior
 */
function  necrowolf_theme_filter_menu1($items,$args){
	$menu = wp_get_nav_menu_object( $args->menu );
    $menu_items = wp_get_nav_menu_items( $menu->term_id, array( 'update_post_term_cache' => false ) );
    $menu = "<div class='collapse navbar-collapse offset' id='navbarContent'>
    <ul class='nav navbar-nav menu_nav ml-auto'>";
	foreach($menu_items as $item){
    if( $item->menu_item_parent == "0" ){
        $item_ul = "";
        $itme_a = "";
        $resto_de_a ="";
        $ul_si_existe ="<ul class='dropdown-menu'>";
        $mostrar_ul= false;
        foreach($menu_items as $item2){
            if ($item2->menu_item_parent !== "0" && $item2->menu_item_parent == "$item->ID") {
                $item_ul = "submenu dropdown";
                $itme_a = "dropdown-toggle";
                $resto_de_a ="data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'";
                $mostrar_ul = true;
                $ul_si_existe .="<li class='nav-item'>
                                   <a class='nav-link' href='$item2->url'>$item2->title</a>
                                 </li>"; 
            }
        }
        $ul_si_existe .= "</ul>";
        $menu.= "<li id='menu-item-$item->object_id' class='menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-$item->object_id nav-item $item_ul '>
        <a href='$item->url' class='nav-link $itme_a text-center' aria-current='page' $resto_de_a > $item->title </a>";
        if( $mostrar_ul ){ 
            $menu .= $ul_si_existe; 
        }
        $menu.="</li>";
      }
	}
	$menu .="</ul></div>";
	return $menu;
}
function necrowolf_theme_render_title_tag_filtered($titletag) {
   
    return $titletag["title"];
}
/*
function necrowolf_theme_customize_register_topHeader($wp_customize) {
    $wp_customize->add_setting( 'top_header_custom', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => true,
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
      ) );
}*/
 
