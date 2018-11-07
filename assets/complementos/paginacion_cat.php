<?php
error_reporting(E_ALL); 
ini_set("display_errors", 1); 
define('WP_USE_THEMES', false);
require('../../../../../wp-load.php');

$total_entradas    = $_REQUEST['cat_total'];


$cantidad_actual_e = $_REQUEST['cant_en'];

//echo $cantidad_actual_e;


if ($cantidad_actual_e == 0) {
	$entrass= 9;
	$ca_nt= '';
}else if ($cantidad_actual_e == 1) {
  $entrass= 9;
  $ca_nt= '';
}else if ($cantidad_actual_e >= 8) {
	$entrass=9;
	$ca_nt=$cantidad_actual_e;
}else if ($cantidad_actual_e =='') {
  $entrass= '';
  $ca_nt=$cantidad_actual_e;
}

 $paginacion = array( 
	          'posts_per_page' => $entrass,
	          'post_type' => 'product', 
	          'offset'    => $ca_nt,
	         );

foreach (get_posts($paginacion) as $postt) {
	
	$contador_entradas = count($postt->ID);		
		

$id_producto         = get_post_meta($postt->ID, 'id_producto', true);
$rosa_mas_img1       = get_post_meta($postt->ID, 'rosa_mas_img1', true);
$rosa_mas_img2       = get_post_meta($postt->ID, 'rosa_mas_img2', true);
$rosa_mas_img3       = get_post_meta($postt->ID, 'rosa_mas_img3', true);

$amarillo_mas_img1   = get_post_meta($postt->ID, 'amarillo_mas_img1', true);
$amarillo_mas_img2   = get_post_meta($postt->ID, 'amarillo_mas_img2', true);
$amarillo_mas_img3   = get_post_meta($postt->ID, 'amarillo_mas_img3', true);

$verde_mas_img1      = get_post_meta($postt->ID, 'verde_mas_img1', true);
$verde_mas_img2      = get_post_meta($postt->ID, 'verde_mas_img2', true);
$verde_mas_img3      = get_post_meta($post->ID, 'verde_mas_img3', true);

$naranja_mas_img1    = get_post_meta($postt->ID, 'naranja_mas_img1', true);
$naranja_mas_img2    = get_post_meta($postt->ID, 'naranja_mas_img2', true);
$naranja_mas_img3    = get_post_meta($postt->ID, 'naranja_mas_img3', true);

$azul_mas_img1       = get_post_meta($postt->ID, 'azul_mas_img1', true);
$azul_mas_img2       = get_post_meta($postt->ID, 'azul_mas_img2', true);
$azul_mas_img3       = get_post_meta($post->ID, 'azul_mas_img3', true);

$morado_mas_img1     = get_post_meta($postt->ID, 'morado_mas_img1', true);
$morado_mas_img2     = get_post_meta($postt->ID, 'morado_mas_img2', true);
$morado_mas_img3     = get_post_meta($postt->ID, 'morado_mas_img3', true);

$rojo_mas_img1       = get_post_meta($postt->ID, 'rojo_mas_img1', true);
$rojo_mas_img2       = get_post_meta($postt->ID, 'rojo_mas_img2', true);
$rojo_mas_img3       = get_post_meta($postt->ID, 'rojo_mas_img3', true);

$negro_mas_img1      = get_post_meta($postt->ID, 'negro_mas_img1', true);
$negro_mas_img2      = get_post_meta($postt->ID, 'negro_mas_img2', true);
$negro_mas_img3      = get_post_meta($postt->ID, 'negro_mas_img3', true);

$blanco_mas_img1     = get_post_meta($postt->ID, 'blanco_mas_img1', true);
$blanco_mas_img2     = get_post_meta($postt->ID, 'blanco_mas_img2', true);
$blanco_mas_img3     = get_post_meta($postt->ID, 'blanco_mas_img3', true);

$byn_mas_img1        = get_post_meta($postt->ID, 'byn_mas_img1', true);
$byn_mas_img2        = get_post_meta($postt->ID, 'byn_mas_img2', true);
$byn_mas_img3        = get_post_meta($postt->ID, 'byn_mas_img3', true);

?>
		<div class="col-md-3 white product">
			<a href="<?php echo get_permalink($postt->ID); ?>">
				<div class="este-4 product_img " style="overflow: hidden; height: 190px;">
					<?php 
$c1=get_post_meta($postt->ID, 'rosa_mas_img1', true);
$c2=get_post_meta($postt->ID, 'verde_mas_img1', true);
$c3=get_post_meta($postt->ID, 'azul_mas_img1', true);
$c4=get_post_meta($postt->ID, 'rojo_mas_img1', true);
$c5=get_post_meta($postt->ID, 'blanco_mas_img1', true);
$c6=get_post_meta($postt->ID, 'amarillo_mas_img1', true);
$c7=get_post_meta($postt->ID, 'naranja_mas_img1', true);
$c8=get_post_meta($postt->ID, 'morado_mas_img1', true);
$c9=get_post_meta($postt->ID, 'negro_mas_img1', true);
$c10=get_post_meta($postt->ID, 'byn_mas_img1', true);


if (!empty($c1)) {

  $url_color='rosa';
  $img_principalll=get_post_meta($postt->ID, 'rosa_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c2)) {
  $url_color='verde';
  $img_principalll=get_post_meta($postt->ID, 'verde_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c3)) {
  $url_color='azul';
  $img_principalll=get_post_meta($postt->ID, 'azul_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c4)) {
  $url_color='rojo';
  $img_principalll=get_post_meta($postt->ID, 'rojo_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c5)) {
  $url_color='blanco';
  $img_principalll=get_post_meta($postt->ID, 'blanco_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c6)){
  $url_color='amarillo';
  $img_principalll=get_post_meta($postt->ID, 'amarillo_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c7)) {
  $url_color='naranja';
  $img_principalll=get_post_meta($postt->ID, 'naranja_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c8)) {
  $url_color='morado';
  $img_principalll=get_post_meta($postt->ID, 'morado_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c9)) {
 $url_color='negro';
  $img_principalll=get_post_meta($postt->ID, 'negro_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c10)) {
	$url_color='nada';
  $img_principalll=get_post_meta($postt->ID, 'byn_mas_img1', true);
  echo' 
<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}






 ?>
				</div>
				<div class="product_info">
					<div class="clave"><?php echo $id_producto; ?></div>
					<p><?php echo $postt->post_title;?></p>
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
    echo$rosa_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_rosa.'" data-image-color="'.$img_rosa.'"><span class="colour-'.$color_rosa.'"></span></a>';
}
if ((empty($amarillo_mas_img1))&&(empty($amarillo_mas_img2))&&(empty($amarillo_mas_img3))) {
	$color_amarillo = ' ';
	$img_amarillo = ' ';
}else{
    $color_amarillo ='amarillo';
    $img_amarillo = $amarillo_mas_img1;
    echo$amarillo_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_amarillo.'" data-image-color="'.$img_amarillo.'"><span class="colour-'.$color_amarillo.'"></span></a>';
}
if ((empty($verde_mas_img1))&&(empty($verde_mas_img2))&&(empty($verde_mas_img3))) {
	  $color_verde = ' ';
	  $img_verde = ' ';
}else{
    $color_verde ='verde';
    $img_verde = $verde_mas_img1;
     echo$verde_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_verde.'" data-image-color="'.$img_verde.'"><span class="colour-'.$color_verde.'"></span></a>';
}
if ((empty($naranja_mas_img1))&&(empty($naranja_mas_img2))&&(empty($naranja_mas_img3))) {
	$color_naranja =' ';
	$img_naranja = ' ';
}else{
    $color_naranja ='naranja';
    $img_naranja = $naranja_mas_img1;
    echo$naranja_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_naranja.'" data-image-color="'.$img_naranja.'"><span class="colour-'.$color_naranja.'"></span></a>';
}
if ((empty($azul_mas_img1))&&(empty($azul_mas_img2))&&(empty($azul_mas_img3))) {
	 $color_azul =' ';
	 $img_azul = ' ';
}else{
    $color_azul ='azul';
    $img_azul = $azul_mas_img1;
    echo$azul_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_azul.'" data-image-color="'.$img_azul.'"><span class="colour-'.$color_azul.'"></span></a>';
}
if ((empty($morado_mas_img1))&&(empty($morado_mas_img2))&&(empty($morado_mas_img3))) {
	$color_morado =' ';
    $img_morado = '';
}else{
    $img_morado = $morado_mas_img1;
    $color_morado ='morado';
  echo$morado_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_morado.'" data-image-color="'.$img_morado.'"><span class="colour-'.$color_morado.'"></span></a>';
}

if ((empty($rojo_mas_img1))&&(empty($rojo_mas_img1))&&(empty($rojo_mas_img1))) {
	$color_rojo =' ';
	$img_rojo   =' ';
}else{
     $color_rojo ='rojo';
     $img_rojo = $rojo_mas_img1;
  echo$rojo_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_rojo.'" data-image-color="'.$img_rojo.'"><span class="colour-'.$color_rojo.'"></span></a>';
}
if ((empty($negro_mas_img1))&&(empty($negro_mas_img2))&&(empty($negro_mas_img3))) {
	$color_negro =' ';
	$img_negro = ' ';
}else{
	$img_negro = $negro_mas_img1;
    $color_negro ='negro';
  echo$negro_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_negro.'" data-image-color="'.$img_negro.'"><span class="colour-'.$color_negro.'"></span></a>';
}

if ((empty($blanco_mas_img1))&&(empty($blanco_mas_img2))&&(empty($blanco_mas_img3))) {
	$color_blanco=' ';
	$img_blanco = ' ';
}else{
    $color_blanco ='blanco';
    $img_blanco = $blanco_mas_img1;
  echo$blanco_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_blanco.'" data-image-color="'.$img_blanco.'"><span class="colour-'.$color_blanco.'"></span></a>';
}
if ((empty($byn_mas_img1))&&(empty($byn_mas_img2))&&(empty($byn_mas_img3))) {
	$color_byn=' ';
	$img_byn= ' ';

}else{
    $color_byn ='sc';
    $img_byn= $byn_mas_img1;
   echo$byn_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_byn.'" data-image-color="'.$img_byn.'"><span class="colour-'.$color_byn.'"></span></a>';
}

?>
</div>

				<div class="row align-items-center cotizador">
					<div class="col-3">
						<span id="color_seleccionado" class="colour-sc"></span>
					</div>
					<div class="col-4 itemquantity">
						<input class="form-control form-text quantity_item_quantity" maxlength="4" name="item[quantity]" size="5" type="number" value="1">
					</div>
<div class="col-5">
<a id="<?php echo$postt->ID; ?>"  class="add-to-cart-link" href="?add-to-cart=<?php echo $postt->ID; ?>&attribute_color=<?php echo$url_color; ?>" data-quantity="">
<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/btn_cotizar_small-bf5db9b106da7aa051fb4871981235fd5a9b1a7dd2f49d70a90bfe6f806aaa46.png"/>
						</a>
					</div>
				</div>
			</div>
		</div>

<?php 
}
?>