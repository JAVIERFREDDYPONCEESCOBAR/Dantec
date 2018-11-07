
<?php 
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
define('WP_USE_THEMES', false);
require('../../../../../wp-load.php');
//El formulario ha sido enviado
  global $reg_errors;
  $reg_errors = new WP_Error;
 
 


  $email     = sanitize_email($_POST['reg_email']);
  $nombre    = sanitize_text_field($_POST['billing_first_name']);
  $apellidos = sanitize_text_field($_POST['billing_last_name']);
  $contrasena =  sanitize_text_field($_POST['password']);
  $nom_usuariop     = sanitize_email($_POST['username']);
  $compania = sanitize_text_field($_POST['billing_company']);
  $phone = sanitize_text_field($_POST['billing_phone']);
  $puesto = sanitize_text_field($_POST['billing_puesto']);
  $calleynum = sanitize_text_field($_POST['billing_address_1']);
  $colonia = sanitize_text_field($_POST['reg_billing_address_2']); 
  $code_postal = sanitize_text_field($_POST['billing_postcode']); 
  $ciudad = sanitize_text_field($_POST['reg_billing_city']); 
  $estado = sanitize_text_field($_POST['billing_state']); 
  $pais = sanitize_text_field($_POST['reg_billing_country']); 
  $phone_lada = sanitize_text_field($_POST['lada_phone']);
  $phone_movil =  sanitize_text_field($_POST['billing_telefono_movil']);
        
        


    $password = md5($contrasena);
echo  ''.$nombre .'<br>
';
   
echo  ''.$contrasena .'<br>
';

echo  ''.$password .'<br>
';


$userdata = array(
'user_login'    =>  $nombre,
'user_email'    =>  $email,
'user_pass'     =>  $contrasena,
'first_name'    =>  $nombre,
'last_name'     =>  $apellidos,
'nickname'      =>  $nombre,
'role'          => 'customer'
);

   wp_insert_user( $userdata );

print_r(wp_insert_user( $userdata ));
    if ( ! is_wp_error( $user_id ) ) {

      update_user_meta( $user_id, 'billing_first_name', $nombre );
      update_user_meta( $user_id, 'billing_last_name', $apellidos );
      update_user_meta( $user_id, 'billing_first_name', $nombre );
      update_user_meta( $user_id, 'billing_last_name', $apellidos );
      update_user_meta( $user_id, 'billing_phone', $phone );
      update_user_meta( $user_id, 'billing_company', $compania );
      update_user_meta( $user_id, 'reg_email', $email );
      wp_new_user_notification( $user_id, 'both' );
    }
  

  echo "REALIZADO VIA  WEB";




?>