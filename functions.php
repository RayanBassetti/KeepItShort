<?php
/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */
?>

<?php 

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
function theme_name_scripts() {
   wp_enqueue_style( 'style-name', get_stylesheet_uri() . "/css/style.css" );
}

?>