<?php
/**
* Plugin Name: Ejemplo de wpplugin
* Plugin URI: http://wpplugin.es
* Description: Este plugln modifica los títulos de las entradas.
* Version: 1.0.0
* Author: Angel Rojas
* Author URI: http://angel-rojas.com
* Requires at least: 4.0
* Tested up to: 4.3
*
*Text Domain: wpplugin-ejemplo
* Domain path: /languages/
*/
defined( 'ABSPATH' ) or die( '¡sin trampas!' );

add_filter( 'the_title', 'wpplugin_cambiar_titulo', 10, 2 );
function wpplugin_cambiar_titulo( $title, $id ) {
    $texto = get_post_meta( $id, '_wpplugin_extension_titulo', true );

    if ( ! empty( $texto ) ) {
        $title = $title . ' '. $texto;
    }

    return $title;
}

add_action( 'add_meta_boxes_post', 'wpplugin_add_meta_boxes' );
function wpplugin_add_meta_boxes() {
  add_meta_box(
    'wpplugin-extension-titulo',
    'Extensión del Título',
    'wpplugin_print_extension_titulo_meta_box'
  );
}

?>

<?php
function wpplugin_print_extension_titulo_meta_box( $post ) { 
    $post_id = $post->ID;
    $val = get_post_meta( $post_id, '_wpplugin_extension_titulo', true );
?>
    <label for="wpplugin-extension-titulo">Texto:</label> 
    <input name="wpplugin-extension-tltulo" type="text" value="<?php
        echo esc_attr( $val );
    ?>" />
<?php
}
?>


<?php
add_action( 'save_post', 'wpplugin_save_extension_titulo' );
function wpplugin_save_extension_titulo( $post_id ) {
    // Si se está guardando de forma automática, no hacemos nada.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Si nuestro campo de texto no está disponible, no hacemos nada.
    if ( ! isset( $_REQUEST['wpplugin-extension-tltulo'] ) ) {
        return;
    }

    // Ahora sí, coger el valor del campo de texto y limpiarlo por seguridad.
    $texto = trim( sanitize_text_field( $_REQUEST['wpplugin-extension-tltulo'] ) );
    
    // Guardarlo en el campo personalizado "_wpplugin_extension_titulo"
    update_post_meta( $post_id, '_wpplugin_extension_titulo', $texto );
}