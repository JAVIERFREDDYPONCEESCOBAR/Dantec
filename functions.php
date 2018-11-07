<?php



add_action( 'wp_before_admin_bar_render', 'eliminar_menus_admin_bar' );
function eliminar_menus_admin_bar() {

    global $wp_admin_bar;

    $wp_admin_bar->remove_menu('wp-logo');          // Elimina el logo de WordPress
    $wp_admin_bar->remove_menu('about');            // Elimina el enlace 'Acerca de WordPress'
    $wp_admin_bar->remove_menu('wporg');            // Elimina el enlace WordPress.org
   // $wp_admin_bar->remove_menu('documentation');    // Elimina el enlace 'Documentación'
    $wp_admin_bar->remove_menu('support-forums');   // Elimina el enlace 'Foros de soporte'
   // $wp_admin_bar->remove_menu('feedback');         // Elimina el enlace 'Sugerencias'
    //$wp_admin_bar->remove_menu('site-name');        // Elimina el menú con el nombre del sitio
    //$wp_admin_bar->remove_menu('view-site');        // Elimina el enlace 'Visitar sitio'
    $wp_admin_bar->remove_menu('view-store');        // Elimina el enlace 'Visitar tienda'
    //$wp_admin_bar->remove_menu('updates');          // Elimina el enlace a Actualizaciones
    $wp_admin_bar->remove_menu('comments');         // Elimina el enlace a Comentarios
    //$wp_admin_bar->remove_menu('new-content');      // Elimina el enlace Nuevo contenido

}



//--------------------------------------------------------------footer-----------------------------------------
function modify_footer_admin () {
  echo 'Creado por <a href="https://kleinundgross.net/" target="_blank" >kleinundgross</a>. ';
}
add_filter('admin_footer_text', 'modify_footer_admin');

//------LOgo adcom-----

function mi_logo_personalizado() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/Logo-fondo-t.png);

                padding-bottom: 30%;
                width: auto;
                height: auto;
                top: auto;
            /*background-size: initial;*/
             BACKGROUND-SIZE: CONTAIN;
        }

 body.login {
  /*background:#26315E; */
  background:#fff;
}

    </style>
<?php
 }
add_action( 'login_enqueue_scripts', 'mi_logo_personalizado' );

function mi_logo_personalizado_url() {
    return $fre='https://kleinundgross.net' ; echo ''.$fre.'';
}
add_filter( 'login_headerurl', 'mi_logo_personalizado_url' );

function mi_logo_personalizado_url_titulo() {
    return 'Digital Consulting Associates Kleinundgross';
}
add_filter( 'login_headertitle', 'mi_logo_personalizado_url_titulo' );



function style_administradorr() { ?>
<link type="text/css" rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/font-awesome.min.css"/>
<?php 
}
add_action( 'admin_head', 'style_administradorr' );



//* Añadir un mensaje personalizado a la página login de WordPress
// function wps_login_message( $message ) {
//     if ( empty($message) ){
//         return "<p class='message'>Bienvenido a Dantec, por favor inicia sesión para continuar:</p>";
//     } else {
//         return $message;
//     }
// }
// add_filter( 'login_message', 'wps_login_message' );





/**
 * Give a personalized message for logged in users and a generic one for anonymous visitors
 */
function wpdocs_personal_message_when_logged_in() {
    if ( is_user_logged_in() ) {
        $current_user = wp_get_current_user();
        //printf( 'Personal Message For %s!', esc_html( $current_user->user_firstname ) );
    } else {
        //echo( 'Non-Personalized Message!' );
    }
}
add_action( 'loop_start', 'wpdocs_personal_message_when_logged_in' );






function wooc_extra_register_fields() {

       ?>



  <div class="form-group">

</div>
 <div class="form-group">
       <label for="reg_billing_first_name">Nombre(s):
        <span class="required">*</span></label>

       <input class="form-control" type="text" class="input-text" name="billing_first_name" id="reg_billing_first_name" value="<?php if ( ! empty( $_POST['billing_first_name'] ) ) esc_attr_e( $_POST['billing_first_name'] ); ?>" />

       </div>



       <div class="form-group">

       <label for="reg_billing_last_name">Apellidos:
        <span class="required">*</span></label>

       <input class="form-control" type="text" class="input-text" name="billing_last_name" id="reg_billing_last_name" value="<?php if ( ! empty( $_POST['billing_last_name'] ) ) esc_attr_e( $_POST['billing_last_name'] ); ?>" />

       </div>



       <div class="form-group">

       <label for="reg_billing_company"><?php _e( 'Company', 'woocommerce' ); ?>:
        <span class="required">*</span></label>

       <input class="form-control"  type="text" class="input-text" name="billing_company" id="reg_billing_company" value="<?php if ( ! empty( $_POST['billing_company'] ) ) esc_attr_e( $_POST['billing_company'] ); ?>" />

       </div>


       <div class="form-group">

       <label for="reg_billing_puesto">Puesto:
        <span class="required">*</span></label>

       <input class="form-control" type="text" class="input-text" name="billing_puesto" id="reg_billing_puesto" value="<?php if ( ! empty( $_POST['billing_puesto'] ) ) esc_attr_e( $_POST['billing_puesto'] ); ?>" />

       </div>



    <div class="form-group">

       <label for="reg_billing_address_1">Calle y número:
        <span class="required">*</span></label>

       <input type="text" class="input-text form-control" name="billing_address_1" id="reg_billing_address_1" value="<?php if ( ! empty( $_POST['billing_address_1'] ) ) esc_attr_e( $_POST['billing_address_1'] ); ?>" />

       </div>


  <div class="form-group">

       <label for="reg_billing_address_2">Colonia:
        <span class="required">*</span></label>

       <input type="text" class="input-text form-control" name="billing_address_2" id="reg_billing_address_2" value="<?php if ( ! empty( $_POST['billing_address_2'] ) ) esc_attr_e( $_POST['billing_address_2'] ); ?>" />

       </div>


       <div class="clear"></div>


<div class="form-group row">

       <div class="col-md-6">

       <label for="reg_billing_postcode"><?php _e( 'Postcode / ZIP', 'woocommerce' ); ?>:
        <span class="required">*</span></label>

       <input class="form-control"  type="text" class="input-text" name="billing_postcode" id="reg_billing_postcode" value="<?php if ( ! empty( $_POST['billing_postcode'] ) ) esc_attr_e( $_POST['billing_postcode'] ); ?>" />

       </div>



      <div class="col-md-6">

       <label for="reg_billing_city"><?php _e( 'City', 'woocommerce' ); ?>:<span class="required">*</span></label>

       <input type="text" class="input-text form-control" name="billing_city" id="reg_billing_city" value="<?php if ( ! empty( $_POST['billing_city'] ) ) esc_attr_e( $_POST['billing_city'] ); ?>" />

       </div>
</div>






 <?php
    $show_fields = array(
        'title' => __( 'Customer billing address', 'woocommerce' ),
        'fields' => array(
          'billing_country' => array(
            'label'       => __( 'Country', 'woocommerce' ),
            'description' => '',
            'class'       => 'js_field-country',
            'type'        => 'select',
            'options'     => array( '' => __( 'Select a country&hellip;', 'woocommerce' ) ) + WC()->countries->get_allowed_countries(),
          ),
          'shipping_state' => array(
            'label'       => __( 'State / County', 'woocommerce' ),
            'description' => __( 'State / County or state code', 'woocommerce' ),
            'class'       => 'js_field-state',
          ),
        ),
      );


?>



<div class="form-group row">

<?php
$woo_countries = new WC_Countries();
$ereee = $woo_countries->__get('countries');
$default_country = $woo_countries->get_base_country();
$default_county_states = $woo_countries->get_states( $default_country );
?>
<div class="col-md-6" >
  <label for="reg_billing_country" class="">Estado:
  <span class="required">*</span>
</label>
<input type="text" name="billing_state" id="billing_state" class="form-control" >
<!--<select name="billing_state" id="billing_state" class="js_field-state form-control" autocomplete="state">-->
<?php

//foreach ( $default_county_states as $option_key2 => $option_value2 ) : ?>

<!--<option value="<?php //echo esc_attr( $option_key2 ); ?>" <?php // selected( $selected, $option_key2, true ); ?>>-->
  <?php // echo esc_attr( $option_value2 ); ?>

<!--</option>-->
  <?php //endforeach; ?>
<!--</select>-->
</div>




  <div class="col-md-6" id="billing_country_field" data-priority="40">
<label for="reg_billing_country" class=""><?php _e( 'Country', 'woocommerce' ); ?>:
  <span class="required">*</span>
</label>

<input type="text" class="form-control" name="billing_country" id="billing_country" >
<!--<select name="billing_country" id="billing_country" class="js_field-country form-control" autocomplete="country">-->
<?php
//foreach ( $show_fields['fields']['billing_country']['options'] as $option_key => $option_value ) :?>
<!--<option value="<?php //echo esc_attr( $option_key ); ?>" <?php // selected( $selected, $option_key, true ); ?> >-->
<?php // echo esc_attr( $option_value ); ?>
<!--</option>-->

<?php //endforeach; ?>
<!--</select>-->
</div>




</div>


<div class="form-group row">
  <div class="col-md-6">

       <label for="reg_billing_phone">Lada y teléfono:<span class="required">*</span></label>

<div class="row">
          <div class="col-md-2">
              <input name="lada_phone" id="lada_phone"  class="form-control" class="input-text" type="tel" value="<?php if ( ! empty( $_POST['lada_phone'] ) ) esc_attr_e( $_POST['lada_phone'] ); ?>" placeholder=" " >
          </div>

          <div class="col-md-10">
                 <input class="form-control"  type="tel" class="input-text" name="billing_phone" id="reg_billing_phone" value="<?php if ( ! empty( $_POST['billing_phone'] ) ) esc_attr_e( $_POST['billing_phone'] ); ?>" />
          </div>
    </div>
</div>

<div class="col-md-6">
     <div class="form-group">

       <label for="billing_telefono_movil">Teléfono móvil:<span class="required"></span></label>

       <input class="form-control"  type="tel" class="input-text" name="billing_telefono_movil" id="billing_telefono_movil" value="<?php if ( ! empty( $_POST['billing_telefono_movil'] ) ) esc_attr_e( $_POST['billing_telefono_movil'] ); ?>" />

       </div>
</div>

 </div>








   <div class="clear"></div>
   <div class="clear"></div>
<?php
}
add_action( 'woocommerce_register_form_start', 'wooc_extra_register_fields' );
/**
* Validate the extra register fields.
*
* @param string $username         Current username.
* @param string $email             Current email.
* @param object $validation_errorsWP_Error object.
*
* @return void
*/
function wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {

       if ( isset( $_POST['billing_first_name'] ) && empty( $_POST['billing_first_name'] ) ) {

              $validation_errors->add( 'billing_first_name_error', __( '<strong>Error</strong>: First name is required!', 'woocommerce' ) );

       }



       if ( isset( $_POST['billing_last_name'] ) && empty( $_POST['billing_last_name'] ) ) {

              $validation_errors->add( 'billing_last_name_error', __( '<strong>Error</strong>: Last name is required!.', 'woocommerce' ) );

       }

        if ( isset( $_POST['lada_phone'] ) && empty( $_POST['lada_phone'] ) ) {

              $validation_errors->add( 'lada_phone_error', __( '<strong>Error</strong>:Lada required!', 'woocommerce' ) );

       }

       if ( isset( $_POST['billing_phone'] ) && empty( $_POST['billing_phone'] ) ) {

              $validation_errors->add( 'billing_phone_error', __( '<strong>Error</strong>: Phone is required!.', 'woocommerce' ) );

       }

         if ( isset( $_POST['billing_company'] ) && empty( $_POST['billing_company'] ) ) {

              $validation_errors->add( 'billing_company_error', __( '<strong>Error</strong>: Company is required!.', 'woocommerce' ) );

       }

         if ( isset( $_POST['billing_postcode'] ) && empty( $_POST['billing_postcode'] ) ) {

              $validation_errors->add( 'billing_postcode_error', __( '<strong>Error</strong>: Code is required!.', 'woocommerce' ) );

       }

        if ( isset( $_POST['billing_country'] ) && empty( $_POST['billing_country'] ) ) {

              $validation_errors->add( 'billing_country_error', __( '<strong>Error</strong>: Country is required!.', 'woocommerce' ) );

       }
        if ( isset( $_POST['billing_state'] ) && empty( $_POST['billing_state'] ) ) {

              $validation_errors->add( 'billing_state_error', __( '<strong>Error</strong>: State / State is required!.', 'woocommerce' ) );

       }
              if ( isset( $_POST['billing_address_1'] ) && empty( $_POST['billing_address_1'] ) ) {

              $validation_errors->add( 'billing_address_1_error', __( '<strong>Error</strong>: Address line 1 is required!.', 'woocommerce' ) );

       }
      if ( isset( $_POST['billing_address_2'] ) && empty( $_POST['billing_address_2'] ) ) {

              $validation_errors->add( 'billing_address_2_error', __( '<strong>Error</strong>: Address line 2 is required!.', 'woocommerce' ) );

       }
  if ( isset( $_POST['billing_city'] ) && empty( $_POST['billing_city'] ) ) {

              $validation_errors->add( 'billing_city_error', __( '<strong>Error</strong>: City is required!.', 'woocommerce' ) );

       }

  if ( isset( $_POST['billing_puesto'] ) && empty( $_POST['billing_puesto'] ) ) {

              $validation_errors->add( 'billing_puesto_error', __( '<strong>Error</strong>: Puesto is required!.', 'woocommerce' ) );

       }

  if ( isset( $_POST['billing_telefono_movil'] ) && empty( $_POST['billing_telefono_movil'] ) ) {

              $validation_errors->add( 'billing_telefono_movil_error', __( '<strong>Error</strong>: Puesto is required!.', 'woocommerce' ) );

       }




}



add_action( 'woocommerce_register_post', 'wooc_validate_extra_register_fields', 10, 3 );


/**

* Save the extra register fields.

*

* @paramint $customer_id Current customer ID.

*

* @return void

*/

function wooc_save_extra_register_fields( $customer_id ) {

       if ( isset( $_POST['billing_first_name'] ) ) {

              // WordPress default first name field.

              update_user_meta( $customer_id, 'first_name', sanitize_text_field( $_POST['billing_first_name'] ) );



              // WooCommerce billing first name.

              update_user_meta( $customer_id, 'billing_first_name', sanitize_text_field( $_POST['billing_first_name'] ) );

       }



       if ( isset( $_POST['billing_last_name'] ) ) {

              // WordPress default last name field.

              update_user_meta( $customer_id, 'last_name', sanitize_text_field( $_POST['billing_last_name'] ) );



              // WooCommerce billing last name.

              update_user_meta( $customer_id, 'billing_last_name', sanitize_text_field( $_POST['billing_last_name'] ) );

       }

      if ( isset( $_POST['lada_phone'] ) ) {

              // WooCommerce billing phone

              update_user_meta( $customer_id, 'lada_phone', sanitize_text_field( $_POST['lada_phone'] ) );

       }

       if ( isset( $_POST['billing_phone'] ) ) {

              // WooCommerce billing phone

              update_user_meta( $customer_id, 'billing_phone', sanitize_text_field( $_POST['billing_phone'] ) );

       }


       if ( isset( $_POST['billing_postcode'] ) ) {

              // WooCommerce billing codigo postal

              update_user_meta( $customer_id, 'billing_postcode', sanitize_text_field( $_POST['billing_postcode'] ) );

       }

              if ( isset( $_POST['billing_company'] ) ) {

              // WooCommerce billing compania

              update_user_meta( $customer_id, 'billing_company', sanitize_text_field( $_POST['billing_company'] ) );

       }

              if ( isset( $_POST['billing_country'] ) ) {

              // WooCommerce billing pais

              update_user_meta( $customer_id, 'billing_country', sanitize_text_field( $_POST['billing_country'] ) );

       }

              if ( isset( $_POST['billing_city'] ) ) {

              // WooCommerce billing pais

              update_user_meta( $customer_id, 'billing_city', sanitize_text_field( $_POST['billing_city'] ) );

       }


              if ( isset( $_POST['billing_address_1'] ) ) {

              // WooCommerce billing pais

              update_user_meta( $customer_id, 'billing_address_1', sanitize_text_field( $_POST['billing_address_1'] ) );

       }
              if ( isset( $_POST['billing_address_2'] ) ) {

              // WooCommerce billing pais

              update_user_meta( $customer_id, 'billing_address_2', sanitize_text_field( $_POST['billing_address_2'] ) );

       }

             if ( isset( $_POST['billing_state'] ) ) {

              // WooCommerce billing pais

              update_user_meta( $customer_id, 'billing_state', sanitize_text_field( $_POST['billing_state'] ) );

       }
           if ( isset( $_POST['billing_puesto'] ) ) {

              // WooCommerce billing pais
              update_user_meta( $customer_id, 'user_puesto', sanitize_text_field( $_POST['billing_puesto'] ) );
              update_user_meta( $customer_id, 'billing_puesto', sanitize_text_field( $_POST['billing_puesto'] ) );

       }
                  if ( isset( $_POST['billing_telefono_movil'] ) ) {

              // WooCommerce billing pais
              update_user_meta( $customer_id, 'user_telefono_movil', sanitize_text_field( $_POST['billing_telefono_movil'] ) );
              update_user_meta( $customer_id, 'billing_telefono_movil', sanitize_text_field( $_POST['billing_telefono_movil'] ) );

       }


}



add_action( 'woocommerce_created_customer', 'wooc_save_extra_register_fields' );

//----------------------interioreres productod---------------------------------------------------

 function get_custom_post_type_template($single_template) {
   global $post;
   if( $post == 'product' ) {
          $single_template = dirname( __FILE__ ) . '/single-product.php';
     }
        return $single_template;
 }
 add_filter( 'single_template', 'get_custom_post_type_template' );



$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 980; /* pixels */
}

$storefront = (object) array(
	'version' => $storefront_version,

	/**
	 * Initialize all the things.
	 */
	'main'       => require 'inc/class-storefront.php',
	'customizer' => require 'inc/customizer/class-storefront-customizer.php',
);

require 'inc/storefront-functions.php';
require 'inc/storefront-template-hooks.php';
require 'inc/storefront-template-functions.php';

if ( class_exists( 'Jetpack' ) ) {
	$storefront->jetpack = require 'inc/jetpack/class-storefront-jetpack.php';
}

if ( storefront_is_woocommerce_activated() ) {
	$storefront->woocommerce = require 'inc/woocommerce/class-storefront-woocommerce.php';

	require 'inc/woocommerce/storefront-woocommerce-template-hooks.php';
	require 'inc/woocommerce/storefront-woocommerce-template-functions.php';
}

if ( is_admin() ) {
	$storefront->admin = require 'inc/admin/class-storefront-admin.php';

	require 'inc/admin/class-storefront-plugin-install.php';
}

/**
 * NUX
 * Only load if wp version is 4.7.3 or above because of this issue;
 * https://core.trac.wordpress.org/ticket/39610?cversion=1&cnum_hist=2
 */
if ( version_compare( get_bloginfo( 'version' ), '4.7.3', '>=' ) && ( is_admin() || is_customize_preview() ) ) {
	require 'inc/nux/class-storefront-nux-admin.php';
	require 'inc/nux/class-storefront-nux-guided-tour.php';

	if ( defined( 'WC_VERSION' ) && version_compare( WC_VERSION, '3.0.0', '>=' ) ) {
		require 'inc/nux/class-storefront-nux-starter-content.php';
	}
}

/**
 * Note: Do not add any custom code here. Please use a custom plugin so that your customizations aren't lost during updates.
 * https://github.com/woocommerce/theme-customisations
 */
 add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

 function custom_override_checkout_fields( $fields ) {
     unset($fields['billing']['billing_first_name']);
     unset($fields['billing']['billing_last_name']);
     unset($fields['billing']['billing_company']);
     unset($fields['billing']['billing_address_1']);
     unset($fields['billing']['billing_address_2']);
     unset($fields['billing']['billing_city']);
     unset($fields['billing']['billing_postcode']);
     unset($fields['billing']['billing_country']);
     unset($fields['billing']['billing_state']);
     unset($fields['billing']['billing_phone']);
     unset($fields['order']['order_comments']);
     unset($fields['billing']['billing_email']);
     unset($fields['billing']['billing_puesto']);



     return $fields;

 }


function add_fields_to_users_register_form() {
  $user_puesto = ( isset( $_POST['user_puesto'] ) ) ? $_POST['user_puesto'] : '';
  $user_telefono_movil = ( isset( $_POST['user_telefono_movil'] ) ) ? $_POST['user_telefono_movil'] : '';
    $lada_telefono = ( isset( $_POST['lada_telefono'] ) ) ? $_POST['lada_telefono'] : '';

  ?>

  <p>
    <label for="user_puesto">Puesto<br />
    <input type="text" id="user_puesto" name="user_puesto" class="input" size="25" value="<?php echo esc_attr($user_puesto);?>"></label>
  </p>


  <p>
    <label for="user_telefono_movil">Telefono móvil<br />
    <input type="text" id="user_telefono_movil" name="user_telefono_movil" class="input" size="25" value="<?php echo esc_attr($user_telefono_movil);?>"></label>
  </p>

   <p>
    <label for="lada_telefono">Lada Telefono<br />
    <input type="text" id="lada_telefono" name="lada_telefono" class="input" size="25" value="<?php echo esc_attr($lada_telefono);?>"></label>
  </p>

<?php }
add_action('register_form', 'add_fields_to_users_register_form' );

// Validamos los campos adicionales
function validate_user_fields ($errors, $sanitized_user_login, $user_email) {
  if ( empty( $_POST['user_puesto'] ) ) {
    $errors->add( 'user_puesto_error', __('<strong>ERROR</strong>: Por favor, introduce tu Puesto') );
  }
   if ( empty( $_POST['user_telefono_movil'] ) ) {
    $errors->add( 'user_telefono_movil_error', __('<strong>ERROR</strong>: Por favor, introduce tu teléfono movil') );
  }
     if ( empty( $_POST['lada_telefono'] ) ) {
    $errors->add( 'lada_telefono_error', __('<strong>ERROR</strong>: Por favor, introduce lada de teléfono') );
  }
  return $errors;
}
add_filter('registration_errors', 'validate_user_fields', 10, 3);

// Guardamos los campos adicionales en base de datos
function save_user_fields ($user_id) {
  if ( isset($_POST['user_puesto']) ){
    update_user_meta($user_id, 'user_puesto', sanitize_text_field($_POST['user_puesto']));
  }
  if ( isset($_POST['user_telefono_movil']) ){
    update_user_meta($user_id, 'user_telefono_movil', sanitize_text_field($_POST['user_telefono_movil']));
  }
    if ( isset($_POST['lada_telefono']) ){
    update_user_meta($user_id, 'lada_telefono', sanitize_text_field($_POST['lada_telefono']));
  }
}
add_action('user_register', 'save_user_fields');






// Agregamos los campos adicionales a Tu Perfil y Editar Usuario
function add_custom_fields_to_users( $user ) {
  $user_puesto = esc_attr( get_the_author_meta( 'user_puesto', $user->ID ) );
  $user_telefono_movil = esc_attr( get_the_author_meta( 'user_telefono_movil', $user->ID ) );
  $lada_telefono = esc_attr( get_the_author_meta( 'lada_telefono', $user->ID ) );
?>
  <h3>Campos adicionales</h3>

  <table class="form-table">
    <tr>
      <th><label for="user_puesto">Puesto:</label></th>
      <td><input type="text" name="user_puesto" id="user_puesto" class="regular-text" value="<?php echo $user_puesto;?>" /></td>
    </tr>
        <tr>
      <th><label for="user_telefono_movil">Teléfono móvil:</label></th>
      <td><input type="text" name="user_telefono_movil" id="user_telefono_movil" class="regular-text" value="<?php echo $user_telefono_movil;?>" /></td>
    </tr>
           <tr>
      <th><label for="lada_telefono">Lada Teléfono:</label></th>
      <td><input type="text" name="lada_telefono" id="lada_telefono" class="regular-text" value="<?php echo $lada_telefono;?>" /></td>
    </tr>
  </table>
<?php }
add_action( 'show_user_profile', 'add_custom_fields_to_users' );
add_action( 'edit_user_profile', 'add_custom_fields_to_users' );
add_action( 'personal_options_update', 'save_user_fields' );
add_action( 'edit_user_profile_update', 'save_user_fields' );





// function my_admin_scripts(){
//   wp_enqueue_script( 'custom-users-fields-js', get_template_directory_uri() . '/assets/js/administrador/nuevo_admin.js?ver=13z1d', array('jquery'), '1.0014' );
// }
// add_action('admin_print_scripts', 'my_admin_scripts');







require_once('assets/int_tema/aq_resizer.php');

 // Codigo freddy

 function custom_admin() { ?>

<style type="text/css">


fieldset.form_fechas {
    width: auto;
    padding: 0 5px;
    margin: 0 auto;
    border: 1px solid #088;
    padding-bottom: 23px;
    margin-bottom: 30px;
}

.eliminar_row{
margin-top: 86px;
}

a{
  color: #0073aa;
}
.border-bottom {
    border-bottom: 1px solid #0073aa;
    margin: 10px 0px;
}
.controls_urls input{

}
.form-adi input[type=text] {
    width: 99%;
    height: 40px;
}


.imagen_red_social{


   display: inline-block;
    height: 32px;
    vertical-align: bottom;

}

fieldset.form_fechas{
 width: 550px;
 padding: 0 5px;
 margin: 0 auto;
 border: 1px solid #000;
 padding-bottom: 23px;
 position: relative;
 margin-bottom: 20px;
}

input.titulo1{
display: inline-block;
margin-bottom: 10px;
width: 96%;
margin: 8px;
width: calc(100% - 80px);
margin: 0px 0px 0px 10px;

}


input.titulo{
display: inline-block;
margin-bottom: 10px;
width: 96%;
margin: 8px;
}


.video_01{
  width: 100%;
  position: relative;
}

.video_01_int{
  width: 100%;
  height: 0;
  padding-bottom: 56.6%;
  position: relative;
}

.video_01_int iframe{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;

}

.video_02{
  width: 100%;
  position: relative;
      margin-top: 16px;
}

.video_02_int{
  width: 100%;
  height: 0;
  padding-bottom: 56.6%;
  position: relative;
}

.video_02_int iframe{
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;

}



.caja1{
  display: inline-block;
  vertical-align: middle;
}

.img_categoria{

max-width: 400px;
height: auto;
max-height: 300px;
width: auto;
}
.img_categoria_cat{

    max-width: 100px;
    height: auto;
    max-height: 100px;
    width: auto;
}

.boton_url{

 width:95%;
}
.titulo9{

display: inline-block;
margin-bottom: 10px;
width: 150%;
margin: 8px;
}
.guard{
margin-left: 353px;
    margin-top: 16px;
    }



.contenido_1, .contenido_3{
  display: inline-block;
  vertical-align: top;
  width: 30%;
  margin-right: 2%;
}

.contenido_2{
  width: 60%;
  display: inline-block;
  vertical-align: top;
}

.contenido_3{
  padding-bottom: 40px;
}

.contenido_1 input{
  width: 90%;
}

.contenido_2 textarea{
  width: 90%;
  resize: none;
}

.video_02_int{
  width: 100%;
}

input.titulo4{
display: inline-block;
margin-bottom: 10px;
width: 96%;
margin: 8px;
width: calc(100% - 80px);
margin: 0px 0px 0px 10px;
margin-left: 45px;
}

    .tam{
      font-size: 10px;
    text-transform: uppercase;
    }

.freddy_boton{
    color: #0a0808;
    border-color: #801717;
    background: #f1e2ee;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display: block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}

.freddy_boton_2{
    color: #aaa;
    border-color: #006799;
    background: #334433;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display: block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}
.freddy_boton_3{
    color: #aaa;
    border-color: #14709c;
    background: #0e3f56;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}

.freddy_boton_4{
    color: #aaa;
    border-color: #14709c;
    background: #560e1a;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display: block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}

.freddy_boton_5{
    color: #aaa;
    border-color: #14709c;
    background: #fff;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}


.freddy_boton_6{
    color: #666;
    border-color: #801717;
    background: #e4e372;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display: block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
     border-radius: 3px;
     white-space: nowrap;
     -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
     box-sizing: border-box;
}

.freddy_boton_7 {
    color: #666;
    border-color: #801717;
    background: #e49972;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display: block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    white-space: nowrap;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.freddy_boton_8 {
    color: #ccc;
    border-color: #801717;
    background: #8379cc;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    white-space: nowrap;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}

.freddy_boton_9 {
    color: #eee;
    border-color: #14709c;
    background: #0e0e0e;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    white-space: nowrap;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.freddy_boton_10 {
    color: #23282d;
    border-color: #14709c;
    background: #ddd;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 10px;
    line-height: 26px;
    height: 28px;
    margin: auto;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    white-space: nowrap;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.freddy_boton_uso {
    color: #f1f1f1;
    border-color: #19290fb3;
    background: #4285b5;
    -webkit-box-shadow: 0 1px 0 #ccc;
    box-shadow: 0 1px 0 #ccc;
    vertical-align: top;
    display:block;
    text-decoration: none;
    font-size: 15px;
    line-height: 26px;
    height: 28px;
    margin: 0;
    padding: 0 10px 1px;
    cursor: pointer;
    border-width: 1px;
    border-style: solid;
    -webkit-appearance: none;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    white-space: nowrap;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    width: 100%;
}
.freddy_boton_30, .freddy_boton_31, .freddy_boton_32{
      color: white;
      border-color: #14709c;
      background: rgb(103,85,67);
      -webkit-box-shadow: 0 1px 0 #ccc;
      box-shadow: 0 1px 0 #ccc;
      vertical-align: top;
      display: block;
      text-decoration: none;
      font-size: 10px;
      line-height: 26px;
      height: 28px;
      margin: auto;
      padding: 0 10px 1px;
      cursor: pointer;
      border-width: 1px;
      border-style: solid;
      -webkit-appearance: none;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      white-space: nowrap;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;


}
.freddy_boton_40, .freddy_boton_41, .freddy_boton_42{
      color: black;
      border-color: #14709c;
      background: rgb(156,215,24);
      -webkit-box-shadow: 0 1px 0 #ccc;
      box-shadow: 0 1px 0 #ccc;
      vertical-align: top;
      display: block;
      text-decoration: none;
      font-size: 10px;
      line-height: 26px;
      height: 28px;
      margin: auto;
      padding: 0 10px 1px;
      cursor: pointer;
      border-width: 1px;
      border-style: solid;
      -webkit-appearance: none;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      white-space: nowrap;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;


}
.freddy_boton_50, .freddy_boton_51, .freddy_boton_52{
      color: black;
      border-color: #14709c;
      background: rgb(105,128,124);
      -webkit-box-shadow: 0 1px 0 #ccc;
      box-shadow: 0 1px 0 #ccc;
      vertical-align: top;
      display: block;
      text-decoration: none;
      font-size: 10px;
      line-height: 26px;
      height: 28px;
      margin: auto;
      padding: 0 10px 1px;
      cursor: pointer;
      border-width: 1px;
      border-style: solid;
      -webkit-appearance: none;
      -webkit-border-radius: 3px;
      border-radius: 3px;
      white-space: nowrap;
      -webkit-box-sizing: border-box;
      -moz-box-sizing: border-box;
      box-sizing: border-box;


}
input.titulo_tabla{
display: inline-block;
margin-bottom: 10px;
width: 80%;
margin: 8px;

}
.total_ancho{
  width: 100%;
}
.class_large{
  width: 100%;
  border: 1px solid black !important;
  color: black !important;
}
.masw{
  width: 100%;
}
.masw2{
  width: 20%;
}
.img_bor{
      margin: auto;
     display: block;
}

.mib{
  color: white;
}
.cajaredsociales{
    background-color: transparent !important;
    border: none !important;
    border-bottom: 1px solid #9e9e9e !important;
    border-radius: 0 !important;
    outline: none !important;
    height: 3rem !important;
    width: 80% !important;
    font-size: 16px !important;
    margin: 0 0 8px 0 !important;
    padding: 0 !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    -webkit-box-sizing: content-box !important;
    box-sizing: content-box !important;
    -webkit-transition: border .3s, -webkit-box-shadow .3s !important;
    transition: border .3s, -webkit-box-shadow .3s !important;
    transition: box-shadow .3s, border .3s !important;
    transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s !important;
}


.boton_promociones{

    border-radius: 2px;
    display: inline-block;
    height: 36px;
    line-height: 36px;
    padding: 0 16px;
    text-transform: uppercase;
    vertical-align: middle;
    -webkit-tap-highlight-color: transparent;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    -webkit-transition: .3s ease-out;
    transition: .3s ease-out;
    background-color: #E57373 !important;
    text-decoration: none;
    color: #fff;
    background-color: #26a69a;
    text-align: center;
    letter-spacing: .5px;
    -webkit-transition: background-color .2s ease-out;
    transition: background-color .2s ease-out;
    cursor: pointer;
    text-transform: uppercase;
}


@media (max-width: 575.98px) {
      .ocul{
            display: none;
           }
}

@media (min-width: 576px) and (max-width: 767.98px) {  }

@media (min-width: 768px) and (max-width: 991.98px) {  }

@media (min-width: 992px) and (max-width: 1199.98px) { }

@media (min-width: 1200px) {  }



</style>

<?php

}
add_action( 'admin_head', 'custom_admin' );





function IMEGEN_POST_PRODUCTOS() {

     global $typenow;
    if( $typenow == 'product' ) {
        wp_enqueue_media();

        wp_register_script( 'meta-box-imagen-descarga',get_template_directory_uri().'/assets/js/administrador/admin.js?ver=23', array( 'jquery' ) );
        wp_localize_script( 'meta-box-imagen-descarga', 'meta_imagen_descarga',
            array(
                'title' => __( 'Imagen', 'imagen-descarga' ),
                'button' => __( 'Usar Imagen', 'imagen-descarga' ),
                'library' => 'image'
            )
        );
        wp_enqueue_script( 'meta-box-imagen-descarga' );
    }
}
add_action( 'admin_enqueue_scripts', 'IMEGEN_POST_PRODUCTOS' );



function formulario_productos_carrito(){
     add_meta_box( 'meta-box-id', __( '<h1>Datos Producto</h1>', 'viajes_post' ), 'formulario_detalles_producto', 'product' );

     add_meta_box( 'meta-box-id2', __( '<span>Productos Relacionados</span>', 'productos_post' ), 'formulario_productos_relacionados', 'product' );
}

add_action( 'add_meta_boxes', 'formulario_productos_carrito' );

function formulario_productos_relacionados($post){

$produc_relacion1      = get_post_meta($post->ID, 'produc_relacion1', true);
$produc_relacion2      = get_post_meta($post->ID, 'produc_relacion2', true);
$produc_relacion3      = get_post_meta($post->ID, 'produc_relacion3', true);
$produc_relacion4      = get_post_meta($post->ID, 'produc_relacion4', true);
$produc_relacion5      = get_post_meta($post->ID, 'produc_relacion5', true);
$produc_relacion6      = get_post_meta($post->ID, 'produc_relacion6', true);
$produc_relacion7      = get_post_meta($post->ID, 'produc_relacion7', true);
$produc_relacion8      = get_post_meta($post->ID, 'produc_relacion8', true);
?>

<table class="total_ancho">
<tr>
  <td>
    <label>SKU Relacionado 1</label>
    <input type="text" name="produc_relacion1" id="produc_relacion1" class="class_large" value="<?php echo htmlspecialchars($produc_relacion1);?>">

    <label>SKU Relacionado 3</label>
    <input type="text" name="produc_relacion3" id="produc_relacion2" class="class_large" value="<?php echo htmlspecialchars($produc_relacion3);?>">

    <label>SKU Relacionado 5</label>
    <input type="text" name="produc_relacion5" id="produc_relacion3" class="class_large" value="<?php echo htmlspecialchars($produc_relacion5);?>">

    <label>SKU Relacionado 7</label>
    <input type="text" name="produc_relacion7" id="produc_relacion4" class="class_large" value="<?php echo htmlspecialchars($produc_relacion7);?>">
  </td>

  <td>
    <label>SKU Relacionado 2</label>
    <input type="text" name="produc_relacion2" id="produc_relacion5" class="class_large" value="<?php echo htmlspecialchars($produc_relacion2);?>">

   <label>SKU Relacionado 4</label>
    <input type="text" name="produc_relacion4" id="produc_relacion6" class="class_large" value="<?php echo htmlspecialchars($produc_relacion4);?>">

    <label>SKU Relacionado 6</label>
    <input type="text" name="produc_relacion6" id="produc_relacion7" class="class_large" value="<?php echo htmlspecialchars($produc_relacion6);?>">

    <label>SKU Relacionado 8</label>
    <input type="text" name="produc_relacion8" id="produc_relacion8" class="class_large" value="<?php echo htmlspecialchars($produc_relacion8);?>">
  </td>
</tr>
</table>
<?php
}

function formulario_detalles_producto($post){

$rosa_mas_img1       = get_post_meta($post->ID, 'rosa_mas_img1', true);
$rosa_mas_img2       = get_post_meta($post->ID, 'rosa_mas_img2', true);
$rosa_mas_img3       = get_post_meta($post->ID, 'rosa_mas_img3', true);
$amarillo_mas_img1   = get_post_meta($post->ID, 'amarillo_mas_img1', true);
$amarillo_mas_img2   = get_post_meta($post->ID, 'amarillo_mas_img2', true);
$amarillo_mas_img3   = get_post_meta($post->ID, 'amarillo_mas_img3', true);
$verde_mas_img1      = get_post_meta($post->ID, 'verde_mas_img1', true);
$verde_mas_img2      = get_post_meta($post->ID, 'verde_mas_img2', true);
$verde_mas_img3      = get_post_meta($post->ID, 'verde_mas_img3', true);
$naranja_mas_img1    = get_post_meta($post->ID, 'naranja_mas_img1', true);
$naranja_mas_img2    = get_post_meta($post->ID, 'naranja_mas_img2', true);
$naranja_mas_img3    = get_post_meta($post->ID, 'naranja_mas_img3', true);
$azul_mas_img1       = get_post_meta($post->ID, 'azul_mas_img1', true);
$azul_mas_img2       = get_post_meta($post->ID, 'azul_mas_img2', true);
$azul_mas_img3       = get_post_meta($post->ID, 'azul_mas_img3', true);
$morado_mas_img1     = get_post_meta($post->ID, 'morado_mas_img1', true);
$morado_mas_img2     = get_post_meta($post->ID, 'morado_mas_img2', true);
$morado_mas_img3     = get_post_meta($post->ID, 'morado_mas_img3', true);
$rojo_mas_img1       = get_post_meta($post->ID, 'rojo_mas_img1', true);
$rojo_mas_img2       = get_post_meta($post->ID, 'rojo_mas_img2', true);
$rojo_mas_img3       = get_post_meta($post->ID, 'rojo_mas_img3', true);
$negro_mas_img1      = get_post_meta($post->ID, 'negro_mas_img1', true);
$negro_mas_img2      = get_post_meta($post->ID, 'negro_mas_img2', true);
$negro_mas_img3      = get_post_meta($post->ID, 'negro_mas_img3', true);
$blanco_mas_img1     = get_post_meta($post->ID, 'blanco_mas_img1', true);
$blanco_mas_img2     = get_post_meta($post->ID, 'blanco_mas_img2', true);
$blanco_mas_img3     = get_post_meta($post->ID, 'blanco_mas_img3', true);
$byn_mas_img1        = get_post_meta($post->ID, 'byn_mas_img1', true);
$byn_mas_img2        = get_post_meta($post->ID, 'byn_mas_img2', true);
$byn_mas_img3        = get_post_meta($post->ID, 'byn_mas_img3', true);

$cafe_mas_img1        = get_post_meta($post->ID, 'cafe_mas_img1', true);
$cafe_mas_img2        = get_post_meta($post->ID, 'cafe_mas_img2', true);
$cafe_mas_img3        = get_post_meta($post->ID, 'cafe_mas_img3', true);
$limon_mas_img1       = get_post_meta($post->ID, 'limon_mas_img1', true);
$limon_mas_img2       = get_post_meta($post->ID, 'limon_mas_img2', true);
$limon_mas_img3       = get_post_meta($post->ID, 'limon_mas_img3', true);
$gris_mas_img1        = get_post_meta($post->ID, 'gris_mas_img1', true);
$gris_mas_img2        = get_post_meta($post->ID, 'gris_mas_img2', true);
$gris_mas_img3        = get_post_meta($post->ID, 'gris_mas_img3', true);


$img_uso_product     = get_post_meta($post->ID, 'img_uso_product', true);
$id_producto         = get_post_meta($post->ID, 'id_producto', true);
$dimenciones         = get_post_meta($post->ID, 'dimenciones', true);
$cerdas              = get_post_meta($post->ID, 'cerdas', true);
$temperatura         = get_post_meta($post->ID, 'temperatura', true);
$material            = get_post_meta($post->ID, 'material', true);
$mi_url_video        = get_post_meta($post->ID, 'mi_url_video', true);
$Editor_certificados = get_post_meta( $post->ID, 'Editor_certificados', false );


?>
<table class="total_ancho">
<tr>
	<td>
		<label class="">ID Producto</label>
	</td>
  <td>
  		<input type="text" name="id_producto" class="titulo class_large" value="<?php echo htmlspecialchars($id_producto);?>" />
  </td>

<td>


</td>

	<td>
		<label class="">Dimensiones</label>
	</td>
  <td>
  		<input type="text" name="dimenciones" class="titulo class_large" value="<?php echo htmlspecialchars($dimenciones);?>" />
  </td>
 </tr>

 <tr>
	<td>
		<label class="">Cerdas</label>
	</td>
  <td>
  		<input type="text" name="cerdas" class="titulo class_large" value="<?php echo htmlspecialchars($cerdas);?>" />
  </td>
 <td>


</td>
	<td>
		<label class="">Max temperatura</label>
	</td>
  <td>
  		<input type="text" name="temperatura" class="titulo class_large" value="<?php echo htmlspecialchars($temperatura);?>" />
  </td>
 </tr>

 <tr>
	<td>
		<label class="">Material</label>
	</td>
  <td>
  		<input type="text" name="material" class="titulo class_large" value="<?php echo htmlspecialchars($material);?>" />
  </td>
  <td></td>
 <td  rowspan="2" align="center" > <?php if (empty($img_uso_product)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($img_uso_product);?>"  height="100" width="100">  </td> <?php } ?>
 </tr>


<tr>

<td>
  <input type="button" id="boton_img_uso_producto" class="freddy_boton_uso" value="<?php _e( 'Selecciona imagen ', 'imagen_producto' )?>" /> </td>
  <td> <input type="text" class="titulo" name="img_uso_product" id="img_uso_product" value="<?php echo htmlspecialchars($img_uso_product);?>"> </td>


 </tr>



 <tr>
 	<td><label class="caja1 masw">Código video <i>(Youtube)</i></label></td>
<td><input class="titulo class_large" type="text" name="mi_url_video" id="mi_url_video" value="<?php echo htmlspecialchars($mi_url_video)?>" placeholder="Código de youtube" /></td>

<td></td>
<td colspan="2">

	<?php if (empty($mi_url_video)) {

}else{ ?>

<div class="video_01">
<div class="video_01_int">
<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo htmlspecialchars($mi_url_video);?>"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
</div>
</div>

<?php } ?>

 </td>

 </tr>


 <tr>
 	<td></td>
 	<td></td>
 	<td></td>

 </tr>


</table>
<!--<tr>
 	<td><h3>Certificaciones</h3></td>
 	<td> </td>
 	<td><?php //wp_editor( $Editor_certificados[0], 'Editor_certificados');?></td>


 </tr>-->
<table>


</table>

<h3><i><b class="masw">Seccion Imagenes</b></i></h3>

<table class="total_ancho">
  <tr>
    <th class="tam"> Color: Rosa </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam"> Color: Amarillo </th>
    <th class="tam ocul"> Url </th>
    <th class="tam">Imagen</th>

  </tr>
  <tr>
	   <td class=""></td>
	   <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>


  <tr>

  <td>
  <input type="button" id="boton_img_rosa" class="freddy_boton " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" />
</td>
<td class="ocul">
  <input type="text" name="rosa_mas_img1" id="rosa_mas_img1" value="<?php echo htmlspecialchars($rosa_mas_img1);?>" class="titulo_tabla masw2 ">
  </td>
  <td> <?php if (empty($rosa_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($rosa_mas_img1);?>"  height="30" width="30" class="img_bor ">
 <?php } ?>
  </td>



   <td>
    <input type="button" id="boton_img_amarillo_1" class="freddy_boton_6 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" />
  </td>
  <td class="ocul">
    <input type="text" name="amarillo_mas_img1" id="amarillo_mas_img1" value="<?php echo htmlspecialchars($amarillo_mas_img1);?>" class="titulo_tabla masw2 ">
   </td>
  	<td> <?php if (empty($amarillo_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($amarillo_mas_img1);?>"  height="30" width="30" class="img_bor ">
    <?php } ?>
    </td>
  </tr>



 <tr>

  <td>
  <input type="button" id="boton_img_rosa_2" class="freddy_boton " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" />
</td>
<td class="ocul">
  <input type="text" name="rosa_mas_img2" id="rosa_mas_img2" value="<?php echo htmlspecialchars($rosa_mas_img2);?>" class="titulo_tabla masw2 ">
</td>
  <td> <?php if (empty($rosa_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($rosa_mas_img2);?>"  height="30" width="30" class="img_bor ">
  <?php } ?>
  </td>



  	<td><input type="button" id="boton_img_amarillo_2" class="freddy_boton_6 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" />
      </td>
      <td class="ocul">
    <input type="text" name="amarillo_mas_img2" id="amarillo_mas_img2" value="<?php echo htmlspecialchars($amarillo_mas_img2);?>" class="titulo_tabla masw2 "> </td>
  	<td> <?php if (empty($amarillo_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($amarillo_mas_img2);?>"  height="30" width="30" class="img_bor ">
    <?php } ?>
     </td>
  </tr>



<tr>
  <td>
  <input type="button" id="boton_img_rosa_3" class="freddy_boton " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" />
</td>
<td class="ocul">
  <input type="text" name="rosa_mas_img3" id="rosa_mas_img3" value="<?php echo htmlspecialchars($rosa_mas_img3);?>" class="titulo_tabla masw2 "> </td>
   <td>
    <?php if (empty($rosa_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($rosa_mas_img3);?>"  height="30" width="30" class="img_bor ">
<?php } ?>
    </td>




  	<td>
    <input type="button" id="boton_img_amarillo_3" class="freddy_boton_6 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" />
    </td>
    <td class="ocul">
    <input type="text" name="amarillo_mas_img3" id="amarillo_mas_img3" value="<?php echo htmlspecialchars($amarillo_mas_img3);?>" class="titulo_tabla masw2 "> </td>
  	<td> <?php if (empty($amarillo_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($amarillo_mas_img3);?>"  height="30" width="30" class="img_bor ">
    <?php } ?>
    </td>

</tr>









</table>


<table class="total_ancho">

    <tr>
          <th class="tam"> Color: Verde </th>
          <th class="tam ocul"> Url </th>
          <th class="tam"> Imagen</th>
          <th class="tam"> Color: Naranja </th>
          <th class="tam ocul"> Url </th>
          <th class="tam">Imagen</th>
    </tr>

  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>


  <tr>


  <td>
  <input type="button" id="boton_img_verde" class="freddy_boton_2 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  <td class="ocul">
   <input type="text" name="verde_mas_img1" id="verde_mas_img1" value="<?php echo htmlspecialchars($verde_mas_img1);?>" class="titulo_tabla masw2"> </td>
  <td> <?php if (empty($verde_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($verde_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
  <?php } ?>
   </td>



  	<td><input type="button" id="boton_img_naranja" class="freddy_boton_7 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  	<td class="ocul"> <input type="text" name="naranja_mas_img1" id="naranja_mas_img1" value="<?php echo htmlspecialchars($naranja_mas_img1);?>" class="titulo_tabla masw2"> </td>
  	<td> <?php if (empty($naranja_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($naranja_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
      </td>




  </tr>



 <tr>
  <td>
  <input type="button" id="boton_img_verde2" class="freddy_boton_2 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
 <td class="ocul"> <input type="text" name="verde_mas_img2" id="verde_mas_img2" value="<?php echo htmlspecialchars($verde_mas_img2);?>" class="titulo_tabla masw2"> </td>
  <td> <?php if (empty($verde_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($verde_mas_img2);?>"  height="30" width="30" class="img_bor ocul">
  <?php } ?>
  </td>


   <td><input type="button" id="boton_img_naranja_2" class="freddy_boton_7 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  	<td class="ocul"> <input type="text" name="naranja_mas_img2" id="naranja_mas_img2" value="<?php echo htmlspecialchars($naranja_mas_img2);?>" class="titulo_tabla masw2"> </td>
  	<td> <?php if (empty($naranja_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($naranja_mas_img2);?>"  height="30" width="30" class="img_bor ocul">
     <?php } ?>
      </td>

     </tr>



<tr>
  <td>
  <input type="button" id="boton_img_verde3" class="freddy_boton_2 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
   <td class="ocul"> <input type="text" name="verde_mas_img3" id="verde_mas_img3" value="<?php echo htmlspecialchars($verde_mas_img3);?>" class="titulo_tabla masw2"> </td>
   <td> <?php if (empty($verde_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($verde_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
     </td>


   <td><input type="button" id="boton_img_naranja3" class="freddy_boton_7 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
  	<td class="ocul"> <input type="text" name="naranja_mas_img3" id="naranja_mas_img3" value="<?php echo htmlspecialchars($naranja_mas_img3);?>" class="titulo_tabla masw2"> </td>
  	<td> <?php if (empty($naranja_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($naranja_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
    </td>



</tr>

</table>




<table class="total_ancho">
  <tr>
    <th class="tam"> Color: Azul </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam"> Color: Morado </th>
    <th class="tam ocul"> Url </th>
    <th class="tam">Imagen</th>

  </tr>
  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>


  <tr>
  <td>
  <input type="button" id="boton_img_azul1" class="freddy_boton_3 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  <td class="ocul"><input type="text" name="azul_mas_img1" id="azul_mas_img1" value="<?php echo htmlspecialchars($azul_mas_img1);?>" class="titulo_tabla masw2"> </td>
  <td> <?php if (empty($azul_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($azul_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
 <?php } ?>
 </td>



   <td><input type="button" id="boton_img_morado1" class="freddy_boton_8 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  	<td class="ocul"> <input type="text" name="morado_mas_img1" id="morado_mas_img1" value="<?php echo htmlspecialchars($morado_mas_img1);?>" class="titulo_tabla masw2"> </td>
  	<td> <?php if (empty($morado_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($morado_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
    </td>


  </tr>



 <tr>
  <td>
  <input type="button" id="boton_img_azul2" class="freddy_boton_3 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
 <td class="ocul"> <input type="text" name="azul_mas_img2" id="azul_mas_img2" value="<?php echo htmlspecialchars($azul_mas_img2);?>" class="titulo_tabla masw2"> </td>
  <td> <?php if (empty($azul_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($azul_mas_img2);?>"  height="30" width="30" class="img_bor ocul">
<?php } ?>
</td>



     <td><input type="button" id="boton_img_morado2" class="freddy_boton_8 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  <td class="ocul"><input type="text" name="morado_mas_img2" id="morado_mas_img2" value="<?php echo htmlspecialchars($morado_mas_img2);?>" class="titulo_tabla masw2" > </td>
  	<td> <?php if (empty($morado_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($morado_mas_img2);?>"  height="30" width="30" class="img_bor ocul">
 <?php } ?>
  </td>
  </tr>



<tr>
  <td>
  <input type="button" id="boton_img_azul3" class="freddy_boton_3 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
  <td class="ocul"><input type="text" name="azul_mas_img3" id="azul_mas_img3" value="<?php echo htmlspecialchars($azul_mas_img3);?>" class="titulo_tabla masw2"> </td>
   <td> <?php if (empty($azul_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($azul_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
     </td>



  	<td><input type="button" id="boton_img_morado3" class="freddy_boton_8 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
  	<td class="ocul"><input type="text" name="morado_mas_img3" id="morado_mas_img3" value="<?php echo htmlspecialchars($morado_mas_img3);?>" class="titulo_tabla masw2"> </td>
  	<td> <?php if (empty($morado_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($morado_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
 <?php } ?>
     </td>

</tr>

</table>


<table class="total_ancho">
  <tr>
    <th class="tam"> Color: Rojo </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam"> Color: Negro </th>
    <th class="tam ocul"> Url </th>
    <th class="tam">Imagen</th>

  </tr>
  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>


  <tr>
  <td>
  <input type="button" id="boton_img_rojo1" class="freddy_boton_4 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  <td class="ocul"><input type="text" name="rojo_mas_img1" id="rojo_mas_img1" value="<?php echo htmlspecialchars($rojo_mas_img1);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($rojo_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($rojo_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
<?php } ?>
</td>


    <td><input type="button" id="boton_img_negro1" class="freddy_boton_9 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  	<td class="ocul"><input type="text" name="negro_mas_img1" id="negro_mas_img1" value="<?php echo htmlspecialchars($negro_mas_img1);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($negro_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($negro_mas_img1);?>"  height="30" width="30" class="img_bor ocul">
   <?php } ?>
    </td>


  </tr>



 <tr>
  <td>
  <input type="button" id="boton_img_rojo2" class="freddy_boton_4 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
 <td class="ocul"><input type="text" name="rojo_mas_img2" id="rojo_mas_img2" value="<?php echo htmlspecialchars($rojo_mas_img2);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($rojo_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($rojo_mas_img2);?>"  height="30" width="30" class="img_bor ocul">
   <?php } ?>
     </td>



    <td><input type="button" id="boton_img_negro2" class="freddy_boton_9 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  	<td class="ocul"><input type="text" name="negro_mas_img2" id="negro_mas_img2" value="<?php echo htmlspecialchars($negro_mas_img2);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($negro_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($negro_mas_img2);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?>
     </td>


  </tr>



<tr>
  <td>
  <input type="button" id="boton_img_rojo3" class="freddy_boton_4 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
 <td class="ocul"><input type="text" name="rojo_mas_img3" id="rojo_mas_img3" value="<?php echo htmlspecialchars($rojo_mas_img3);?>" class="titulo_tabla "> </td>
   <td> <?php if (empty($rojo_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($rojo_mas_img3);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?>  </td>


  	<td><input type="button" id="boton_img_negro3" class="freddy_boton_9 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
  	<td class="ocul"> <input type="text" name="negro_mas_img3" id="negro_mas_img3" value="<?php echo htmlspecialchars($negro_mas_img3);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($negro_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($negro_mas_img3);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?> </td>


</tr>

</table>


<table class="total_ancho">
  <tr>
    <th class="tam"> Color: blanco </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam"> Color: blanco y Negro </th>
    <th class="tam ocul"> Url </th>
    <th class="tam">Imagen</th>
  </tr>
  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>

  <tr>
  <td>
  <input type="button" id="boton_img_blanco1" class="freddy_boton_5 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
 <td class="ocul"><input type="text" name="blanco_mas_img1" id="blanco_mas_img1" value="<?php echo htmlspecialchars($blanco_mas_img1);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($blanco_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($blanco_mas_img1);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?>  </td>



    <td><input type="button" id="boton_img_b_y_n1" class="freddy_boton_10 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  	<td class="ocul"><input type="text" name="byn_mas_img1" id="byn_mas_img1" value="<?php echo htmlspecialchars($byn_mas_img1);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($byn_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($byn_mas_img1);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?>  </td>
  </tr>



 <tr>
  <td>
  <input type="button" id="boton_img_blanco2" class="freddy_boton_5 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  <td class="ocul"> <input type="text" name="blanco_mas_img2" id="blanco_mas_img2" value="<?php echo htmlspecialchars($blanco_mas_img2);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($blanco_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($blanco_mas_img2);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?> </td>


    <td><input type="button" id="boton_img_b_y_n_2" class="freddy_boton_10 " value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' );?>" /> </td>
  	<td class="ocul"><input type="text" name="byn_mas_img2" id="byn_mas_img2" value="<?php echo htmlspecialchars($byn_mas_img2);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($byn_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($byn_mas_img2);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?>   </td>

  </tr>



<tr>
  <td>
  <input type="button" id="boton_img_blanco3" class="freddy_boton_5 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
   <td class="ocul"><input type="text" name="blanco_mas_img3" id="blanco_mas_img3" value="<?php echo htmlspecialchars($blanco_mas_img3);?>" class="titulo_tabla "> </td>
   <td> <?php if (empty($blanco_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($blanco_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
  </td>


  	<td>
      <input type="button" id="boton_img_b_y_n_3" class="freddy_boton_10 " value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" />
       </td>
<td class="ocul">
      <input type="text" name="byn_mas_img3" id="byn_mas_img3" value="<?php echo htmlspecialchars($byn_mas_img3);?>" class="titulo_tabla ">
       </td>
  	<td> <?php if (empty($byn_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($byn_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
     </td>
</tr>

</table>



<table class="total_ancho">
  <tr>
    <th class="tam"> Color: cafe </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam"> Color: verde limon </th>
    <th class="tam ocul"> Url </th>
    <th class="tam">Imagen</th>
  </tr>
  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>

  <tr>
  <td>
  <input type="button" id="boton_img_cafe1" class="freddy_boton_30 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
 <td class="ocul"><input type="text" name="cafe_mas_img1" id="cafe_mas_img1" value="<?php echo htmlspecialchars($cafe_mas_img1);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($cafe_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($cafe_mas_img1);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?>  </td>



    <td><input type="button" id="boton_img_limon1" class="freddy_boton_40 " value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
  	<td class="ocul"><input type="text" name="limon_mas_img1" id="limon_mas_img1" value="<?php echo htmlspecialchars($limon_mas_img1);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($limon_mas_img1)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($limon_mas_img1);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?>  </td>
  </tr>

 <tr>
  <td>
  <input type="button" id="boton_img_cafe2" class="freddy_boton_31" value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  <td class="ocul"> <input type="text" name="cafe_mas_img2" id="cafe_mas_img2" value="<?php echo htmlspecialchars($cafe_mas_img2);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($cafe_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($cafe_mas_img2);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?> </td>


    <td><input type="button" id="boton_img_limon2" class="freddy_boton_41" value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' );?>" /> </td>
  	<td class="ocul"><input type="text" name="limon_mas_img2" id="limon_mas_img2" value="<?php echo htmlspecialchars($limon_mas_img2);?>" class="titulo_tabla "> </td>
  	<td> <?php if (empty($limon_mas_img2)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($limon_mas_img2);?>"  height="30" width="30" class="img_bor ocul"> <?php } ?>   </td>

  </tr>





<tr>
  <td>
  <input type="button" id="boton_img_cafe3" class="freddy_boton_32" value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
   <td class="ocul"><input type="text" name="cafe_mas_img3" id="cafe_mas_img3" value="<?php echo htmlspecialchars($cafe_mas_img3);?>" class="titulo_tabla "> </td>
   <td> <?php if (empty($cafe_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($cafe_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
  </td>


  	<td>
      <input type="button" id="boton_img_limon3" class="freddy_boton_42" value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" />
       </td>
<td class="ocul">
      <input type="text" name="limon_mas_img3" id="limon_mas_img3" value="<?php echo htmlspecialchars($limon_mas_img3);?>" class="titulo_tabla ">
       </td>
  	<td> <?php if (empty($limon_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($limon_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
     </td>
</tr>

</table>



<table class="total_ancho">
  <tr>
    <th class="tam"> Color: Gris </th>
    <th class="tam ocul"> Url </th>
    <th class="tam"> Imagen</th>
    <th class="tam mib">--------------------</th>
    <th class="tam ocul mib">--------------------</th>
    <th class="tam mib">--------------------</th>
  </tr>
  <tr>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
     <td class=""></td>
     <td class="ocul"></td>
     <td class=""></td>
  </tr>


  <tr>
  <td>
  <input type="button" id="boton_img_gris1" class="freddy_boton_50" value="<?php _e( 'Selecciona Imagen 1', 'imagen_uno' )?>" /> </td>
 <td class="ocul"><input type="text" name="gris_mas_img1" id="gris_mas_img1" value="<?php echo htmlspecialchars($gris_mas_img1);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($gris_mas_img1)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($gris_mas_img1);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?>  </td>



    <td class="mib">------------------------</td>
  	<td class="ocul mib">--------------------</td>
  	<td class="mib">--------------------</td>
  </tr>

 <tr>
  <td>
  <input type="button" id="boton_img_gris2" class="freddy_boton_51" value="<?php _e( 'Selecciona Imagen 2', 'imagen_dos' )?>" /> </td>
  <td class="ocul"> <input type="text" name="gris_mas_img2" id="gris_mas_img2" value="<?php echo htmlspecialchars($gris_mas_img2);?>" class="titulo_tabla "> </td>
  <td> <?php if (empty($gris_mas_img2)) { }else{ ?>
  <img src="<?php echo htmlspecialchars($gris_mas_img2);?>"  height="30" width="30" class="img_bor ocul">  <?php } ?> </td>


  <td class="mib">--------------------</td>
  <td class="mib">--------------------</td>
  <td class="mib">--------------------</td>
  </tr>





<tr>
  <td>
  <input type="button" id="boton_img_gris3" class="freddy_boton_52" value="<?php _e( 'Selecciona Imagen 3', 'imagen_tres' )?>" /> </td>
   <td class="ocul"><input type="text" name="gris_mas_img3" id="gris_mas_img3" value="<?php echo htmlspecialchars($gris_mas_img3);?>" class="titulo_tabla "> </td>
   <td> <?php if (empty($gris_mas_img3)) { }else{ ?>
  	<img src="<?php echo htmlspecialchars($gris_mas_img3);?>"  height="30" width="30" class="img_bor ocul">
    <?php } ?>
  </td>


  <td class="mib">--------------------</td>
  <td class="mib">--------------------</td>
  <td class="mib">--------------------</td>
</tr>

</table>
<?php

}

function Guardar_datos_producto( $post_id ) {

if( isset( $_POST[ 'rosa_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'rosa_mas_img1', $_POST[ 'rosa_mas_img1' ] );
}
if( isset( $_POST[ 'rosa_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'rosa_mas_img2', $_POST[ 'rosa_mas_img2' ] );
}
if( isset( $_POST[ 'rosa_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'rosa_mas_img3', $_POST[ 'rosa_mas_img3' ] );
}
if( isset( $_POST[ 'amarillo_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'amarillo_mas_img1', $_POST[ 'amarillo_mas_img1' ] );
}
if( isset( $_POST[ 'amarillo_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'amarillo_mas_img2', $_POST[ 'amarillo_mas_img2' ] );
}
if( isset( $_POST[ 'amarillo_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'amarillo_mas_img3', $_POST[ 'amarillo_mas_img3' ] );
}
if( isset( $_POST[ 'verde_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'verde_mas_img1', $_POST[ 'verde_mas_img1' ] );
}
if( isset( $_POST[ 'verde_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'verde_mas_img2', $_POST[ 'verde_mas_img2' ] );
}
if( isset( $_POST[ 'verde_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'verde_mas_img3', $_POST[ 'verde_mas_img3' ] );
}
if( isset( $_POST[ 'naranja_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'naranja_mas_img1', $_POST[ 'naranja_mas_img1' ] );
}
if( isset( $_POST[ 'naranja_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'naranja_mas_img2', $_POST[ 'naranja_mas_img2' ] );
}
if( isset( $_POST[ 'naranja_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'naranja_mas_img3', $_POST[ 'naranja_mas_img3' ] );
}
if( isset( $_POST[ 'azul_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'azul_mas_img1', $_POST[ 'azul_mas_img1' ] );
}
if( isset( $_POST[ 'azul_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'azul_mas_img2', $_POST[ 'azul_mas_img2' ] );
}
if( isset( $_POST[ 'azul_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'azul_mas_img3', $_POST[ 'azul_mas_img3' ] );
}
if( isset( $_POST[ 'morado_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'morado_mas_img1', $_POST[ 'morado_mas_img1' ] );
}
if( isset( $_POST[ 'morado_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'morado_mas_img2', $_POST[ 'morado_mas_img2' ] );
}
if( isset( $_POST[ 'morado_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'morado_mas_img3', $_POST[ 'morado_mas_img3' ] );
}
if( isset( $_POST[ 'rojo_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'rojo_mas_img1', $_POST[ 'rojo_mas_img1' ] );
}
if( isset( $_POST[ 'rojo_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'rojo_mas_img2', $_POST[ 'rojo_mas_img2' ] );
}
if( isset( $_POST[ 'rojo_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'rojo_mas_img3', $_POST[ 'rojo_mas_img3' ] );
}
if( isset( $_POST[ 'negro_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'negro_mas_img1', $_POST[ 'negro_mas_img1' ] );
}
if( isset( $_POST[ 'negro_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'negro_mas_img2', $_POST[ 'negro_mas_img2' ] );
}
if( isset( $_POST[ 'negro_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'negro_mas_img3', $_POST[ 'negro_mas_img3' ] );
}
if( isset( $_POST[ 'blanco_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'blanco_mas_img1', $_POST[ 'blanco_mas_img1' ] );
}
if( isset( $_POST[ 'blanco_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'blanco_mas_img2', $_POST[ 'blanco_mas_img2' ] );
}
if( isset( $_POST[ 'blanco_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'blanco_mas_img3', $_POST[ 'blanco_mas_img3' ] );
}
if( isset( $_POST[ 'byn_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'byn_mas_img1', $_POST[ 'byn_mas_img1' ] );
}
if( isset( $_POST[ 'byn_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'byn_mas_img2', $_POST[ 'byn_mas_img2' ] );
}
if( isset( $_POST[ 'byn_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'byn_mas_img3', $_POST[ 'byn_mas_img3' ] );
}
if( isset( $_POST[ 'img_uso_product' ] ) ) {
    update_post_meta( $post_id, 'img_uso_product', $_POST[ 'img_uso_product' ] );
}
if( isset( $_POST[ 'id_producto' ] ) ) {
    update_post_meta( $post_id, 'id_producto', $_POST[ 'id_producto' ] );
}
if( isset( $_POST[ 'dimenciones' ] ) ) {
    update_post_meta( $post_id, 'dimenciones', $_POST[ 'dimenciones' ] );
}
if( isset( $_POST[ 'cerdas' ] ) ) {
    update_post_meta( $post_id, 'cerdas', $_POST[ 'cerdas' ] );
}
if( isset( $_POST[ 'temperatura' ] ) ) {
    update_post_meta( $post_id, 'temperatura', $_POST[ 'temperatura' ] );
}
if( isset( $_POST[ 'material' ] ) ) {
    update_post_meta( $post_id, 'material', $_POST[ 'material' ] );
}
if( isset( $_POST[ 'mi_url_video' ] ) ) {
    update_post_meta( $post_id, 'mi_url_video', $_POST[ 'mi_url_video' ] );
}
if( isset( $_POST[ 'Editor_certificados' ] ) ) {
    update_post_meta( $post_id, 'Editor_certificados', $_POST[ 'Editor_certificados' ] );
}

if( isset( $_POST[ 'produc_relacion1' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion1', $_POST[ 'produc_relacion1' ] );
}
if( isset( $_POST[ 'produc_relacion2' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion2', $_POST[ 'produc_relacion2' ] );
}
if( isset( $_POST[ 'produc_relacion3' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion3', $_POST[ 'produc_relacion3' ] );
}
if( isset( $_POST[ 'produc_relacion4' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion4', $_POST[ 'produc_relacion4' ] );
}
if( isset( $_POST[ 'produc_relacion5' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion5', $_POST[ 'produc_relacion5' ] );
}
if( isset( $_POST[ 'produc_relacion6' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion6', $_POST[ 'produc_relacion6' ] );
}
if( isset( $_POST[ 'produc_relacion7' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion7', $_POST[ 'produc_relacion7' ] );
}
if( isset( $_POST[ 'produc_relacion8' ] ) ) {
    update_post_meta( $post_id, 'produc_relacion8', $_POST[ 'produc_relacion8' ] );
}

if( isset( $_POST[ 'gris_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'gris_mas_img1', $_POST[ 'gris_mas_img1' ] );
}
if( isset( $_POST[ 'gris_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'gris_mas_img2', $_POST[ 'gris_mas_img2' ] );
}
if( isset( $_POST[ 'gris_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'gris_mas_img3', $_POST[ 'gris_mas_img3' ] );
}
if( isset( $_POST[ 'limon_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'limon_mas_img1', $_POST[ 'limon_mas_img1' ] );
}
if( isset( $_POST[ 'limon_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'limon_mas_img2', $_POST[ 'limon_mas_img2' ] );
}
if( isset( $_POST[ 'limon_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'limon_mas_img3', $_POST[ 'limon_mas_img3' ] );
}
if( isset( $_POST[ 'cafe_mas_img1' ] ) ) {
    update_post_meta( $post_id, 'cafe_mas_img1', $_POST[ 'cafe_mas_img1' ] );
}
if( isset( $_POST[ 'cafe_mas_img2' ] ) ) {
    update_post_meta( $post_id, 'cafe_mas_img2', $_POST[ 'cafe_mas_img2' ] );
}
if( isset( $_POST[ 'cafe_mas_img3' ] ) ) {
    update_post_meta( $post_id, 'cafe_mas_img3', $_POST[ 'cafe_mas_img3' ] );
}



}
add_action( 'save_post', 'Guardar_datos_producto' );

//denegar actualizciones
remove_action( 'load-update-core.php', 'wp_update_plugins' );
add_filter( 'pre_site_transient_update_plugins', create_function( '$a', "return null;" ) );

//* WooCommerce: Redirecciona al cliente a una página especifica después de una compra
add_action( 'template_redirect', 'woocommerce_redirecciona_compra_realizada' );
function woocommerce_redirecciona_compra_realizada() {
  global $wp;

  if ( is_checkout() && ! empty( $wp->query_vars['order-received'] ) ) {
    wp_redirect( 'http://0jv.321.myftpupload.com/gracias/' );
    exit;
  }
}

//wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );


add_filter('wp_nav_menu_items','carrito_en_menu', 10, 2);

function carrito_en_menu($menu, $args) {

 if ( !in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) || 'secondary' !== $args->theme_location )
 return $menu;

ob_start();
 global $woocommerce;
 $viewing_cart = __('Ver tu carrito', 'your-theme-slug');
 $start_shopping = __('Empezar a comprar', 'your-theme-slug');
 $cart_url = $woocommerce->cart->get_cart_url();
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 $cart_contents_count = $woocommerce->cart->cart_contents_count;
 $cart_contents = sprintf(_n('%d item', '%d items', $cart_contents_count, 'your-theme-slug'), $cart_contents_count);
 $cart_total = $woocommerce->cart->get_cart_total();
 $menu_item="";

 if ( $cart_contents_count > 0 ) {
 if ($cart_contents_count == 0) {
 $menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $shop_page_url .'" title="'. $start_shopping .'">';
 } else {
 $menu_item = '<li class="right"><a class="wcmenucart-contents" href="'. $cart_url .'" title="'. $viewing_cart .'">';
 }

$menu_item .= '<i class="icon ion-android-cart"></i> ';
$menu_item .= $cart_contents.' - '. $cart_total;
$menu_item .= '</a></li>';
}
 echo $menu_item;
 $social = ob_get_clean();
 return $menu . $social;

}

show_admin_bar(false);

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
    $scripts->remove( 'jquery');
    $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}


add_action('pre_get_posts','alter_query');

function alter_query($query) {
  //gets the global query var object
  global $wp_query;

  if ( !$query->is_tax() )
    return;

  $query->set('posts_per_page', 9 );

}


// function visible_solo_usuarios_registrados(){
//     if ( !is_user_logged_in() && (is_woocommerce() || is_cart() || is_checkout())) {
//         wp_redirect( get_permalink( get_option( 'woocommerce_myaccount_page_id' ) ) );
//         exit;
//     }
// }
// add_action( 'template_redirect', 'visible_solo_usuarios_registrados' );

//
// function my_custom_searchengine($query) {
//   if ($query->is_search && !is_admin()) {
//     $query->set('post_type', array('product'));
//   }
//   return $query;
// }
// add_filter('pre_get_posts', 'my_custom_searchengine');

// function searchAll($query){
// if ($query->is_search) {
// $query-set('post_type',$array('product'));
// }
// return $query;
// }
// add_filter('the_search_query','searchAll');

function my_custom_searchengine($query) {
  if ($query->is_search && !is_admin()) {
    $query->set('post_type', array('product'));
  }
  return $query;
}
add_filter('pre_get_posts', 'my_custom_searchengine');




function mostrar(){ ?>
<div class="wrap">


 <form class="" method="POST" action="options.php">

  <?php settings_fields('conasa-max-length-content-settings-group');
        do_settings_sections( 'conasa-max-length-content-settings-group' ); 
  ?>



<div id="red-social">
  <div class="con-div">
    <ul class="fa-ul">

<li>
 <span class="fa-stack fa-1x">
 <i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
</span>
<input type="url" class="cajaredsociales" name="Facebook" id="Facebook" value="<?php echo get_option('Facebook'); ?>" placeholder=" Coloca Url Facebook " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
</span>
<input type="url" class="cajaredsociales" name="Instagram" id="Instagram" value="<?php echo get_option('Instagram'); ?>" placeholder=" Coloca Url Instagram " />
</li>

<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" class="cajaredsociales" name="Twitter" id="Twitter" value="<?php echo get_option('Twitter'); ?>" placeholder=" Coloca Url Twitter " />
</li>



<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-linkedin fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" class="cajaredsociales" name="LinkedIn" id="LinkedIn" value="<?php echo get_option('LinkedIn'); ?>" placeholder=" Coloca Url LinkedIn " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-vimeo-square fa-stack-1x fa-inverse"></i>
</span>
<input  type="url" class="cajaredsociales" name="Vimeo" id="Vimeo" value="<?php echo get_option('Vimeo'); ?>" placeholder=" Coloca Url Vimeo " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
</span>
<input  type="url"  class="cajaredsociales" name="Youtube" id="Youtube" value="<?php echo get_option('Youtube'); ?>" placeholder="Coloca Url Youtube " />
</li>


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-pinterest-p fa-stack-1x fa-inverse"></i>
</span>
 <input class="cajaredsociales" type="url" name="Pinterest" id="Pinterest" value="<?php echo get_option('Pinterest'); ?>" placeholder="Coloca Url Pinterest " />
 </li>




<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-google-plus fa-stack-1x fa-inverse"></i>
</span>
                    <input  class="cajaredsociales"

                             type="url" 

                             name="googleplus" 

                             id="googleplus" 

                             value="<?php echo get_option('googleplus'); ?>" placeholder="Coloca url de Google Plus" />


</li>





<li>
<span class="fa-stack fa-1x">

<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-envelope-o  fa-stack-1x fa-inverse"></i>
</span>
                    <input  class="cajaredsociales"

                             type="email" 

                             name="correo1" 

                             id="correo1" 

                             value="<?php echo get_option('correo1'); ?>" placeholder="Coloca E-mail" />
                            
</li>



<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-phone  fa-stack-1x fa-inverse"></i>
</span>
                    <input  class="cajaredsociales"

                             type="tel" 

                             name="telefono" 

                             id="telefono" 

                             value="<?php echo get_option('telefono'); ?>" placeholder="Coloca Telefono" />
                           
</li>

<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
  <i class="fa fa-map-marker  fa-stack-1x fa-inverse"></i>
</span>
    <textarea class="cajaredsociales" name="ubicacion" id="ubicacion" 

     placeholder="Coloca la Ubicación" /><?php echo get_option('ubicacion'); ?></textarea>
                           
</li>

                             


<li>
<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
<i class="fa fa-bar-chart fa-stack-1x fa-inverse"></i>
</span>
<input class="cajaredsociales" type="text" name="Analytics"  id="Analytics" value="<?php echo get_option('Analytics'); ?>" placeholder=" Coloca tus digitos de Analytics " />
</li>



<li>

<input class="boton_promociones" type="button" id="boton_promociones" name="agregar_imagen" value="agregar imagen promoción">
<br>

<span class="fa-stack fa-1x">
<i class="  fa fa-circle fa-stack-2x"></i>
<i class="fa fa-bullseye fa-stack-1x fa-inverse" aria-hidden="true"></i>

</span>

<input class="cajaredsociales" type="text" name="promociones"  id="promociones" value="<?php echo get_option('promociones'); ?>"/>

</li>




  
<li> 
<?php 
$fecha= date("d/m/Y"); 
$url_Newsletter=''.get_template_directory_uri().'/js/contacto.txt'; 
?>
 
<!-- <span class="fa-stack fa-1x">
 
<i class="  fa fa-circle fa-stack-2x"></i>
 
  <i class="fa fa-arrow-circle-down fa-stack-1x fa-inverse"></i>
 
</span>
 
<a class="btn button" href="<?php //echo $url_Newsletter;?>" download="Contactos Newsletter <?php echo $fecha;?>" >Descargar newsletter</a>
 
</li> -->



</ul>

  <div style="clear:both"></div>
</div>
</div>
<?php submit_button(); ?>

</form>


</div>
<?php }


function redes_sociales() {

     wp_enqueue_media();

        wp_register_script( 'meta-box-imagen_descarga',get_template_directory_uri().'/assets/js/administrador/nuevo_admin.js?ver=13z17d', array( 'jquery' ) );
        wp_localize_script( 'meta-box-imagen_descarga', 'meta_imagen_descarga',
            array(
                'title' => __( 'Imagen', 'imagen_descarga' ),
                'button' => __( 'Usar Imagen', 'imagen_descarga' ),
                'library' => 'image'
            )
        );
        wp_enqueue_script( 'meta-box-imagen_descarga' );



    add_menu_page( 'Redes_sociales', 'Redes sociales', 'manage_options', '/Redes_sociales/', 'mostrar', 'dashicons-share', 19);

}
add_action( 'admin_menu', 'redes_sociales' );

function conasa_max_length_content_settings(){

      register_setting('conasa-max-length-content-settings-group',

                     'Facebook'

                     );


      register_setting('conasa-max-length-content-settings-group',

                     'Instagram'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'LinkedIn'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Youtube'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Vimeo'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Twitter'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Analytics'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'Pinterest'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'correo1'

                     );

      register_setting('conasa-max-length-content-settings-group',

                     'telefono'

                     );
      register_setting('conasa-max-length-content-settings-group',
                     
                    'ubicacion'
                     
                    );
      register_setting('conasa-max-length-content-settings-group',

                     'googleplus'

                     );
      register_setting('conasa-max-length-content-settings-group',

                     'promociones'

                     );

      
    
}

add_action('admin_init','conasa_max_length_content_settings');


?>