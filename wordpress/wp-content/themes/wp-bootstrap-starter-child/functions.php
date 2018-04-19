<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
    function chld_thm_cfg_parent_css() {
        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array( 'wp-bootstrap-starter-bootstrap-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );

// END ENQUEUE PARENT ACTION

add_theme_support( 'post-thumbnails' );

add_action('init', 'my_custom_init');
function my_custom_init()
{
 register_post_type(
   'Plat',
   array(
     'label' => 'Plats',
     'labels' => array(
       'name' => 'Plats',
       'singular_name' => 'Plat',
       'all_items' => 'Tous les plats',
       'add_new_item' => 'Ajouter un plat',
       'edit_item' => 'Éditer le plat',
       'new_item' => 'Nouveau plat',
       'view_item' => 'Voir le plat',
       'search_items' => 'Rechercher parmi les plats',
       'not_found' => 'Pas de plat trouvé',
       'not_found_in_trash'=> 'Pas de plat dans la corbeille'
       ),
     'public' => true,
     'has_archive' => true
   )
 );
}