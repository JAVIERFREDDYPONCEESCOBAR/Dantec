<?php
include 'header.php';
?>
<div class="container-fluid nosidepadding maincontent">
<div class='container'>
 <br>
	<div class="row">
		<div class="col-md-12">
			<?php wc_print_notices(); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<div class="product-nav">
<ul class="marcas">
<?php
$estado = get_queried_object()->name;
$estado_slug = get_queried_object()->slug;
$estado = $estado_slug;
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


<?php

    $despues= get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 0;
    if($despues <= 0){
      $despues=0;
    }else{
      $despues= ($paged == 0) ? (9*$paged) : (9*$paged) - 9;
    }

if($_GET['filt']=='post_date'){

$el_ord='post_date';

}

if ($_GET['filt']=='suave') {
$filtes='suave';
$new_filllt =array('relation' => 'AND',array('taxonomy' => 'product_cat','field' => 'slug','terms' => $estado),array('taxonomy' => 'product_tag','field' => 'slug','terms' => 'suave'));

}else if ($_GET['filt']=='duro') {
$filtes='duro';
$new_filllt = array(
    'relation' => 'AND',
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => $estado
    ),
    array(
            'taxonomy' => 'product_tag',
            'field' => 'slug',
            'terms' => 'duro'
        )
  );



}else if ($_GET['filt']=='semiduro'){

$filtes='semiduro';
$new_filllt = array(
    'relation' => 'AND',
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => $estado
    ),
    array(
            'taxonomy' => 'product_tag',
            'field' => 'slug',
            'terms' => 'semiduro'
        )
  );

}else if ($_GET['filt']==''){
$filtes='';
  $new_filllt =  array(
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => $estado
    )
  );

 $nuevo_orden='DESC';
 $el_ord='ID';

}else if ($_GET['filt']==0){
 $new_filllt =  array(
    array(
      'taxonomy' => 'product_cat',
      'field' => 'slug',
      'terms' => $estado
    )
  );

 $nuevo_orden='DESC';
 $el_ord='ID';

}


if ($_GET['filt']=='rosa'){

$new_filllt_meta = array(

         array(
            'key' => 'rosa_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );


$new_var='rosa';

}else if ($_GET['filt']=='verde'){

$new_filllt_meta = array(

         array(
            'key' => 'verde_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='verde';

}else if ($_GET['filt']=='amarillo'){

$new_filllt_meta = array(

         array(
            'key' => 'amarillo_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='amarillo';

}else if ($_GET['filt']=='naranja'){

$new_filllt_meta = array(

         array(
            'key' => 'naranja_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='naranja';

}else if ($_GET['filt']=='azul'){

$new_filllt_meta = array(

         array(
            'key' => 'azul_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='azul';

}else if ($_GET['filt']=='morado'){

$new_filllt_meta = array(

         array(
            'key' => 'morado_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='morado';

}else if ($_GET['filt']=='rojo'){

$new_filllt_meta = array(

         array(
            'key' => 'rojo_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='rojo';

}else if ($_GET['filt']=='negro'){

$new_filllt_meta = array(

         array(
            'key' => 'negro_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );
$new_var='negro';

}else if ($_GET['filt']=='blanco'){

$new_filllt_meta = array(

         array(
            'key' => 'blanco_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='blanco';

}else if ($_GET['filt']=='blanco_negro'){

$new_filllt_meta = array(

         array(
            'key' => 'byn_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='blanco_negro';
}else if ($_GET['filt']=='cafe') {
 
 $new_filllt_meta = array(

         array(
            'key' => 'cafe_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='cafe';
}else if ($_GET['filt']=='verde_limon') {
 $new_filllt_meta = array(

         array(
            'key' => 'limon_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='verde-limon';

}else if ($_GET['filt']=='gris') {
   $new_filllt_meta = array(

         array(
            'key' => 'gris_mas_img1',
            'value' =>' ',
            'compare'=>'!='

       ) );

$new_filllt =array(
        array(
            'taxonomy' => 'product_cat',
            'terms' => $estado,
            'field' => 'slug',
        ),
    );

$new_var='gris';
}







if ($_GET['filt']=='DESC') {

  $nuevo_orden='DESC';

}else if($_GET['filt']=='ASC'){

  $nuevo_orden='ASC';

}


$p = array(

    'post_type' => 'product',
    'posts_per_page'=>-1,
    'offset'=>$despues,
    'orderby'=>$el_ord,
    'order'=> $nuevo_orden,
    'tax_query' => $new_filllt,
    'meta_query' =>$new_filllt_meta
);

$boletines = get_posts($p);

//print_r($boletines);
$rcount=1;
 foreach ( $boletines  as $posttt) {
$arrayName[] = $posttt->ID;
 }
  $total_entradas=count($arrayName);
  $rese=round($total_entradas/9);
  $numm=number_format($rese);
  $total_ps= round($numm-1);
  $tt=0;
  $despues=0;

$despues = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 0;

if ( ($total_ps>=10)&&(!empty($despues)) ) {
  $nuevo_url ='./page/'.$despues.'?';
}else{
  $nuevo_url ='./?';
}

?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 products-list">
			<!-- subcategories -->
			<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no
  $title        = '';
  $empty        = 0;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
				 'name'					=> get_queried_object()->name,
         'hide_empty'   => $empty
  );

$all_categories = get_categories( $args );

$current_query_cat = get_queried_object()->name;
$parent_query_cat = get_category_parents( get_queried_object()->name, true, ' ' );
if($current_query_cat == "Vikan" || $all_categories[0]->parent == 141 || $all_categories[0]->parent == 142 || $all_categories[0]->parent == 164 || $all_categories[0]->parent == 169){

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

?>
  <figure>
    <img class="img-responsive" src="<?php echo $image; ?>"/>
    <figcaption><?php echo $category_desc; ?></figcaption>
  </figure>
  <ul class="inner-menu">
    <li>
      <a class='parent' data-attribute-css="Robert Scott" href='/marcas#vikan'>Robert Scott</a>
      <ul class='px-0'>
        <li class=''>
          <a class='child' data-attribute-css="Robert Scott – Trapeadores" href='/categoria-producto/robert-scott/robert-scott-trapeadores'>Robert Scott – Trapeadores</a>
          <ul class='px-0'>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Trapeadores" href='/categoria-producto/robert-scott/robert-scott-trapeadores/trapeadores/'>Trapeadores</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Mangos RS" href='/categoria-producto/robert-scott/robert-scott-trapeadores/robert-scott-trapeadores-mangos/'>Mangos</a>
            </li>
            <li class='childer'>
              <a class='grupo' data-attribute-css="Cubetas" href='/categoria-producto/robert-scott/robert-scott-trapeadores/cubetas/'>Cubetas</a>
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
    <a class='parent' data-attribute-css="Detectamet" href='/marcas#vikan'>Detectamet</a>
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
      <a class='parent' data-attribute-css="CMT" href='/marcas#vikan'>CMT</a>
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
      <a class='parent' data-attribute-css="Paxxo" href='/marcas#vikan'>Paxxo</a>
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
    <a class='parent' data-attribute-css="NTF Aalborg" href='/marcas#vikan'>NTF Aalborg</a>
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
              <a class='grupo' data-attribute-css="Varios" href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/varios-ntf-colgadores-de-acero-inoxidable/'>Varios</a>
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

  <?php

if ($all_categories[0]->term_id==274) { ?>
    <div class="box-border tetrer">
<a id="btn_cantacta" href="<?php echo ''.home_url().'/contacto'; ?>" >Contáctanos</a>
</div><br>
<?php } ?>

  <div class="box-border">
    <small><b>Toda la gama de drenajes Blücher esta también disponible en acero inoxidable AISI 316L, excepto donde se indique lo contrario.</b></small>
  </div>
  <br>
  <div class="box-border">
    <small><b>Todas las coladeras y canaletas Blücher se suministran con:</b></small>
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
<div class="col-md-9 products">

<nav aria-label="..." class="  ">
<div class="col-md-10">
  <?php

function getCerdaFilter($nuevo_url){
?>
  <li class="new_filtro">
    <button style="width: 260px;" class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">Tipo de cerda</button>
    <div class="collapse" id="collapseExample3">
      <div class="card card-body text-left"><a class="dropdown-item" href="<?php echo ''.$nuevo_url.''; ?>filt=semiduro">Semiduro</a></div>
      <div class="card card-body text-left"><a class="dropdown-item" href="<?php echo ''.$nuevo_url.''; ?>filt=suave">Suave</a></div>
      <div class="card card-body text-left"><a class="dropdown-item" href="<?php echo ''.$nuevo_url.''; ?>filt=duro">Duro</a></div>
    </div>
  </li>
<?php
  return;
}
function getColorFilter($nuevo_url){

  ?>
  <li class="new_filtro">
    <button style="width: 260px;" class="btn btn-info" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">Color</button>
    <div class="collapse" id="collapseExample2">
<!-- <table>
  <tr>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=rosa">Rosa</a></td>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=naranja">Naranja</a></td>
  </tr>
    <tr>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=verde">Verde</a></td>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=morado">Morado</a></td>
  </tr>
    <tr>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=azul">Azul</a></td>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=negro">Negro</a></td>
  </tr>
    <tr>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=rojo">Rojo</a></td>
    <td><a href="<?php echo ''.$nuevo_url.''; ?>filt=cafe">Cafe</a></td>
  </tr>
</table> -->



<ul class="nuevos_colores">
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=rosa">Rosa</a>
  </li>
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=verde">Verde</a>
  </li>
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=azul">Azul</a>
  </li>
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=rojo">Rojo</a>
  </li>
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=blanco">Blanco</a>
  </li>
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=Amarillo">Amarillo</a>
  </li>

</ul>



<ul class="nuevos_colores">
  <li>
    <a href="<?php echo ''.$nuevo_url.''; ?>filt=naranja">Naranja</a>
  </li>

  <li>
    <a  href="<?php echo ''.$nuevo_url.''; ?>filt=morado">Morado</a>
  </li>

  <li>
   <a  href="<?php echo ''.$nuevo_url.''; ?>filt=negro">Negro</a>
  </li>

  <li>
   <a  href="<?php echo ''.$nuevo_url.''; ?>filt=cafe">Cafe</a>
  </li>

  <li>
   <a  href="<?php echo ''.$nuevo_url.''; ?>filt=verde_limon">Verde limón</a>
 </li>

 <li>
   <a  href="<?php echo ''.$nuevo_url.''; ?>filt=gris">Gris</a>
</li>


</ul>



    </div>
  </li>
<?php
  return;
}



$cat_filtro = get_queried_object()->term_id;
echo '<ul class="filtritos d-flex justify-content-center">';
switch($cat_filtro){
  case '112':
  // NULL
  break;// Cestos  cestos
  case '139':
    echo getColorFilter($nuevo_url);
    echo getCerdaFilter($nuevo_url);
  break;// Escobas y cepillos UST  escobas-y-cepillos-ust
  case '141':
  // NULL
  break;// Vikan vikan
  case '142':
  // NULL
  break;// Vikan Hygiene System  vikan-hygiene-system
  case '143':
  // NULL
  break;// Agitadores  agitadores
  case '144':
    echo getColorFilter($nuevo_url);
    echo getCerdaFilter($nuevo_url);
  break;// Cepillos de mano  cepillos-de-mano
  case '145':
    echo getColorFilter($nuevo_url);
    echo getCerdaFilter($nuevo_url);
  break;// Cepillos para equipos cepillos-para-equipos
  case '146':
  // NULL
  break;// Coples  coples
  case '147':
    echo getColorFilter($nuevo_url);
  break;// Cubetas y recogedores cubetas-y-recogedores
  case '148':
    echo getColorFilter($nuevo_url);
  break;// Cucharas  cucharas
  case '149':
    echo getColorFilter($nuevo_url);
  break;// Escobillones  escobillones-vikan-hygiene-system
  case '152':
    echo getColorFilter($nuevo_url);
  break;// Espátulas y raspadores  espatulas-y-raspadores
  case '153':
    echo getColorFilter($nuevo_url);
  break;// Espumadoras espumadoras-vikan-hygiene-system
  case '154':
  // NULL
  break;// Jalador para condensado jalador-para-condensado
  case '155':
    echo getColorFilter($nuevo_url);
  break;// Jaladores y repuestos de casete jaladores-y-repuestos-de-casete
  case '156':
    echo getColorFilter($nuevo_url);
  break;// Mangos  mangos
  case '157':
    echo getColorFilter($nuevo_url);
  break;// Palas palas
  case '159':
    echo getColorFilter($nuevo_url);
  break;// Portafibras y fibras  portafibras-y-fibras
  case '160':
    echo getColorFilter($nuevo_url);
  break;// Portautensilios portautensilios
  case '161':
  // NULL
  break;// Utensilios detectables  utensilios-detectables
  case '162':
  // NULL
  break;// Vikan Kits  vikan-kits
  case '163':
  // NULL
  break;// Kits de utensilios Vikan  kits-de-utensilios-vikan
  case '164':
  // NULL
  break;// Vikan Línea Microfibra  vikan-linea-microfibra
  case '165':
  // NULL
  break;// Carritos de limpieza  carritos-de-limpieza
  case '167':
  // NULL
  break;// Mops y trapos mops-y-trapos
  case '169':
  // NULL
  break;// Vikan Línea Transport vikan-linea-transport
  case '170':
  // NULL
  break;// Escobas y cepillos  escobas-y-cepillos
  case '171':
  // NULL
  break;// Mangos Transport  mangos-vikan-linea-transport
  case '172':
  // NULL
  break;// Varios  varios
  case '173':
  // NULL
  break;// Robert Scott  robert-scott
  case '174':
  // NULL
  break;// Robert Scott – Trapeadores  robert-scott-trapeadores
  case '175':
    echo getColorFilter($nuevo_url);
  break;// Cubetas cubetas
  case '176':
  // NULL
  break;// Mangos RS robert-scott-trapeadores-mangos
  case '177':
    echo getColorFilter($nuevo_url);
  break;// Trapeadores trapeadores
  case '178':
  // NULL
  break;// Detectamet  detectamet
  case '179':
  // NULL
  break;// Detectamet – Productos detectables  detectamet-productos-detectables
  case '180':
  // NULL
  break;// Artículos de oficina detectables  articulos-de-oficina-detectables
  case '181':
    echo getColorFilter($nuevo_url);
  break;// Artículos de protección personal detectables  articulos-de-proteccion-personal-detectables
  case '183':
  // NULL
  break;// Cortadores de seguridad detectables cortadores-de-seguridad-detectables
  case '184':
  // NULL
  break;// Identificadores detectables identificadores-detectables
  case '185':
  // NULL
  break;// Sujetadores y cintillos detectables sujetadores-y-cintillos-detectables
  case '186':
    echo getColorFilter($nuevo_url);
  break;// Utensilios y accesorios para proceso detectables  utensilios-y-accesorios-para-proceso-detectables
  case '187':
  // NULL
  break;// CMT cmt
  case '188':
  // NULL
  break;// CMT – Ropa desechable cmt-ropa-desechable
  case '190':
    echo getColorFilter($nuevo_url);
  break;// Cofias, cubremangas y cubrezapatos  cofias-cubremangas-y-cubrezapatos
  case '192':
  // NULL
  break;// Paxxo paxxo
  case '193':
  // NULL
  break;// Paxxo – Manejo de desechos  paxxo-manejo-de-desechos
  case '194':
  // NULL
  break;// Longopac ®  longopac
  case '195':
  // NULL
  break;// Longopac Stand ®  longopac-stand
  case '196':
  // NULL
  break;// NTF Aalborg ntf-aalborg
  case '197':
  // NULL
  break;// NTF – Colgadores de acero inoxidable  ntf-colgadores-de-acero-inoxidable
  case '199':
  // NULL
  break;// Colgadores  colgadores
  case '200':
  // NULL
  break;// Secabotas secabotas-ntf-colgadores-de-acero-inoxidable
  case '201':
  // NULL
  break;// Varios NTF  varios-ntf-colgadores-de-acero-inoxidable
  case '210':
    echo getColorFilter($nuevo_url);
  break;// Mandiles  mandiles
  case '211':
  // NULL
  break;// Batas y cubrebocas  batas-y-cubrebocas
  case '266':
  // NULL
  break;// Blücher blucher
  case '267':
  // NULL
  break;// HygienicPro®  hygienicpro
  case '269':
  // NULL
  break;// Coladeras industriales  coladeras-industriales
  case '270':
  // NULL
  break;// Coladeras Kitchen coladeras-kitchen
  case '271':
  // NULL
  break;// Canaletas industriales  canaletas-industriales
  case '272':
  // NULL
  break;// Tapas para registros  tapas-para-registros
  case '273':
  // NULL
  break;// Coladeras semi-industriales coladeras-semi-industriales
  case '274':
  // NULL
  break;// Tubería EuroPipe  tuberia-europipe
  case '275':
  // NULL
  break;// Portamops portamops
  case '276':
  // NULL
  break;// Mangos con sistema clic y accesorios  mangos-con-sistema-clic-y-accesorios
  case '277':
    echo getColorFilter($nuevo_url);
    echo getCerdaFilter($nuevo_url);
  break;// Escobas y cepillos para pisos o paredes escobas-y-cepillos-para-pisos-o-paredes
  case '279':
    echo getColorFilter($nuevo_url);
  break;// Pistolas de agua y mangueras  pistolas-de-agua-y-mangueras
  case '284':
  // NULL
  break;// Bolígrafos  boligrafos
  case '285':
  // NULL
  break;// Blücher – Drenajes de acero inoxidable  blucher-drenajes-de-acero-inoxidable

  default:
  break;
}
echo '</ul>';

?>

</div>

<!-- New Pagination -->

<?php

  function wpbeginner_numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 0;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="navigation"><ul class="menu_pag_tax pagination d-flex justify-content-center">' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="page-link">%s</li>' . "\n", get_previous_posts_link() );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-link active"' : '';

        printf( '<li%s class="page-link"><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-link active"' : '';

if (($paged == 0)&&($link==1)) {
    $actv2 ='active2';
}else{
    $actv2 ='';
}
      //print_r($link);

        printf( '<li%s class="page-link '.$actv2.'"><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="page-link active"' : '';
        printf( '<li%s class="page-link"><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="page-link">%s</li>' . "\n", get_next_posts_link() );

    echo '</ul></div>' . "\n";

}



?>

<!-- End Pagination -->


<div class="col-md-10">
<?php

  wpbeginner_numeric_posts_nav();

?>
</div>


</nav>

			<div class="row productos" id="filtro_final">
<?php
$despues=0;
$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 0;
$despues= ($paged == 0) ? (9*$paged) : (9*$paged) - 9;
    $hoteles = array(
      'post_type' => 'product',
      'posts_per_page'=>9,
      'offset'=>$despues,
      //'orderby'=>$el_ord,
      'orderby'=>'post_date',
      'order'=> 'DESC',
      'tax_query' => $new_filllt,
      'meta_query' =>$new_filllt_meta
    );

 foreach (get_posts($hoteles) as $postt) {
//print_r($postt);
//$colores = $product->get_attribute( 'Color' );
	//			$colores = explode("|", $colores);
		//		$id = $product->get_id();

$id_producto  = get_post_meta($postt->ID, 'id_producto', true);

$rosa_mas_img1       = get_post_meta($postt->ID, 'rosa_mas_img1', true);
$rosa_mas_img2       = get_post_meta($postt->ID, 'rosa_mas_img2', true);
$rosa_mas_img3       = get_post_meta($postt->ID, 'rosa_mas_img3', true);

$amarillo_mas_img1   = get_post_meta($postt->ID, 'amarillo_mas_img1', true);
$amarillo_mas_img2   = get_post_meta($postt->ID, 'amarillo_mas_img2', true);
$amarillo_mas_img3   = get_post_meta($postt->ID, 'amarillo_mas_img3', true);

$verde_mas_img1      = get_post_meta($postt->ID, 'verde_mas_img1', true);
$verde_mas_img2      = get_post_meta($postt->ID, 'verde_mas_img2', true);
$verde_mas_img3      = get_post_meta($postt->ID, 'verde_mas_img3', true);

$naranja_mas_img1    = get_post_meta($postt->ID, 'naranja_mas_img1', true);
$naranja_mas_img2    = get_post_meta($postt->ID, 'naranja_mas_img2', true);
$naranja_mas_img3    = get_post_meta($postt->ID, 'naranja_mas_img3', true);

$azul_mas_img1       = get_post_meta($postt->ID, 'azul_mas_img1', true);
$azul_mas_img2       = get_post_meta($postt->ID, 'azul_mas_img2', true);
$azul_mas_img3       = get_post_meta($postt->ID, 'azul_mas_img3', true);

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

$cafe_mas_img1=get_post_meta($postt->ID, 'cafe_mas_img1', true);
$cafe_mas_img2=get_post_meta($postt->ID, 'cafe_mas_img2', true);
$cafe_mas_img3=get_post_meta($postt->ID, 'cafe_mas_img3', true);

$limon_mas_img1=get_post_meta($postt->ID, 'limon_mas_img1', true);
$limon_mas_img2=get_post_meta($postt->ID, 'limon_mas_img2', true);
$limon_mas_img3=get_post_meta($postt->ID, 'limon_mas_img3', true);

$gris_mas_img1=get_post_meta($postt->ID, 'gris_mas_img1', true);
$gris_mas_img2=get_post_meta($postt->ID, 'gris_mas_img2', true);
$gris_mas_img3=get_post_meta($postt->ID, 'gris_mas_img3', true);


//$new_var;

echo'<div class="col-md-3 white product">
     <a href="'.get_permalink($postt->ID).'">
     <div class="este-4 product_img" style="overflow: hidden; height: 190px;">';

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
$c11=get_post_meta($postt->ID, 'cafe_mas_img1', true);
$c12=get_post_meta($postt->ID, 'limon_mas_img1', true);
$c13=get_post_meta($postt->ID, 'gris_mas_img1', true);


if ((!empty($c1))&&($new_var=='rosa')||(!empty($c1))&&($new_var=='') ) {

  $url_color='rosa';
  $img_principalll=get_post_meta($postt->ID, 'rosa_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c2))&&($new_var=='verde')||(!empty($c2))&&($new_var=='') ) {

  $url_color='verde';
  $img_principalll=get_post_meta($postt->ID, 'verde_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c3))&&($new_var=='azul')||(!empty($c3))&&($new_var=='') ) {

  $url_color='azul';
  $img_principalll=get_post_meta($postt->ID, 'azul_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';


}elseif ( (!empty($c4))&&($new_var=='rojo')||(!empty($c4))&&($new_var=='') ) {

  $url_color='rojo';
  $img_principalll=get_post_meta($postt->ID, 'rojo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c5))&&($new_var=='blanco')||(!empty($c5))&&($new_var=='') ) {


  $url_color='blanco';
  $img_principalll=get_post_meta($postt->ID, 'blanco_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c6))&&($new_var=='amarillo')||(!empty($c6))&&($new_var=='') ) {

  $url_color='amarillo';
  $img_principalll=get_post_meta($postt->ID, 'amarillo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c7))&&($new_var=='naranja')||(!empty($c7))&&($new_var=='') ) {

  $url_color='naranja';
  $img_principalll=get_post_meta($postt->ID, 'naranja_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c8))&&($new_var=='morado')||(!empty($c8))&&($new_var=='') ) {

  $url_color='morado';
  $img_principalll=get_post_meta($postt->ID, 'morado_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';

}elseif ( (!empty($c9))&&($new_var=='negro')||(!empty($c9))&&($new_var=='') ) {

 $url_color='negro';
  $img_principalll=get_post_meta($postt->ID, 'negro_mas_img1', true);

  echo' <img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c10))&&($new_var=='s_n')||(!empty($c10))&&($new_var=='') ) {

	$url_color='s_n';
  $img_principalll=get_post_meta($postt->ID, 'byn_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c11))&&($new_var=='cafe')||(!empty($c11))&&($new_var=='') ) {

	$url_color='cafe';
  $img_principalll=get_post_meta($postt->ID, 'cafe_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c12))&&($new_var=='verde-limon')||(!empty($c12))&&($new_var=='') ) {

	$url_color='verde-limon';
  $img_principalll=get_post_meta($postt->ID, 'limon_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif ( (!empty($c13))&&($new_var=='gris')||(!empty($c13))&&($new_var=='') ) {

	$url_color='gris';
  $img_principalll=get_post_meta($postt->ID, 'gris_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}




			echo'	</div>
				<div class="product_info">
					<div class="clave">'.$id_producto.'</div>
					<p>'.$postt->post_title.'</p>
				</div>
			</a>


			<div class="colors">
				<div class="color-wrap">';

if ((empty($rosa_mas_img1))&&(empty($rosa_mas_img2))&&(empty($rosa_mas_img3))) {
	$color_rosa=' ';
	$img_rosa=' ';

}else{
    $color_rosa = 'rosa';
    $img_rosa   = $rosa_mas_img1;
    echo$rosa_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_rosa.'" data-image-color="'.$img_rosa.'"><span class="colour-'.$color_rosa.'"></span></a>';
}

if ((empty($verde_mas_img1))&&(empty($verde_mas_img2))&&(empty($verde_mas_img3))) {
    $color_verde = ' ';
    $img_verde = ' ';
}else{
    $color_verde ='verde';
    $img_verde = $verde_mas_img1;
     echo$verde_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_verde.'" data-image-color="'.$img_verde.'"><span class="colour-'.$color_verde.'"></span></a>';
}

if ((empty($azul_mas_img1))&&(empty($azul_mas_img2))&&(empty($azul_mas_img3))) {
   $color_azul =' ';
   $img_azul = ' ';
}else{
    $color_azul ='azul';
    $img_azul = $azul_mas_img1;
    echo$azul_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_azul.'" data-image-color="'.$img_azul.'"><span class="colour-'.$color_azul.'"></span></a>';
}

if ((empty($rojo_mas_img1))&&(empty($rojo_mas_img1))&&(empty($rojo_mas_img1))) {
  $color_rojo =' ';
  $img_rojo   =' ';
}else{
     $color_rojo ='rojo';
     $img_rojo = $rojo_mas_img1;
  echo$rojo_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_rojo.'" data-image-color="'.$img_rojo.'"><span class="colour-'.$color_rojo.'"></span></a>';
}

if ((empty($blanco_mas_img1))&&(empty($blanco_mas_img2))&&(empty($blanco_mas_img3))) {
  $color_blanco=' ';
  $img_blanco = ' ';
}else{
    $color_blanco ='blanco';
    $img_blanco = $blanco_mas_img1;
  echo$blanco_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_blanco.'" data-image-color="'.$img_blanco.'"><span class="colour-'.$color_blanco.'"></span></a>';
}

if ((empty($amarillo_mas_img1))&&(empty($amarillo_mas_img2))&&(empty($amarillo_mas_img3))) {
	$color_amarillo = ' ';
	$img_amarillo = ' ';
}else{
    $color_amarillo ='amarillo';
    $img_amarillo = $amarillo_mas_img1;
    echo$amarillo_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_amarillo.'" data-image-color="'.$img_amarillo.'"><span class="colour-'.$color_amarillo.'"></span></a>';
}

if ((empty($naranja_mas_img1))&&(empty($naranja_mas_img2))&&(empty($naranja_mas_img3))) {
	$color_naranja =' ';
	$img_naranja = ' ';
}else{
    $color_naranja ='naranja';
    $img_naranja = $naranja_mas_img1;
    echo$naranja_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_naranja.'" data-image-color="'.$img_naranja.'"><span class="colour-'.$color_naranja.'"></span></a>';
}

if ((empty($morado_mas_img1))&&(empty($morado_mas_img2))&&(empty($morado_mas_img3))) {
	$color_morado =' ';
    $img_morado = '';
}else{
    $img_morado = $morado_mas_img1;
    $color_morado ='morado';
  echo$morado_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_morado.'" data-image-color="'.$img_morado.'"><span class="colour-'.$color_morado.'"></span></a>';
}


if ((empty($negro_mas_img1))&&(empty($negro_mas_img2))&&(empty($negro_mas_img3))) {
	$color_negro =' ';
	$img_negro = ' ';
}else{
	$img_negro = $negro_mas_img1;
    $color_negro ='negro';
  echo$negro_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_negro.'" data-image-color="'.$img_negro.'"><span class="colour-'.$color_negro.'"></span></a>';
}


if ((empty($byn_mas_img1))&&(empty($byn_mas_img2))&&(empty($byn_mas_img3))) {
	$color_byn=' ';
	$img_byn= ' ';

}else{
    $color_byn ='sc';
    $img_byn= $byn_mas_img1;
   echo$byn_color='<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_byn.'" data-image-color="'.$img_byn.'"><span class="colour-'.$color_byn.'"></span></a>';
}


if ((empty($cafe_mas_img1))&&(empty($cafe_mas_img2))&&(empty($cafe_mas_img3))) {
	$color_cafe=' ';
	$img_cafe= ' ';

}else{
    $color_cafe ='cafe';
    $img_cafe= $cafe_mas_img1;
   echo'<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_cafe.'" data-image-color="'.$img_cafe.'"><span class="colour-'.$color_cafe.'"></span></a>';
}






if ((empty($limon_mas_img1))&&(empty($limon_mas_img2))&&(empty($limon_mas_img3))) {
  $color_limon=' ';
  $img_limon= ' ';

}else{
    $color_limon ='verde-limon';
    $img_limon= $limon_mas_img1;
   echo'<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_limon.'" data-image-color="'.$img_limon.'"><span class="colour-'.$color_limon.'"></span></a>';
}





if ((empty($gris_mas_img1))&&(empty($gris_mas_img2))&&(empty($gris_mas_img3))) {
  $color_gris=' ';
  $img_gris= ' ';

}else{
    $color_gris ='gris';
    $img_gris= $gris_mas_img1;
   echo'<a data-cc="'.$postt->ID.'" class="change-color" data-image-set-color="'.$color_gris.'" data-image-color="'.$img_gris.'"><span class="colour-'.$color_gris.'"></span></a>';
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
    wp_reset_query();
?>
</div>
<div class="nav-replicated col-md-10"></div>
</div>


</div>

</div>
</div>
<?php include 'footer.php'; ?>
