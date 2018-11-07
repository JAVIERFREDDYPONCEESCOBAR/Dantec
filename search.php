<?php
/**
 * The template for displaying search results pages.
 *
 * @package storefront
 */

function displayRelationTable($color, $id, $title){
  if($color == null || $color == ""){ return; }
  $id_url=get_permalink($id);
  $titulo_re= $title;
  $este_id=get_post_meta($id, '_sku', true);





$id_producto  = get_post_meta($id, 'id_producto', true);

$rosa_mas_img1       = get_post_meta($id, 'rosa_mas_img1', true);
$rosa_mas_img2       = get_post_meta($id, 'rosa_mas_img2', true);
$rosa_mas_img3       = get_post_meta($id, 'rosa_mas_img3', true);

$amarillo_mas_img1   = get_post_meta($id, 'amarillo_mas_img1', true);
$amarillo_mas_img2   = get_post_meta($id, 'amarillo_mas_img2', true);
$amarillo_mas_img3   = get_post_meta($id, 'amarillo_mas_img3', true);

$verde_mas_img1      = get_post_meta($id, 'verde_mas_img1', true);
$verde_mas_img2      = get_post_meta($id, 'verde_mas_img2', true);
$verde_mas_img3      = get_post_meta($id, 'verde_mas_img3', true);

$naranja_mas_img1    = get_post_meta($id, 'naranja_mas_img1', true);
$naranja_mas_img2    = get_post_meta($id, 'naranja_mas_img2', true);
$naranja_mas_img3    = get_post_meta($id, 'naranja_mas_img3', true);

$azul_mas_img1       = get_post_meta($id, 'azul_mas_img1', true);
$azul_mas_img2       = get_post_meta($id, 'azul_mas_img2', true);
$azul_mas_img3       = get_post_meta($id, 'azul_mas_img3', true);

$morado_mas_img1     = get_post_meta($id, 'morado_mas_img1', true);
$morado_mas_img2     = get_post_meta($id, 'morado_mas_img2', true);
$morado_mas_img3     = get_post_meta($id, 'morado_mas_img3', true);

$rojo_mas_img1       = get_post_meta($id, 'rojo_mas_img1', true);
$rojo_mas_img2       = get_post_meta($id, 'rojo_mas_img2', true);
$rojo_mas_img3       = get_post_meta($id, 'rojo_mas_img3', true);

$negro_mas_img1      = get_post_meta($id, 'negro_mas_img1', true);
$negro_mas_img2      = get_post_meta($id, 'negro_mas_img2', true);
$negro_mas_img3      = get_post_meta($id, 'negro_mas_img3', true);

$blanco_mas_img1     = get_post_meta($id, 'blanco_mas_img1', true);
$blanco_mas_img2     = get_post_meta($id, 'blanco_mas_img2', true);
$blanco_mas_img3     = get_post_meta($id, 'blanco_mas_img3', true);

$byn_mas_img1        = get_post_meta($id, 'byn_mas_img1', true);
$byn_mas_img2        = get_post_meta($id, 'byn_mas_img2', true);
$byn_mas_img3        = get_post_meta($id, 'byn_mas_img3', true);

$cafe_mas_img1       = get_post_meta($id, 'cafe_mas_img1', true);
$cafe_mas_img2       = get_post_meta($id, 'cafe_mas_img2', true);
$cafe_mas_img3       = get_post_meta($id, 'cafe_mas_img3', true);

$limon_mas_img1      = get_post_meta($id, 'limon_mas_img1', true);
$limon_mas_img2      = get_post_meta($id, 'limon_mas_img2', true);
$limon_mas_img3      = get_post_meta($id, 'limon_mas_img3', true);

$gris_mas_img1       = get_post_meta($id, 'gris_mas_img1', true);
$gris_mas_img2       = get_post_meta($id, 'gris_mas_img2', true);
$gris_mas_img3       = get_post_meta($id, 'gris_mas_img3', true);

?>
<div class="col-md-3 white product">
     <a href="<?php echo get_permalink($id); ?>">
     <div class="este-4 product_img" style="overflow: hidden; height: 190px;">

<?php 
$c1=get_post_meta($id, 'rosa_mas_img1', true);
$c2=get_post_meta($id, 'verde_mas_img1', true);
$c3=get_post_meta($id, 'azul_mas_img1', true);
$c4=get_post_meta($id, 'rojo_mas_img1', true);
$c5=get_post_meta($id, 'blanco_mas_img1', true);
$c6=get_post_meta($id, 'amarillo_mas_img1', true);
$c7=get_post_meta($id, 'naranja_mas_img1', true);
$c8=get_post_meta($id, 'morado_mas_img1', true);
$c9=get_post_meta($id, 'negro_mas_img1', true);
$c10=get_post_meta($id, 'byn_mas_img1', true);
$c11=get_post_meta($id, 'cafe_mas_img1', true);
$c12=get_post_meta($id, 'limon_mas_img1', true);
$c13=get_post_meta($id, 'gris_mas_img1', true);


if ((!empty($c1))&&($new_var=='rosa')||(!empty($c1))&&($new_var=='') ) {

  $url_color='rosa';
  $img_principalll=get_post_meta($id, 'rosa_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c2))&&($new_var=='verde')||(!empty($c2))&&($new_var=='') ) {

  $url_color='verde';
  $img_principalll=get_post_meta($id, 'verde_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c3))&&($new_var=='azul')||(!empty($c3))&&($new_var=='') ) {

  $url_color='azul';
  $img_principalll=get_post_meta($id, 'azul_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';


}elseif ( (!empty($c4))&&($new_var=='rojo')||(!empty($c4))&&($new_var=='') ) {

  $url_color='rojo';
  $img_principalll=get_post_meta($id, 'rojo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c5))&&($new_var=='blanco')||(!empty($c5))&&($new_var=='') ) {


  $url_color='blanco';
  $img_principalll=get_post_meta($id, 'blanco_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c6))&&($new_var=='amarillo')||(!empty($c6))&&($new_var=='') ) {

  $url_color='amarillo';
  $img_principalll=get_post_meta($id, 'amarillo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c7))&&($new_var=='naranja')||(!empty($c7))&&($new_var=='') ) {

  $url_color='naranja';
  $img_principalll=get_post_meta($id, 'naranja_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c8))&&($new_var=='morado')||(!empty($c8))&&($new_var=='') ) {

  $url_color='morado';
  $img_principalll=get_post_meta($id, 'morado_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c9))&&($new_var=='negro')||(!empty($c9))&&($new_var=='') ) {

 $url_color='negro';
  $img_principalll=get_post_meta($id, 'negro_mas_img1', true);

  echo' <img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c10))&&($new_var=='s_n')||(!empty($c10))&&($new_var=='') ) {

  $url_color='s_n';
  $img_principalll=get_post_meta($id, 'byn_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c11))&&($new_var=='cafe')||(!empty($c11))&&($new_var=='') ) {

  $url_color='cafe';
  $img_principalll=get_post_meta($id, 'cafe_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c12))&&($new_var=='verde-limon')||(!empty($c12))&&($new_var=='') ) {

  $url_color='verde-limon';
  $img_principalll=get_post_meta($id, 'limon_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c13))&&($new_var=='gris')||(!empty($c13))&&($new_var=='') ) {

  $url_color='gris';
  $img_principalll=get_post_meta($id, 'gris_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}

?>


      </div>
        <div class="product_info">
          <div class="clave"><?php echo$id; ?></div>
          <p><?php echo$title; ?></p>
        </div>
      </a>


      <div class="colors">
        <div class="color-wrap">
<?php
if ((empty($rosa_mas_img1))&&(empty($rosa_mas_img2))&&(empty($rosa_mas_img3))) {
  $color_rosa=' ';
  $img_rosa=' ';

}else{
    $color_rosa = 'rosa';
    $img_rosa   = $rosa_mas_img1;
    echo$rosa_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_rosa.'" data-image-color="'.$img_rosa.'"><span class="colour-'.$color_rosa.'"></span></a>';
}

if ((empty($verde_mas_img1))&&(empty($verde_mas_img2))&&(empty($verde_mas_img3))) {
    $color_verde = ' ';
    $img_verde = ' ';
}else{
    $color_verde ='verde';
    $img_verde = $verde_mas_img1;
     echo$verde_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_verde.'" data-image-color="'.$img_verde.'"><span class="colour-'.$color_verde.'"></span></a>';
}

if ((empty($azul_mas_img1))&&(empty($azul_mas_img2))&&(empty($azul_mas_img3))) {
   $color_azul =' ';
   $img_azul = ' ';
}else{
    $color_azul ='azul';
    $img_azul = $azul_mas_img1;
    echo$azul_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_azul.'" data-image-color="'.$img_azul.'"><span class="colour-'.$color_azul.'"></span></a>';
}

if ((empty($rojo_mas_img1))&&(empty($rojo_mas_img1))&&(empty($rojo_mas_img1))) {
  $color_rojo =' ';
  $img_rojo   =' ';
}else{
     $color_rojo ='rojo';
     $img_rojo = $rojo_mas_img1;
  echo$rojo_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_rojo.'" data-image-color="'.$img_rojo.'"><span class="colour-'.$color_rojo.'"></span></a>';
}

if ((empty($blanco_mas_img1))&&(empty($blanco_mas_img2))&&(empty($blanco_mas_img3))) {
  $color_blanco=' ';
  $img_blanco = ' ';
}else{
    $color_blanco ='blanco';
    $img_blanco = $blanco_mas_img1;
  echo$blanco_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_blanco.'" data-image-color="'.$img_blanco.'"><span class="colour-'.$color_blanco.'"></span></a>';
}

if ((empty($amarillo_mas_img1))&&(empty($amarillo_mas_img2))&&(empty($amarillo_mas_img3))) {
  $color_amarillo = ' ';
  $img_amarillo = ' ';
}else{
    $color_amarillo ='amarillo';
    $img_amarillo = $amarillo_mas_img1;
    echo$amarillo_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_amarillo.'" data-image-color="'.$img_amarillo.'"><span class="colour-'.$color_amarillo.'"></span></a>';
}

if ((empty($naranja_mas_img1))&&(empty($naranja_mas_img2))&&(empty($naranja_mas_img3))) {
  $color_naranja =' ';
  $img_naranja = ' ';
}else{
    $color_naranja ='naranja';
    $img_naranja = $naranja_mas_img1;
    echo$naranja_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_naranja.'" data-image-color="'.$img_naranja.'"><span class="colour-'.$color_naranja.'"></span></a>';
}

if ((empty($morado_mas_img1))&&(empty($morado_mas_img2))&&(empty($morado_mas_img3))) {
  $color_morado =' ';
    $img_morado = '';
}else{
    $img_morado = $morado_mas_img1;
    $color_morado ='morado';
  echo$morado_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_morado.'" data-image-color="'.$img_morado.'"><span class="colour-'.$color_morado.'"></span></a>';
}


if ((empty($negro_mas_img1))&&(empty($negro_mas_img2))&&(empty($negro_mas_img3))) {
  $color_negro =' ';
  $img_negro = ' ';
}else{
  $img_negro = $negro_mas_img1;
    $color_negro ='negro';
  echo$negro_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_negro.'" data-image-color="'.$img_negro.'"><span class="colour-'.$color_negro.'"></span></a>';
}


if ((empty($byn_mas_img1))&&(empty($byn_mas_img2))&&(empty($byn_mas_img3))) {
  $color_byn=' ';
  $img_byn= ' ';

}else{
    $color_byn ='sc';
    $img_byn= $byn_mas_img1;
   echo$byn_color='<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_byn.'" data-image-color="'.$img_byn.'"><span class="colour-'.$color_byn.'"></span></a>';
}


if ((empty($cafe_mas_img1))&&(empty($cafe_mas_img2))&&(empty($cafe_mas_img3))) {
  $color_cafe=' ';
  $img_cafe= ' ';

}else{
    $color_cafe ='cafe';
    $img_cafe= $cafe_mas_img1;
   echo'<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_cafe.'" data-image-color="'.$img_cafe.'"><span class="colour-'.$color_cafe.'"></span></a>';
}






if ((empty($limon_mas_img1))&&(empty($limon_mas_img2))&&(empty($limon_mas_img3))) {
  $color_limon=' ';
  $img_limon= ' ';

}else{
    $color_limon ='verde-limon';
    $img_limon= $limon_mas_img1;
   echo'<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_limon.'" data-image-color="'.$img_limon.'"><span class="colour-'.$color_limon.'"></span></a>';
}





if ((empty($gris_mas_img1))&&(empty($gris_mas_img2))&&(empty($gris_mas_img3))) {
  $color_gris=' ';
  $img_gris= ' ';

}else{
    $color_gris ='gris';
    $img_gris= $gris_mas_img1;
   echo'<a data-cc="'.$id.'" class="change-color" data-image-set-color="'.$color_gris.'" data-image-color="'.$img_gris.'"><span class="colour-'.$color_gris.'"></span></a>';
}
?>

</div>





        <div class="align-items-center cotizador">
          <div class="box-color-select">
            <span id="color_seleccionado" class="colour-sc"></span>
          </div>
          <div class="col-4 itemquantity">
            <input class="form-control form-text quantity_item_quantity" maxlength="4" name="item[quantity]" size="5" type="number" value="1">
          </div>
<div class="col-5 sectionf3">
<a id="<?php echo$id; ?>"  class="add-to-cart-link" href="?add-to-cart=<?php echo $id; ?>&attribute_color=<?php echo$url_color; ?>" data-quantity="">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/btn_cotizar_small-bf5db9b106da7aa051fb4871981235fd5a9b1a7dd2f49d70a90bfe6f806aaa46.png"/>
            </a>
          </div>
        </div>
      </div>
    </div>
<?php

//echo $table = <<<EOF

// <div class="col-md-3 white product">

//     <div class="este-4 product_img" style="overflow: hidden; height: 190px;">
//       <figure style="width: 160px;height: 160px;display: table-cell;vertical-align:middle;">
//         <a href="{$id_url}" style="text-decoration: none;">
//           <img style="vertical-align:middle;" src="{$color}" class="img-fluid" alt="{$titulo_re}"/>
//         </a>
//       </figure>
//     </div>
//     <div class="product_info">
//       <div class="clave" style="color:#0088CC;">{$este_id}</div>
//       <p style="color:black; ">{$titulo_re}</p>
//     </div>

// </div>

//EOF;








}

get_header();


?>
<div class="container-fluid nosidepadding maincontent">
<div class="container">
  <div class="row">

    <div class="col-md-12">
<?php

$sku = $_GET["s"];
$porciones = explode(" ",$sku);








$isNumeric = ctype_digit($_GET["s"]);
if(empty($porciones[1])){

  global $wpdb;

  //$sku = str_replace(' ', '', $sku);


global $wpdb;


  $query = [
        'post_type'  => 'product',
        'meta_query' => [
            [
                'key'     => '_sku',
                'value'   => $sku,
                'compare' => 'LIKE'
            ]
        ]
    ];

$argst = $wpdb->get_results( "SELECT * FROM `wp_xpr46vq995_posts` WHERE `post_title` LIKE '%{$sku}%'");
$posts = ( new WP_Query() )->query( $query );

if (empty($posts)) {

  //echo "--si--";
    $posts2 = $argst;

}else{

  //echo "---no---";
    $posts2 = ( new WP_Query() )->query( $query );

}





   if (empty($posts2[0]->post_title)) { ?>
    <header class="page-header">
      <h1 class="page-title"> SIN RESULTADOS  </h1>
    </header>

  <?php }else{ ?>


    <header class="page-header">
      <h1 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header>
  <?php } ?>




  <?php if ( $posts2 ) : ?>

  <div class="row productos" id="contendio_buscar">

  <?php foreach ( $posts2 as $post ): 

  $c1=get_post_meta($post->ID, 'rosa_mas_img1', true);
  $c2=get_post_meta($post->ID, 'verde_mas_img1', true);
  $c3=get_post_meta($post->ID, 'azul_mas_img1', true);
  $c4=get_post_meta($post->ID, 'rojo_mas_img1', true);
  $c5=get_post_meta($post->ID, 'blanco_mas_img1', true);
  $c6=get_post_meta($post->ID, 'amarillo_mas_img1', true);
  $c7=get_post_meta($post->ID, 'naranja_mas_img1', true);
  $c8=get_post_meta($post->ID, 'morado_mas_img1', true);
  $c9=get_post_meta($post->ID, 'negro_mas_img1', true);
  $c10=get_post_meta($post->ID,'byn_mas_img1', true);
  $c11=get_post_meta($post->ID, 'cafe_mas_img1', true);
  $c12=get_post_meta($post->ID, 'limon_mas_img1', true);
  $c13=get_post_meta($post->ID, 'gris_mas_img1', true);


       if (!empty($c1)) { displayRelationTable($c1, $post->ID, $post->post_title);
  }elseif (!empty($c2)) { displayRelationTable($c2, $post->ID, $post->post_title);
  }elseif (!empty($c3)) { displayRelationTable($c3, $post->ID, $post->post_title);
  }elseif (!empty($c4)) { displayRelationTable($c4, $post->ID, $post->post_title);
  }elseif (!empty($c5)) { displayRelationTable($c5, $post->ID, $post->post_title);
  }elseif (!empty($c6)) { displayRelationTable($c6, $post->ID, $post->post_title);
  }elseif (!empty($c7)) { displayRelationTable($c7, $post->ID, $post->post_title);
  }elseif (!empty($c8)) { displayRelationTable($c8, $post->ID, $post->post_title);
  }elseif (!empty($c9)) { displayRelationTable($c9, $post->ID, $post->post_title);
  }elseif (!empty($c10)) { displayRelationTable($c10, $post->ID, $post->post_title);
  }elseif (!empty($c11)) { displayRelationTable($c11, $post->ID, $post->post_title);
  }elseif (!empty($c12)) { displayRelationTable($c12, $post->ID, $post->post_title);
  }elseif (!empty($c13)) { displayRelationTable($c13, $post->ID, $post->post_title);
  }
 

  endforeach;

   ?>
  </div>
  <?php endif; 

}else{


//  print_r($post);

  if (empty($post->post_title)) { ?>
    <header class="page-header">
      <h1 class="page-title"> SIN RESULTADOS </h1>
    </header>

  <?php }else{ ?>

    <header class="page-header">
      <h1 class="page-title"><?php printf( esc_attr__( 'Search Results for: %s', 'storefront' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
    </header>
  <?php } ?>


  <?php if ( have_posts() ) : ?>
    <div class="row productos" id="contendio_pag">
  <?php while ( have_posts() ) : the_post(); ?>

  <?php

  //print_r($post);

  $c1=get_post_meta($post->ID, 'rosa_mas_img1', true);
  $c2=get_post_meta($post->ID, 'verde_mas_img1', true);
  $c3=get_post_meta($post->ID, 'azul_mas_img1', true);
  $c4=get_post_meta($post->ID, 'rojo_mas_img1', true);
  $c5=get_post_meta($post->ID, 'blanco_mas_img1', true);
  $c6=get_post_meta($post->ID, 'amarillo_mas_img1', true);
  $c7=get_post_meta($post->ID, 'naranja_mas_img1', true);
  $c8=get_post_meta($post->ID, 'morado_mas_img1', true);
  $c9=get_post_meta($post->ID, 'negro_mas_img1', true);
  $c10=get_post_meta($post->ID, 'byn_mas_img1', true);
  $c11=get_post_meta($post->ID, 'cafe_mas_img1', true);
  $c12=get_post_meta($post->ID, 'limon_mas_img1', true);
  $c13=get_post_meta($post->ID, 'gris_mas_img1', true);

       if (!empty($c1)) { displayRelationTable($c1, $post->ID, $post->post_title);
  }elseif (!empty($c2)) { displayRelationTable($c2, $post->ID, $post->post_title);
  }elseif (!empty($c3)) { displayRelationTable($c3, $post->ID, $post->post_title);
  }elseif (!empty($c4)) { displayRelationTable($c4, $post->ID, $post->post_title);
  }elseif (!empty($c5)) { displayRelationTable($c5, $post->ID, $post->post_title);
  }elseif (!empty($c6)) { displayRelationTable($c6, $post->ID, $post->post_title);
  }elseif (!empty($c7)) { displayRelationTable($c7, $post->ID, $post->post_title);
  }elseif (!empty($c8)) { displayRelationTable($c8, $post->ID, $post->post_title);
  }elseif (!empty($c9)) { displayRelationTable($c9, $post->ID, $post->post_title);
  }elseif (!empty($c10)) { displayRelationTable($c10, $post->ID, $post->post_title);
  }elseif (!empty($c11)) { displayRelationTable($c11, $post->ID, $post->post_title);
  }elseif (!empty($c12)) { displayRelationTable($c12, $post->ID, $post->post_title);
  }elseif (!empty($c13)) { displayRelationTable($c13, $post->ID, $post->post_title);
  }
  ?>
  <?php endwhile; ?> </div> <?php endif; ?>

<?php } ?>

   </div>
  </div>
</div>
</div>
<?php
//do_action( 'storefront_sidebar' );
while ( have_posts() ) : the_post();
print_r($post);
endwhile;


get_footer();
 ?>
