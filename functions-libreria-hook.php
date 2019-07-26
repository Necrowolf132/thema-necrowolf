<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 15/04/18
 * Time: 10:55 AM
 */
//Aqui el menu
if(function_exists('register_nav_menus')){
    register_nav_menus (array('primero' => 'Menu principal superior'));
}
//Especial para los atributos de los link del menu = etiquetas <a> 
    function clases_para_link($atts, $item, $args) {
        //var_dump( $atts );
        //array_push($item->classes, "nav-item");
        //var_dump( $item->classes );
        $class = 'nav-link p-2 pt-md-3 pb-md-3 pr-md-5 pl-md-5';
        $atts['class'] = $class;
        return $atts;
    }
    add_filter('nav_menu_link_attributes', 'clases_para_link', 10, 3 );
//Especial para los atributos de los link del menu = etiquetas <li> en este caso para determinar a quien corresponde la clase .active 

    function hacerlo_demas($items, $args){
        $url_actual = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];       
        for($count=1;$count<=count($items);$count++) {
            array_push($items[$count]->classes, "nav-item");
            if (preg_match("#($url_actual)+$#", $items[$count]->url)){
                array_push($items[$count]->classes, "active");
            }
        }
        return $items;
    }
    add_filter('wp_nav_menu_objects', 'hacerlo_demas',1, 2);

// metodo para traer post individuales y que devuelva un objeto WP_object
    $my_post=get_posts();
    echo $my_post->post_content;

    if( function_exists('add_theme_support')){
        add_theme_support('post-thumbnails');
    }
?>