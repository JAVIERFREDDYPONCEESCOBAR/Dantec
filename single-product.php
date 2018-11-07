<?php
include 'header.php';

function displayRelationTable($color = 10, $id, $title){
  switch($color){
    case 68: $img_principalll = get_post_meta($id, 'rosa_mas_img1',     true); break;
    case 12: $img_principalll = get_post_meta($id, 'verde_mas_img1',    true); break;
    case 13: $img_principalll = get_post_meta($id, 'azul_mas_img1',     true); break;
    case 14: $img_principalll = get_post_meta($id, 'rojo_mas_img1',     true); break;
    case 15: $img_principalll = get_post_meta($id, 'blanco_mas_img1',   true); break;
    case 16: $img_principalll = get_post_meta($id, 'amarillo_mas_img1', true); break;
    case 17: $img_principalll = get_post_meta($id, 'naranja_mas_img1',  true); break;
    case 18: $img_principalll = get_post_meta($id, 'morado_mas_img1',   true); break;
    case 19: $img_principalll = get_post_meta($id, 'negro_mas_img1',    true); break;
    case 20: $img_principalll = get_post_meta($id, 'byn_mas_img1',      true); break;
    case 21: $img_principalll = get_post_meta($id, 'cafe_mas_img1',     true); break;
    case 22: $img_principalll = get_post_meta($id, 'limon_mas_img1',    true); break;
    case 23: $img_principalll = get_post_meta($id, 'gris_mas_img1',     true); break;


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


?>


<div class="container-fluid nosidepadding maincontent">
<div class='container'>
  <br>
  <div class="row">
    <div class="col-md-11 offset-md-1">

<?php wc_print_notices(); ?>

<style type="text/css" media="all">

@import url("/wp-content/themes/storefront/assets/int_tema/css/system.base.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/system.menus.css?ver=1.1");
@import url("/wp-content/themes/storefront/assets/int_tema/css/system.messages.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/system.theme.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/jquery.iu.theme.min.css");
</style>


<style type="text/css" media="all">

@import url("/wp-content/themes/storefront/assets/int_tema/css/alpha-reset.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/alpha-alpha.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/formalize.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/omega-text.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/omega-branding.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/omega-menu.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/omega-forms.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/global.css?v=1.0");
</style>



<style type="text/css" media="all">
@import url("/wp-content/themes/storefront/assets/int_tema/css/dantec-alpha-default.css?ver=122");
@import url("/wp-content/themes/storefront/assets/int_tema/css/dantec-alpha-default-normal.css");
@import url("/wp-content/themes/storefront/assets/int_tema/css/alpha-default-normal-24.css?aw");
@import url("/wp-content/themes/storefront/assets/int_tema/css/formalize.css");
</style>
</head>


<body class="html not-front not-logged-in page-node page-node- page-node-91 node-type-product-display i18n-es context-marcas-y-productos">

      <section id="section-content" class="section section-content">

<div class="row">
  <div class="col-md-12">

    <div class="product-nav">
        <ul class="marcas">
<?php
$estado = get_queried_object()->name;
$estado_slug = get_queried_object()->slug;
$IDs= get_queried_object()->term_id;
$thumbnail_id = get_woocommerce_term_meta( $IDs, 'thumbnail_id', true );
$imagen_estado = wp_get_attachment_url( $thumbnail_id );

  $menuss = array(
         'taxonomy'     => 'product_cat',
         'orderby'      => array(),
         'show_count'   => 0,
         'pad_counts'   => 0,
         'hierarchical' => 1,
         'title_li'     => '',
         'hide_empty'   => 0
  );
 $all_categories_m = get_categories( $menuss );
 foreach ($all_categories_m as $cat_menu) {

    if($cat_menu->category_parent == 0) {

    ?>
          <li class="parent">
<a date-id-attribute="<?php echo $cat_menu->term_id; ?>" class="index" href="<?php echo get_term_link($cat_menu->slug, 'product_cat'); ?>"><?php echo $cat_menu->name; ?></a>
          </li>
<?php


}


}

?>
           <li class="parent">
<b><a class="index red" href="/outlet">Outlet</a></b>
          </li>
        </ul>



      </div>

  </div>
</div>


<div class="row">
  <div class="col-md-3 products-list">
      <!-- subcategories -->
      <?php

$all_categories = wp_get_post_terms( $post->ID, 'product_cat' );

$current_query_cat = $all_categories[0]->name;
$parent_query_cat = get_category_parents( get_queried_object()->name, true, ' ' );
if($current_query_cat == "Vikan" || $all_categories[0]->parent == 141 || $all_categories[0]->parent == 142 || $all_categories[0]->parent == 164 || $all_categories[0]->parent == 169 || $all_categories[0]->parent == 162){
  $category_id = 141;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;

?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="Vikan" href='/marcas#vikan'>Vikan</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Hygiene System" href='/categoria-producto/vikan/vikan-hygiene-system/'>Vikan Hygiene System</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cepillos de mano" href='/categoria-producto/vikan/vikan-hygiene-system/cepillos-de-mano/'>Cepillos de mano</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cepillos para equipos" href='/categoria-producto/vikan/vikan-hygiene-system/cepillos-para-equipos/'>Cepillos para equipos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Escobillones" href='/categoria-producto/vikan/vikan-hygiene-system/escobillones-vikan-hygiene-system/'>Escobillones</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Escobas y cepillos para pisos o paredes" href='/categoria-producto/vikan/vikan-hygiene-system/escobas-y-cepillos-para-pisos-o-paredes/'>Escobas y cepillos para pisos o paredes</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Escobas y cepillos UST" href='/categoria-producto/vikan/vikan-hygiene-system/escobas-y-cepillos-ust/'>Escobas y cepillos UST</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Jalador para condensado" href='/categoria-producto/vikan/vikan-hygiene-system/jalador-para-condensado/'>Jalador para condensado</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Jaladores y repuestos de casete" href='/categoria-producto/vikan/vikan-hygiene-system/jaladores-y-repuestos-de-casete/'>Jaladores y repuestos de casete</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Mangos" href='/categoria-producto/vikan/vikan-hygiene-system/mangos/'>Mangos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Espátulas y raspadores" href='/categoria-producto/vikan/vikan-hygiene-system/espatulas-y-raspadores/'>Espátulas y raspadores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cubetas y recogedores" href='/categoria-producto/vikan/vikan-hygiene-system/cubetas-y-recogedores/'>Cubetas y recogedores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Portautensilios" href='/categoria-producto/vikan/vikan-hygiene-system/portautensilios/'>Portautensilios</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Portafibras y fibras" href='/categoria-producto/vikan/vikan-hygiene-system/portafibras-y-fibras/'>Portafibras y fibras</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cucharas" href='/categoria-producto/vikan/vikan-hygiene-system/cucharas/'>Cucharas</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Palas" href='/categoria-producto/vikan/vikan-hygiene-system/palas/'>Palas</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Agitadores" href='/categoria-producto/vikan/vikan-hygiene-system/agitadores/'>Agitadores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Utensilios detectables" href='/categoria-producto/vikan/vikan-hygiene-system/utensilios-detectables/'>Utensilios detectables</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Espumadoras" href='/categoria-producto/vikan/vikan-hygiene-system/espumadoras-vikan-hygiene-system/'>Espumadoras</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Pistolas de agua y mangueras" href='/categoria-producto/vikan/vikan-hygiene-system/pistolas-de-agua-y-mangueras/'>Pistolas de agua y mangueras</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Coples" href='/categoria-producto/vikan/vikan-hygiene-system/coples/'>Coples</a>
            </li>
          </ul>
        </li>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Línea Microfibra" href='/categoria-producto/vikan/vikan-linea-microfibra/'>Vikan Línea Microfibra</a>
            <ul class='px-0'>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Mops y trapos" href='/categoria-producto/vikan/vikan-linea-microfibra/mops-y-trapos/'>Mops y trapos</a>
              </li>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Portamops" href='/categoria-producto/vikan/vikan-linea-microfibra/portamops/'>Portamops</a>
              </li>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Mangos con sistema clic y accesorios" href='/categoria-producto/vikan/vikan-linea-microfibra/mangos-con-sistema-clic-y-accesorios/'>Mangos con sistema clic y accesorios</a>
              </li>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Carritos de limpieza" href='/categoria-producto/vikan/vikan-linea-microfibra/carritos-de-limpieza/'>Carritos de limpieza</a>
              </li>
            </ul>
        </li>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Línea Transport" href='/categoria-producto/vikan/vikan-linea-transport/'>Vikan Línea Transport</a>
            <ul class='px-0'>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Escobas y cepillos" href='/categoria-producto/vikan/vikan-linea-transport/escobas-y-cepillos/'>Escobas y cepillos</a>
              </li>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Mangos Transport" href='/categoria-producto/vikan/vikan-linea-transport/mangos-vikan-linea-transport/'>Mangos</a>
              </li>
              <li class='childer'>
                <a class='grupo' data-attribute-css="Varios" href='/categoria-producto/vikan/vikan-linea-transport/varios/'>Varios</a>
              </li>
            </ul>
        </li>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Kits" href='/categoria-producto/vikan/vikan-kits/'>Vikan Kits</a>
        </li>
      </ul>
    </li>
  </ul>

<?php
}else if($current_query_cat == "Robert Scott" || $all_categories[0]->parent == 173 || $all_categories[0]->parent == 174){

  $category_id = 173;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;
 $terms4 = get_the_terms( $post->ID, 'product_cat' );

?>
  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>
  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="Robert Scott" href='/categoria-producto/robert-scott/'>Robert Scott</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="Robert Scott – Trapeadores" href='/categoria-producto/robert-scott/robert-scott-trapeadores'>Robert Scott – Trapeadores <?php

          ?></a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='child' data-attribute-css="Trapeadores" href='/categoria-producto/robert-scott/robert-scott-trapeadores/trapeadores/' style=" <?php


if ($terms4[1]->name=='Trapeadores') {
  echo 'color:black; font-weight: bold;';
}

  ?>">Trapeadores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Mangos RS" href='/categoria-producto/robert-scott/robert-scott-trapeadores/robert-scott-trapeadores-mangos/' style="<?php if ($terms4[1]->name=='Mangos') {
  echo 'color:black; font-weight: bold;';
} ?> ">Mangos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cubetas" href='/categoria-producto/robert-scott/robert-scott-trapeadores/cubetas/' style="<?php if ($terms4[1]->name=='Cubetas') {
  echo 'color:black; font-weight: bold;';
} ?>">Cubetas</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

<?php
}else if($current_query_cat == "Detectamet" || $all_categories[0]->parent == 178 || $all_categories[0]->parent == 179){

  $category_id = 178;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;
?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
    <a class='parent' data-attribute-css="Detectamet" href='/categoria-producto/detectamet/detectamet-productos-detectables/'>Detectamet</a>
    <ul class='px-0'>
      <li class=''>
        <a class='child' data-attribute-css="Detectamet – Productos detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/'>Detectamet – Productos detectables</a>
        <ul class='px-0'>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Bolígrafos" href='/categoria-producto/detectamet/detectamet-productos-detectables/boligrafos/'>Bolígrafos</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Artículos de oficina detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/articulos-de-oficina-detectables/'>Artículos de oficina detectables</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Utensilios y accesorios para proceso detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/utensilios-y-accesorios-para-proceso-detectables/'>Utensilios y accesorios para proceso detectables</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Identificadores detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/identificadores-detectables/'>Identificadores detectables</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Artículos de protección personal detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/articulos-de-proteccion-personal-detectables/'>Artículos de protección personal detectables</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Cortadores de seguridad detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/cortadores-de-seguridad-detectables/'>Cortadores de seguridad detectables</a>
          </li>
          <li class='childer'>
            <a class='grupo' data-attribute-css="Sujetadores y cintillos detectables" href='/categoria-producto/detectamet/detectamet-productos-detectables/sujetadores-y-cintillos-detectables/'>Sujetadores y cintillos detectables</a>
          </li>
        </ul>
      </li>
    </ul>
    </li>
  </ul>
  <br>
  <?php
  $detect_id = get_queried_object()->term_id;
  if($detect_id == "284"){
    ?>
    <div class="box-border">
      <small><b>Los bolígrafos retráctiles detectables HD están disponibles con:</b></small>
      <br><br>
      <table class="table table-sm desc">
        <tr>
          <td>- </td>
          <td><small>Tinta estándar</small></td>
        </tr>
        <tr>
          <td>- </td>
          <td><small>Tinta gel (para su uso en condiciones de frio)</small></td>
        </tr>
        <tr>
          <td>- </td>
          <td><small>Tinta cryo (para su uso en ambientes húmedos, grasosos y polvorientos)</small></td>
        </tr>
      </table>
    </div>
    <?php
  }
  ?>

<?php
}else if($current_query_cat == "CMT" || $all_categories[0]->parent == 187 || $all_categories[0]->parent == 188){

  $category_id = 187;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;

?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="CMT" href='/categoria-producto/cmt/cmt-ropa-desechable/'>CMT</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="CMT – Ropa desechable" href='/categoria-producto/cmt/cmt-ropa-desechable/'>CMT – Ropa desechable</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cofias, cubremangas y cubrezapatos" href='/categoria-producto/cmt/cmt-ropa-desechable/cofias-cubremangas-y-cubrezapatos/'>Cofias, cubremangas y cubrezapatos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Mandiles" href='/categoria-producto/cmt/cmt-ropa-desechable/mandiles/'>Mandiles</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Batas y cubrebocas" href='/categoria-producto/cmt/cmt-ropa-desechable/batas-y-cubrebocas/'>Batas y cubrebocas</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

<?php
}else if($current_query_cat == "Paxxo" || $all_categories[0]->parent == 192 || $all_categories[0]->parent == 193){

  $category_id = 192;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;

?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="Paxxo" href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/'>Paxxo</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="Paxxo – Manejo de desechos" href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/'>Paxxo – Manejo de desechos</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Longopac Stand ®" href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/longopac-stand/'>Longopac Stand ®</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Longopac ®" href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/longopac/'>Longopac ®</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

<?php
}else if($current_query_cat == "NTF Aalborg" || $all_categories[0]->parent == 196 || $all_categories[0]->parent == 197){

  $category_id = 196;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;

?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
    <a class='parent' data-attribute-css="NTF Aalborg" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/'>NTF Aalborg</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="NTF – Colgadores de acero inoxidable" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/'>NTF – Colgadores de acero inoxidable</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Colgadores" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/colgadores/'>Colgadores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Secabotas" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/secabotas-ntf-colgadores-de-acero-inoxidable/'>Secabotas</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cestos" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/cestos/'>Cestos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Varios NTF" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/varios-ntf-colgadores-de-acero-inoxidable/'>Varios NTF</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

<?php
}else if($current_query_cat == "Blücher" || $all_categories[0]->parent == 266 || $all_categories[0]->parent == 285){

  $category_id = 266;
  $thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
  $image = wp_get_attachment_url( $thumbnail_id );
  $category_desc = $all_categories[0]->category_description;

?>

  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>

  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="Blücher" href='/marcas#vikan'>Blücher</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="Blücher – Drenajes de acero inoxidable" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/'>Blücher – Drenajes de acero inoxidable</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="HygienicPro®" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/hygienicpro/'>HygienicPro®</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Coladeras industriales" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-industriales/'>Coladeras industriales</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Coladeras Kitchen" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-kitchen/'>Coladeras Kitchen</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Canaletas industriales" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/canaletas-industriales/'>Canaletas industriales</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Tapas para registros" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/tapas-para-registros/'>Tapas para registros</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Coladeras semi-industriales" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-semi-industriales/'>Coladeras semi-industriales</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Tubería EuroPipe" href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/tuberia-europipe/'>Tubería Europipe</a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
  </ul>

  <br>
  <div class="box-border">
    <small><b>Toda la gama de drenajes Blúcher esta también disponible en acero inoxidable AISI 316L, excepto donde se indique lo contrario.</b></small>
  </div>
  <br>
  <div class="box-border">
    <small><b>Todas las coladeras y canaletas Blúcher se suministran con:</b></small>
    <br><br>
    <table class="table table-sm desc">
      <tr>
        <td>- </td>
        <td><small>Trampa de agua para bloqueo de olores</small></td>
      </tr>
      <tr>
        <td>- </td>
        <td><small>Canasta para retención de sólidos</small></td>
      </tr>
    </table>
  </div>

<?php
}
?>
  <style type="text/css">
    [data-attribute-css="<?php echo $current_query_cat; ?>"]{
      color: #0088cc;
      text-decoration: none;
      font-weight: bold;
    }
  </style>
</div>

 <div class="col-md-9 ">


<div class="grid-18 region region-content" id="region-content">
  <div class="region-inner region-content-inner">
    <a id="main-content"></a>
                        <div class="block block-system block-main block-system-main odd block-without-title" id="block-system-main">
  <div class="block-inner clearfix">

    <div class="content clearfix">

    <div id="ds_leftnav" class="hidden-sm-down"></div>
    <div id="ds_maincontent">


       <div class="row">
         <div class="col-md-9">

            <div class="commerce-product-extra-field commerce-product-extra-field-sku node-91-product-sku">
              <div class="commerce-product-sku">
                     <?php $id_producto  = get_post_meta($post->ID, 'id_producto', true); ?>
                      <div class="commerce-product-sku-label">Código ID:</div> <?php echo $id_producto; ?>
              </div>
            </div>

            <!--<div class="field field-name-field-clave field-type-text field-label-hidden">
              <div class="field-items">
                <div class="field-item even">   </div>
              </div>
            </div>-->

            <header>
              <h2 class="field field-name-title-field field-type-text field-label-hidden">
                <b><?php echo $id_producto; ?> </b> <?php echo $post->post_title; ?></h2>
            </header>

         </div>

          <div class="col-md-3">

            <ul class="certification-list">
          <?php
            $product_image_gallery = get_post_meta( $post->ID, '_product_image_gallery', true );
            $attachments = array_filter( explode( ',', $product_image_gallery ) );
             foreach ( $attachments as $attachment_id ) {
                $attachment = wp_get_attachment_image( $attachment_id, 'thumbnail' );
                $porciones = explode(" ", $attachment);
                preg_match('/<img.*?alt="(.*?)".*>/',$attachment,$match);
                $alt = $match[1];
                echo '<li class="holder-popover" style="display:inline-block; padding: 0 0 0 5px; margin: 0px; border: 0px;" data-toggle="tooltip" data-placement="top" title="'.$alt.'"><img class="img-responsive" '.$porciones[3].'" style="max-height: 20px;"/></li>';
              } ?>
            </ul>

          </div>

       </div>











      <div class="ds_540_20" class="clearfix">
      <div class="commerce-product-field commerce-product-field-field-images field-field-images node-91-product-field-images">

<?php


$rosa_mas_img1       = get_post_meta($post->ID, 'rosa_mas_img1', true);
$rosa_mas_img2       = get_post_meta($post->ID, 'rosa_mas_img2', true);
$rosa_mas_img3       = get_post_meta($post->ID, 'rosa_mas_img3', true);

$amarillo_mas_img1   = get_post_meta($post->ID, 'amarillo_mas_img1', true);
$amarillo_mas_img2   = get_post_meta($post->ID, 'amarillo_mas_img2', true);
$amarillo_mas_img3   = get_post_meta($post->ID, 'amarillo_mas_img3', true);

$verde_mas_img1      = get_post_meta($post->ID, 'verde_mas_img1',true);
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


if (!empty($rosa_mas_img1)) {
  $img_principal=$rosa_mas_img1;
  $img_p1=$rosa_mas_img1;
  $img_p2=$rosa_mas_img2;
  $img_p3=$rosa_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(249, 79, 142);" class="commerce-fancy-attributes-color"></div>';
  $agregar_color='attribute_color=rosa';

  $meta_q='rosa_mas_img1';
  $meta_q2='rosa_mas_img1';
}elseif (!empty($verde_mas_img1)) {
  $img_principal=$verde_mas_img1;
  $img_p1=$verde_mas_img1;
  $img_p2=$verde_mas_img2;
  $img_p3=$verde_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(0, 124, 89);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='verde_mas_img1';
   $meta_q2='verde_mas_img1';
  $agregar_color='attribute_color=verde';
}elseif (!empty($azul_mas_img1)) {
  $img_principal=$azul_mas_img1;
  $img_p1=$azul_mas_img1;
  $img_p2=$azul_mas_img2;
  $img_p3=$azul_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(0, 132, 201);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='azul_mas_img1';
   $meta_q2='azul_mas_img1';
  $agregar_color='attribute_color=azul';
}elseif (!empty($rojo_mas_img1)) {
  $img_principal=$rojo_mas_img1;
  $img_p1=$rojo_mas_img1;
  $img_p2=$rojo_mas_img2;
  $img_p3=$rojo_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(206, 17, 38);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='rojo_mas_img1';
     $meta_q2='rojo_mas_img1';
  $agregar_color='attribute_color=rojo';
}elseif (!empty($blanco_mas_img1)) {
  $img_principal=$blanco_mas_img1;
  $img_p1=$blanco_mas_img1;
  $img_p2=$blanco_mas_img2;
  $img_p3=$blanco_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(255, 255, 255);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='blanco_mas_img1';
   $meta_q2='blanco_mas_img1';

  $agregar_color='attribute_color=blanco';

}elseif (!empty($amarillo_mas_img1)) {
  $img_principal=$amarillo_mas_img1;
  $img_p1=$amarillo_mas_img1;
  $img_p2=$amarillo_mas_img2;
  $img_p3=$amarillo_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(249, 232, 20);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='amarillo_mas_img1';
  $meta_q2='amarillo_mas_img1';
  $agregar_color='attribute_color=amarillo';
}elseif (!empty($naranja_mas_img1)) {
  $img_principal=$naranja_mas_img1;
  $img_p1=$naranja_mas_img1;
  $img_p2=$naranja_mas_img2;
  $img_p3=$naranja_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(247,127,0);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='naranja_mas_img1';
  $meta_q2='naranja_mas_img1';
  $agregar_color='attribute_color=naranja';

}elseif (!empty($morado_mas_img1)) {
  $img_principal=$morado_mas_img1;
  $img_p1=$morado_mas_img1;
  $img_p2=$morado_mas_img2;
  $img_p3=$morado_mas_img3;
$color_fondo='<div id="nuevo_color" style="background-color: rgb(137,119,186);" class="commerce-fancy-attributes-color"></div>';
$meta_q='morado_mas_img1';
$meta_q2='morado_mas_img1';
$agregar_color='attribute_color=morado';
}elseif (!empty($negro_mas_img1)) {
  $img_principal=$negro_mas_img1;
  $img_p1=$negro_mas_img1;
  $img_p2=$negro_mas_img2;
  $img_p3=$negro_mas_img3;
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(0,0,0);" class="commerce-fancy-attributes-color"></div>';
  $meta_q='negro_mas_img1';
  $meta_q2='negro_mas_img1';
  $agregar_color='attribute_color=negro';

}elseif (!empty($cafe_mas_img1)){

  $meta_q='cafe_mas_img1';
  $meta_q2='cafe_mas_img1';
  $img_principal=$cafe_mas_img1;
  $img_p1=$cafe_mas_img1;
  $img_p2=$cafe_mas_img2;
  $img_p3=$cafe_mas_img3;
  $agregar_color='attribute_color=cafe';
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(103,85,67);" class="commerce-fancy-attributes-color"></div>';

}elseif (!empty($limon_mas_img1)) {

  $meta_q='limon_mas_img1';
  $meta_q2='limon_mas_img1';
  $img_principal=$limon_mas_img1;
  $img_p1=$limon_mas_img1;
  $img_p2=$limon_mas_img2;
  $img_p3=$limon_mas_img3;
  $agregar_color='attribute_color=limon';
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(152,210,25);" class="commerce-fancy-attributes-color"></div>';

}elseif (!empty($gris_mas_img1)) {

  $meta_q='gris_mas_img1';
  $meta_q2='gris_mas_img1';
  $img_principal=$gris_mas_img1;
  $img_p1=$gris_mas_img1;
  $img_p2=$gris_mas_img2;
  $img_p3=$gris_mas_img3;
  $agregar_color='attribute_color=gris';
  $color_fondo='<div id="nuevo_color" style="background-color: rgb(154,154,154);" class="commerce-fancy-attributes-color"></div>';

}elseif (!empty($byn_mas_img1)) {

  $meta_q='byn_mas_img1';
  $meta_q2='byn_mas_img1';
  $img_principal=$byn_mas_img1;
  $img_p1=$byn_mas_img1;
  $img_p2=$byn_mas_img2;
  $img_p3=$byn_mas_img3;
  $agregar_color='attribute_color=s_n';
  $color_fondo='<div id="nuevo_color" style=""></div>';

}


 ?>
        <div id="gal_contenidos" class="cloud-zoom-container">


          <a href="<?php echo$img_principal;?>" class="cloud-zoom" id="cloud-zoom" rel="zoomWidth:&#039;auto&#039;, zoomHeight:&#039;auto&#039;, position:&#039;inside&#039;, adjustX:0, adjustY:0, tint:&#039;#ffffff&#039;, tintOpacity:&#039;0.6&#039;, lensOpacity:&#039;0.6&#039;, softFocus:false, smoothMove:&#039;3&#039;, showTitle:false, titleOpacity:&#039;0.5&#039;">
            <img src="<?php echo$img_principal;?>" width="440" height="256" alt="" /></a>

          <div class="cloud-zoom-gallery-thumbs">
<?php if (empty($img_p1)) {

}else{ ?>

 <a href="<?php echo$img_p1;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img_p1;?>&#039;">
              <img src="<?php echo$img_p1;?>" width="78" height="78" alt="" /></a>

<?php } ?>

<?php if (empty($img_p2)) {
}else{ ?>
              <a href="<?php echo$img_p2;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img_p2;?>&#039;">
                <img src="<?php echo$img_p2;?>" width="78" height="78" alt="" /></a>

<?php } ?>


<?php if (empty($img_p3)) {

}else{ ?>

    <a href="<?php echo$img_p3;?>" class="cloud-zoom-gallery" rel="useZoom: &#039;cloud-zoom&#039;,smallImage: &#039;<?php echo$img_p3;?>&#039;">
   <img src="<?php echo$img_p3;?>" width="78" height="78" alt="" /></a>
<?php } ?>





              </div>



            </div>



          </div>
        </div>

    <div class="ds_140">
<?php

//imagen de ejemplo producto
if (empty($img_uso_de_producto)) {}else{


?>
 <img src="<?php echo$img_uso_de_producto;?>" width="300" height="250" alt="" />
<?php } if (empty($video_ejemplo)) {}else{?>
  <a id="video_single" name="op" value="Video" class="clas_video" data-toggle="modal" data-target="#videoPopupModal" data-target-popvid="<?php echo $video_ejemplo; ?>"></a>



<?php } ?>

    </div>

    <div class="ds_700 prod_color">
  <div class="field field-name-field-product field-type-commerce-product-reference field-label-hidden">


    <div>
      <div style="background: #f0f0f0; position: relative; ">
      <div class="attribute-widgets" style="width: 100%; height: 100px; display: table; background: #fff; padding-bottom:20px;">
      <div class="form-item form-type-radios form-item-attributes-field-colorcode" style="width: 100%; height: 100%; padding: 0 0 20px 0px;">
  <label for="edit-attributes-field-colorcode">Ver producto en otro color: </label>
 <div id="edit-attributes-field-colorcode" class="form-radios">

<?php




if ((empty($rosa_mas_img1))&&(empty($rosa_mas_img2))&&(empty($rosa_mas_img3))) {

}else{


 if (empty($tu_id)) {
    $tu_id = 68;
 }




 if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }

    $color_rosa = 68;
    $img_rosa1   = $rosa_mas_img1;
    $img_rosa2   = $rosa_mas_img2;
    $img_rosa3   = $rosa_mas_img3;
    $el_id = $post->ID;
    $meta_q='rosa_mas_img1';
    echo$rosa_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy" type="radio" id="edit-attributes-field-colorcode-'.$color_rosa.'" name="attributes[field_colorcode]" value="'.$color_rosa.'"  class="form-radio" data-image1="'.$img_rosa1.'" data-image2="'.$img_rosa2.'" data-image3="'.$img_rosa3.'" data-el_id="'.$color_rosa.'" data-fil="'.$meta_q.'" '.$elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_rosa.'">+2 rosa </label>
</div>';







}

if ((empty($verde_mas_img1))&&(empty($verde_mas_img2))&&(empty($verde_mas_img3))) {

}else{
if (empty($tu_id)) {
    $tu_id = 12;
 }
 if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_verde =12;
    $img_verde1 = $verde_mas_img1;
    $img_verde2 = $verde_mas_img2;
    $img_verde3 = $verde_mas_img3;
    //$img_rec_1 =the_post_thumbnail($post->ID, array(440,256, true));
    $el_id = $post->ID;
    $meta_q='verde_mas_img1';
     echo$verde_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy" type="radio" id="edit-attributes-field-colorcode-'.$color_verde.'" name="attributes[field_colorcode]" value="'.$color_verde.'"  class="form-radio" data-image1="'.$img_verde1.'" data-image2="'.$img_verde2.'" data-image3="'.$img_verde3.'" data-el_id="'.$color_verde.'" data-fil="'.$meta_q.'"  '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_verde.'">+2 verde </label>
</div>';




}


if ((empty($azul_mas_img1))&&(empty($azul_mas_img2))&&(empty($azul_mas_img3))) {

}else{
   if (empty($tu_id)) {
    $tu_id = 13;
 }
if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_azul =13;
    $img_azul1 = $azul_mas_img1;
    $img_azul2 = $azul_mas_img2;
    $img_azul3 = $azul_mas_img3;
    $el_id = $post->ID;
    $meta_q='azul_mas_img1';
    echo$azul_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_azul.'" name="attributes[field_colorcode]" value="'.$color_azul.'"  class="form-radio" data-image1="'.$img_azul1.'" data-image2="'.$img_azul2.'" data-image3="'.$img_azul3.'" data-el_id="'.$color_azul.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_azul.'">+3 Azul </label>
</div>';




}

if ((empty($rojo_mas_img1))&&(empty($rojo_mas_img1))&&(empty($rojo_mas_img1))) {

}else{
   if (empty($tu_id)) {
    $tu_id = 14;
 }
 if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
     $color_rojo =14;
     $img_rojo1 = $rojo_mas_img1;
     $img_rojo2 = $rojo_mas_img2;
     $img_rojo3 = $rojo_mas_img3;
     $el_id = $post->ID;
     $meta_q='rojo_mas_img1';
     echo$rojo_color='

<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_rojo.'" name="attributes[field_colorcode]" value="'.$color_rojo.'" class="form-radio" data-image1="'.$img_rojo1.'" data-image2="'.$img_rojo2.'" data-image3="'.$img_rojo3.'"  data-el_id="'.$color_rojo.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_rojo.'">+4 Rojo </label>
</div>';







}

if ((empty($blanco_mas_img1))&&(empty($blanco_mas_img2))&&(empty($blanco_mas_img3))) {

}else{
   if (empty($tu_id)) {
    $tu_id = 15;
 }
    if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_blanco =15;
    $img_blanco1 = $blanco_mas_img1;
    $img_blanco2 = $blanco_mas_img2;
    $img_blanco3 = $blanco_mas_img3;
    $el_id = $post->ID;
    $meta_q='blanco_mas_img1';
  echo$blanco_color='

<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_blanco.'" name="attributes[field_colorcode]" value="'.$color_blanco.'" class="form-radio" data-image1="'.$img_blanco1.'" data-image2="'.$img_blanco2.'" data-image3="'.$img_blanco3.'" data-el_id="'.$color_blanco.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_blanco.'">+5 Blanco </label>
</div>';


}


if ((empty($amarillo_mas_img1))&&(empty($amarillo_mas_img2))&&(empty($amarillo_mas_img3))) {

}else{
  if (empty($tu_id)) {
    $tu_id = 16;
 }
    if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_amarillo =16;
    $img_amarillo1 = $amarillo_mas_img1;
    $img_amarillo2 = $amarillo_mas_img2;
    $img_amarillo3 = $amarillo_mas_img3;
    $el_id = $post->ID;
    $meta_q='amarillo_mas_img1';
    echo$amarillo_color='<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_amarillo.'" name="attributes[field_colorcode]" value="'.$color_amarillo.'" class="form-radio" data-image1="'.$img_amarillo1.'" data-image2="'.$img_amarillo2.'" data-image3="'.$img_amarillo3.'" data-el_id="'.$color_amarillo.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_amarillo.'">+6 amarillo </label>
</div>';



}

if ((empty($naranja_mas_img1))&&(empty($naranja_mas_img2))&&(empty($naranja_mas_img3))) {

}else{
   if (empty($tu_id)) {
    $tu_id = 17;
 }
    if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_naranja =17;
    $img_naranja1 = $naranja_mas_img1;
    $img_naranja2 = $naranja_mas_img2;
    $img_naranja3 = $naranja_mas_img3;
    $el_id = $post->ID;
    $meta_q='naranja_mas_img1';
    echo$naranja_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_naranja.'" name="attributes[field_colorcode]" value="'.$color_naranja.'" class="form-radio" data-image1="'.$img_naranja1.'" data-image2="'.$img_naranja2.'" data-image3="'.$img_naranja3.'" data-el_id="'.$color_naranja.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_naranja.'">+7 naranja </label>
</div>';


}


if ((empty($morado_mas_img1))&&(empty($morado_mas_img2))&&(empty($morado_mas_img3))) {

}else{
   if (empty($tu_id)) {
    $tu_id = 18;
 }
      if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
    $color_morado =18;
    $img_morado1 = $morado_mas_img1;
    $img_morado2 = $morado_mas_img2;
    $img_morado3 = $morado_mas_img3;
    $el_id = $post->ID;
    $meta_q='morado_mas_img1';
  echo$morado_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_morado.'" name="attributes[field_colorcode]" value="'.$color_morado.'" class="form-radio"  data-image1="'.$img_morado1.'" data-image2="'.$img_morado2.'" data-image3="'.$img_morado3.'" data-el_id="'.$color_morado.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_morado.'">+8 morado </label>
</div>';


}


if ((empty($negro_mas_img1))&&(empty($negro_mas_img2))&&(empty($negro_mas_img3))) {

}else{

  if (empty($tu_id)) {
    $tu_id = 19;
 }
  if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }

  $img_negro1 = $negro_mas_img1;
  $img_negro2 = $negro_mas_img2;
  $img_negro3 = $negro_mas_img3;
  $el_id = $post->ID;
  $color_negro =19;
  $meta_q='negro_mas_img1';
  echo$negro_color='

 <div class="form-item form-type-radio form-item-attributes-field-colorcode">
 <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$color_negro.'" name="attributes[field_colorcode]" value="'.$color_negro.'" class="form-radio" data-image1="'.$img_negro1.'" data-image2="'.$img_negro2.'" data-image3="'.$img_negro3.'" data-el_id="'.$color_negro.'" data-fil="'.$meta_q.'" '. $elvalor.' />
 <label class="option" for="edit-attributes-field-colorcode-'.$color_negro.'">+9 Negro </label>
 </div>';


}

if ((empty($byn_mas_img1))&&(empty($byn_mas_img2))&&(empty($byn_mas_img3))) {

}else{

  if (empty($tu_id)) {
   $tu_id = 20;
 }
  if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
   $meta_q='byn_mas_img1';
  $img_byn_mas1 = $byn_mas_img1;
  $img_byn_mas2 = $byn_mas_img2;
  $img_byn_mas3 = $byn_mas_img3;
  $el_id = $post->ID;
  $byn_mas_img =20;

  echo$byn_color='
<div class="form-item form-type-radio form-item-attributes-field-colorcode">
<div style="background: #fff;width: 100%;height: 100%;"></div>
</div>';

}




if ((empty($cafe_mas_img1))&&(empty($cafe_mas_img2))&&(empty($cafe_mas_img3))) {
//echo "Si-freddy-1";
}else{
//echo "Si-freddy-2";
  if (empty($tu_id)) {
   $tu_id = 66;
 }
  if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
   $meta_q='cafe_mas_img1';
  $img_cafe_mas1 = $cafe_mas_img1;
  $img_cafe_mas2 = $cafe_mas_img2;
  $img_cafe_mas3 = $cafe_mas_img3;
  $el_id = $post->ID;
  $cafe_mas_img =66;

  echo'
  <div class="form-item form-type-radio form-item-attributes-field-colorcode">
  <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$cafe_mas_img.'" name="attributes[field_colorcode]" value="'.$cafe_mas_img.'" class="form-radio" data-image1="'.$img_cafe_mas1.'" data-image2="'.$img_cafe_mas2.'" data-image3="'.$img_cafe_mas3.'" data-el_id="'.$cafe_mas_img.'" data-fil="'.$meta_q.'" '. $elvalor.' />
  <label class="option" for="edit-attributes-field-colorcode-'.$cafe_mas_img.'">+66 Cafe </label>
  </div>';
}






if ((empty($limon_mas_img1))&&(empty($limon_mas_img2))&&(empty($limon_mas_img3))) {
//echo "Si-freddy-1";
}else{
//echo "Si-freddy-2";
  if (empty($tu_id)) {
   $tu_id = 77;
 }
  if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
   $meta_q='limon_mas_img1';
  $img_limon_mas1 = $limon_mas_img1;
  $img_limon_mas2 = $limon_mas_img2;
  $img_limon_mas3 = $limon_mas_img3;
  $el_id = $post->ID;
  $limon_mas_img =77;

  echo'
  <div class="form-item form-type-radio form-item-attributes-field-colorcode">
  <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$limon_mas_img.'" name="attributes[field_colorcode]" value="'.$limon_mas_img.'" class="form-radio" data-image1="'.$img_limon_mas1.'" data-image2="'.$img_limon_mas2.'" data-image3="'.$img_limon_mas3.'" data-el_id="'.$limon_mas_img.'" data-fil="'.$meta_q.'" '. $elvalor.' />
  <label class="option" for="edit-attributes-field-colorcode-'.$limon_mas_img.'">+66 Cafe </label>
  </div>';
}





if ((empty($gris_mas_img1))&&(empty($gris_mas_img2))&&(empty($gris_mas_img3))) {
//echo "Si-freddy-1";
}else{
//echo "Si-freddy-2";
  if (empty($tu_id)) {
   $tu_id = 88;
 }
  if (empty($selctche)) {
    $selctche = 'checked="checked"';
    $elvalor='checked="checked"';
 }else{
    $elvalor='';
 }
   $meta_q='limon_mas_img1';
  $img_gris_mas1 = $gris_mas_img1;
  $img_gris_mas2 = $gris_mas_img2;
  $img_gris_mas3 = $gris_mas_img3;
  $el_id = $post->ID;
  $gris_mas_img =88;

  echo'
  <div class="form-item form-type-radio form-item-attributes-field-colorcode">
  <input class="freddy"  type="radio" id="edit-attributes-field-colorcode-'.$gris_mas_img.'" name="attributes[field_colorcode]" value="'.$gris_mas_img.'" class="form-radio" data-image1="'.$img_gris_mas1.'" data-image2="'.$img_gris_mas2.'" data-image3="'.$img_gris_mas3.'" data-el_id="'.$gris_mas_img.'" data-fil="'.$meta_q.'" '. $elvalor.' />
  <label class="option" for="edit-attributes-field-colorcode-'.$gris_mas_img.'">+66 Cafe </label>
  </div>';
}

?>
</div>
</div>
</div>

<input type="hidden" name="product_id" value="201" />
<input type="hidden" name="form_build_id" value="form-nRtRaXU5HXHHKKzMPgPieCXpeD_a7JTgR4nQISkTBVE" />
<input type="hidden" name="form_id" value="commerce_cart_add_to_cart_form_203_201_202" />
<div id="edit-line-item-fields" class="form-wrapper">

</div>
<div class="new_cantidad">
<label for="edit-quantity">Cantidad </label>
 <input type="number" id="edit-quantity" name="quantity"   min="1" value="1" size="5" maxlength="128" class="ajust form-text" />



</div>
<a id="direccion_carrito" data-url_1="?add-to-cart=<?php echo$post->ID;?>" class="add-to-cart-link" href="?add-to-cart=<?php echo$post->ID;?>&<?php echo$agregar_color; ?>" data-quantity="">
  <input style="z-index: 1;" type="submit" id="edit-submit" name="op" value="Agregar a la cesta" class="form-submit" /></a>

  <div class="new_print">
      <a target="_blank" href="/printing/?id=<?php echo $post->ID; ?>">
      <img src="/wp-content/themes/storefront/assets/int_tema/img/btn_imprimir.png" border="0" />
    </a>
    </div>

  <div class="color_select">
  <div class="field field-name-field-color field-type-text field-label-above">
  <label>Color:&nbsp;</label>
<div class="field-items">
  <div class="field-item even">

   <?php echo $color_fondo; ?>

  </div>
</div>
  </div>
  </div>



</div>


</div>




</div>


<?php

$img_uso_product     = get_post_meta($post->ID, 'img_uso_product', true);
$dimenciones         = get_post_meta($post->ID, 'dimenciones', true);
$cerdas              = get_post_meta($post->ID, 'cerdas', true);
$temperatura         = get_post_meta($post->ID, 'temperatura', true);
$material            = get_post_meta($post->ID, 'material', true);
$mi_url_video        = get_post_meta($post->ID, 'mi_url_video', true);
$descripcion         = get_post_meta($post->ID, ' wp-excerpt-wrap', true);

?>
<div class="prod_desc">
<div class="ds_540_20">
<div class="field field-name-body field-type-text-with-summary field-label-above">
<div class="field-label">Descripción:&nbsp;</div>
<div class="field-items">
<div class="field-item even"><?php

if(empty($post->post_content)){
  echo apply_filters( 'woocommerce_short_description', $post->post_excerpt );
}else{
  echo apply_filters( 'woocommerce_short_description', $post->post_content );
}


?>



</div>
</div>
</div>
<?php if (!empty($dimenciones)) {?>
<div class="field field-name-field-dimensiones-product- field-type-text field-label-above">
<div class="field-label">Dimensiones:&nbsp;</div>
<div class="field-items">
<div class="field-item even"><?php echo apply_filters('the_content',$dimenciones);?></div>
</div>
</div>
<?php  } ?>
<?php if (!empty($cerdas)) {?>
<div class="field field-name-field-dimensiones-cerdas- field-type-text field-label-above">
<div class="field-label">Cerdas:&nbsp;</div>
<div class="field-items">
<div class="field-item even"><?php echo apply_filters('the_content',$cerdas);?></div>
</div>
</div>
<?php  } ?>

<?php if (!empty($temperatura)) {?>
<div class="field field-name-field-max-temperatura field-type-text field-label-above">
<div class="field-label">Temp. Max:&nbsp;</div>
<div class="field-items">
<div class="field-item even"><?php echo apply_filters('the_content',$temperatura);?></div></div></div>
<?php  } ?>

<?php if (!empty($material)) {?>
<div class="field field-name-field-material field-type-text field-label-above">
<div class="field-label">Material:&nbsp;</div>
<div class="field-items">

<div class="field-item even"><?php echo apply_filters('the_content',$material);?></div>
</div>
</div>
<?php  } ?>

</div>
      <div class="ds_140 caracteristicas">
        <div class="title_caracteristicas">&nbsp;</div>
        </div>
    </div>
<?php
$cat_color = get_the_terms( $post->ID, 'product_cat' );

if ($cat_color[0]->filter=='raw') {

  $cat_bien=$cat_color[1]->slug;

}elseif(empty($cat_color[1]->filter=='raw')){

  $cat_bien=$cat_color[0]->slug;
}


?>

    <div class="ds_700 prod_main">
      <div class="commerce-product-field commerce-product-field-field-related-product field-field-related-product node-91-product-field-related-product">
        <div class="field field-name-field-related-product field-type-entityreference field-label-above">
          <div class="field-label">Productos relacionados:&nbsp;<br></div><br>
      <div id="relacionados_color" data-filt="<?php echo$meta_q; ?>" data-id_re ='<?php echo $post->ID; ?>' data-slug="<?php echo $cat_bien; ?>" class="row">

<?php

$produc_relacion_1      = get_post_meta($post->ID, 'produc_relacion1', true);
$produc_relacion_2      = get_post_meta($post->ID, 'produc_relacion2', true);
$produc_relacion_3      = get_post_meta($post->ID, 'produc_relacion3', true);
$produc_relacion_4      = get_post_meta($post->ID, 'produc_relacion4', true);
$produc_relacion_5      = get_post_meta($post->ID, 'produc_relacion5', true);
$produc_relacion_6      = get_post_meta($post->ID, 'produc_relacion6', true);
$produc_relacion_7      = get_post_meta($post->ID, 'produc_relacion7', true);
$produc_relacion_8      = get_post_meta($post->ID, 'produc_relacion8', true);

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


  //print_r($arrayName);

  $viajes = array(
  'posts_per_page'   => 8,
  'offset'           => 0,
  'category'         => '',
  'category_name'    => '',
  'orderby'          => 'post__in',
  //'order'            => 'DESC',
  'post__in'          => $totale,
  'exclude'          => $post->ID,
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


$new_fil = $agregar_color;

foreach (get_posts($viajes) as $viaje) {

displayRelationTable($tu_id, $viaje->ID, $viaje->post_title);

/*
if ($tu_id ==11) {
  $img_principalll= get_post_meta($viaje->ID, 'rosa_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
  $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==12) {
  $img_principalll = get_post_meta($viaje->ID, 'verde_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
   $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==13) {
  $img_principalll = get_post_meta($viaje->ID, 'azul_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
    $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==14) {
  $img_principalll = get_post_meta($viaje->ID, 'rojo_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
   $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==15) {
  $img_principalll = get_post_meta($viaje->ID, 'blanco_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
    $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==16){
  $img_principalll = get_post_meta($viaje->ID, 'amarillo_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
   $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==17) {
  $img_principalll = get_post_meta($viaje->ID, 'naranja_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
  $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==18) {
  $img_principalll = get_post_meta($viaje->ID, 'morado_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
 $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==19) {
  $img_principalll = get_post_meta($viaje->ID, 'negro_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
  $titulo_re= $viaje->post_title;
  $este_id=get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}elseif ($tu_id==20) {
  $img_principalll = get_post_meta($viaje->ID, 'byn_mas_img1', true);
  $id_url=get_permalink($viaje->ID);
   $titulo_re= $viaje->post_title;
 $este_id= get_post_meta($viaje->ID, '_sku', true);//$viaje->ID;
}

    echo '<div class="col-md-3">
      <div class="contenidos">
        <a href="'.$id_url.'">
    <figure style="width: 160px;height: 160px;display: table-cell;vertical-align:middle;">
      <img style="vertical-align:middle;" class="img-fluid" src="'.$img_principalll.'" alt="'.$titulo_re.'"/>
    </figure>
    <div class="field-items">
    <div class="field-item even">
   '.$este_id.'
    </div>
    </div></a>
<h2 class="field field-name-title-field field-type-text field-label-hidden">
    <a href="'.$id_url.'">'.$titulo_re.'</a>
</h2>

  </div>
    </div>';*/
?>



<?php } ?>

</div>
</div>
</div>
</div>
</section>




</div>
</div>
</div>
</div>
</div>

<?php
include 'footer.php';
?>
