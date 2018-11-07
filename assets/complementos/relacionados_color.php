<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
define('WP_USE_THEMES', false);
require('../../../../../wp-load.php');

function displayRelationTable($color = 10, $id, $title){
  switch($color){
    case 68: $img_principalll = get_post_meta($id, 'rosa_mas_img1', true); break;
    case 12: $img_principalll = get_post_meta($id, 'verde_mas_img1', true); break;
    case 13: $img_principalll = get_post_meta($id, 'azul_mas_img1', true); break;
    case 14: $img_principalll = get_post_meta($id, 'rojo_mas_img1', true); break;
    case 15: $img_principalll = get_post_meta($id, 'blanco_mas_img1', true); break;
    case 16: $img_principalll = get_post_meta($id, 'amarillo_mas_img1', true); break;
    case 17: $img_principalll = get_post_meta($id, 'naranja_mas_img1', true); break;
    case 18: $img_principalll = get_post_meta($id, 'morado_mas_img1', true); break;
    case 19: $img_principalll = get_post_meta($id, 'negro_mas_img1', true); break;
    case 20: $img_principalll = get_post_meta($id, 'byn_mas_img1', true); break;
    case 66: $img_principalll = get_post_meta($id, 'cafe_mas_img1', true); break;
  }
  if($img_principalll == null || $img_principalll == ""){ return; }
  $id_url=get_permalink($id);
  $titulo_re= $title;
  $este_id=get_post_meta($id, '_sku', true);

echo $table = <<<EOF

<div class="col-md-3">
  <div class="contenidos">
    <a href="{$id_url}">
      <figure style="width: 160px;height: 160px;display: table-cell;vertical-align:middle;">
        <img style="vertical-align:middle;" class="img-fluid" src="{$img_principalll}" alt="{$titulo_re}"/>
      </figure>
      <div class="field-items">
        <div class="field-item even">{$este_id}</div>
      </div>
    </a>
  <h2 class="field field-name-title-field field-type-text field-label-hidden">
    <a href="{$id_url}">{$titulo_re}</a>
  </h2>
  </div>
</div>

EOF;

}


$id_color   = $_REQUEST['mi_id_col'];
$sluggg     = $_REQUEST['el_eslug'];
$otro_id    = $_REQUEST['el_id_rel'];
$id_mi_fil  = $_REQUEST['mi_id_fil'];


$produc_relacion_1      = get_post_meta($otro_id, 'produc_relacion1', true);
$produc_relacion_2      = get_post_meta($otro_id, 'produc_relacion2', true);
$produc_relacion_3      = get_post_meta($otro_id, 'produc_relacion3', true);
$produc_relacion_4      = get_post_meta($otro_id, 'produc_relacion4', true);
$produc_relacion_5      = get_post_meta($otro_id, 'produc_relacion5', true);
$produc_relacion_6      = get_post_meta($otro_id, 'produc_relacion6', true);
$produc_relacion_7      = get_post_meta($otro_id, 'produc_relacion7', true);
$produc_relacion_8      = get_post_meta($otro_id, 'produc_relacion8', true);

if (empty($produc_relacion_1)) {$r1='null';}else{$r1=$produc_relacion_1;}
if (empty($produc_relacion_2)) {$r2='null';}else{$r2=$produc_relacion_2;}
if (empty($produc_relacion_3)) {$r3='null';}else{$r3=$produc_relacion_3;}
if (empty($produc_relacion_4)) {$r4='null';}else{$r4=$produc_relacion_4;}
if (empty($produc_relacion_5)) {$r5='null';}else{$r5=$produc_relacion_5;}
if (empty($produc_relacion_6)) {$r6='null';}else{$r6=$produc_relacion_6;}
if (empty($produc_relacion_7)) {$r7='null';}else{$r7=$produc_relacion_7;}
if (empty($produc_relacion_8)) {$r8='null';}else{$r8=$produc_relacion_8;}

global $wpdb;

$rt= $wpdb->get_results("SELECT * FROM `wp_xpr46vq995_postmeta` where `meta_key` = '_sku' and (`meta_value`='$r1' or `meta_value`='$r2'  or `meta_value`='$r3' or `meta_value`='$r4' or `meta_value`='$r5'or `meta_value`='$r6'or `meta_value`='$r7'or `meta_value`='$r8')");

$num=1;
foreach ($rt as $value) {
$cotar[]=$value->post_id;
}
$mangos=count($cotar);
switch ($mangos) {

    case 0:
        $totale= array($cotar[0]);
        break;
    case 1:
        $totale= array($cotar[0],$cotar[1]);
        break;
    case 2:
        $totale= array($cotar[0],$cotar[1],$cotar[2]);
        break;
    case 3:
        $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3]);
        break;
    case 4:
         $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3],$cotar[4]);
        break;
    case 5:
        $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3],$cotar[4],$cotar[5]);
        break;
    case 6:
        $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3],$cotar[4],$cotar[5],$cotar[6]);
        break;
    case 7:
        $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3],$cotar[4],$cotar[5],$cotar[6],$cotar[7]);
        break;
    case 8:
        $totale= array($cotar[0],$cotar[1],$cotar[2],$cotar[3],$cotar[4],$cotar[5],$cotar[6],$cotar[7],$cotar[8]);
        break;

}

  $viajes = array(
  'posts_per_page'   => 8,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'post__in',
  //'order'            => 'DESC',
  'post__in'          => $totale,
  'exclude'          => $otro_id,
  'meta_key'         => '',
  'meta_value'       => '',
  'post_type'        => 'product',
  'post_mime_type'   => '',
  'post_parent'      => '',
  'author'     => '',
  'author_name'    => '',
  'post_status'      => 'publish',
  'suppress_filters' => true
);

foreach (get_posts($viajes) as $viaje) {

  displayRelationTable($id_color, $viaje->ID, $viaje->post_title);

}
