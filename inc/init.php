<?php 
/**
 * tamaños personalisados de subida de archivos .
 *
 * @param string $sizes The image sizes.
 *
 * @return array
 */
function necrowolf_theme_media_uploader_custom_sizes( $sizes ) {
	return array_merge(
		$sizes,
		array(
			'necrowolf_theme_banner_homepage'    => esc_html__( 'Banners section', 'shop-isle' ),
			'necrowolf_theme_category_thumbnail' => esc_html__( 'Categories Section', 'shop-isle' ),
		)
    );
}
  /**
  * Setup.
  * Registo de estilos , registro regiones widget, etc.
  */
  require get_template_directory() . '/inc/functions/setup.php';
  require get_template_directory() . '/inc/structure/hooks.php';

  /**
 * Structure.
 * Funciones para la estructura de los templetes
 */
  require get_template_directory() . '/inc/structure/header-functions.php';
?>