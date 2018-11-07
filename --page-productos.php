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
  $menuss = array(
         'taxonomy'     => 'product_cat',
         'orderby'      => array(),
         'show_count'   => 0,
         'pad_counts'   => 0,
         'hierarchical' => 1,
         'title_li'     => '',
		      //'name'			=> 'Vikan',
         'hide_empty'   => 0
  );
 $all_categories_m = get_categories( $menuss );
 foreach ($all_categories_m as $cat_menu) {
    if($cat_menu->category_parent == 0) {

    ?>
					<li class="parent">
						<b><a class="index" href="<?php echo get_term_link($cat_menu->slug, 'product_cat'); ?>"><?php echo $cat_menu->name; ?></a></b>
					</li>
<?php }}?>
					
				</ul>
			</div>	


     
    <?php 
$estado='vikan';

    $despues=0;
if (isset($_GET['cant_en'])) {

  if($_GET['cant_en'] <= 0){
    $despues=0;
  }else{
    $despues=(9*$_GET['cant_en']);
  }

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

   

} else if ($_GET['filt']=='semiduro'){

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
    'tax_query' => $new_filllt 
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
if (isset($_GET['cant_en'])) {
  $despues=$_GET['cant_en'];
}





if ( ($total_ps>=10)&&(!empty($_GET['filt'])) ) {
  
$nuevo_url ='productos./?cant_en='.$despues.'&amp;';

}else{

$nuevo_url ='productos./?';

}

?>



			



		</div>
	</div>
	<div class="row">
		<div class="col-md-3 products-list">
			<!-- subcategories -->
			<ul class="inner-menu">
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
				 'name'					=> 'Vikan',
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
				$category_id = $cat->term_id;

				$thumbnail_id = get_woocommerce_term_meta( $category_id, 'thumbnail_id', true );
				$image = wp_get_attachment_url( $thumbnail_id );
				$category_desc = $cat->category_description;
				?>
				<figure>
					<img class="img-responsive" src="<?php echo $image; ?>"/>
					<figcaption></figcaption>
				</figure>
        <li class="parent">
          <label><?php echo$category_desc; ?></label>
        </li>
				<!--<li class="parent"><a href="<?php //echo get_term_link($cat->slug, 'product_cat'); ?>"><?php// echo $cat->name; ?></a></li>
				<ul>-->
				<?php
        $args2 = array(
                'taxonomy'     => $taxonomy,
                'child_of'     => 0,
                'parent'       => $category_id,
                'orderby'      => $orderby,
                'show_count'   => $show_count,
                'pad_counts'   => $pad_counts,
                'hierarchical' => $hierarchical,
                'title_li'     => $title,
                'hide_empty'   => $empty
        );
        $sub_cats = get_categories( $args2 );
        if($sub_cats) {
            foreach($sub_cats as $sub_category) {
								?>
								<li class="child"><b><a href="<?php echo get_term_link($sub_category->slug, 'product_cat'); ?>"><?php echo $sub_category->name; ?></a></b></li>
								<ul>
								<?php
								$category_id = $sub_category->term_id;

								$args3 = array(
				                'taxonomy'     => $taxonomy,
				                'child_of'     => 0,
				                'parent'       => $category_id,
				                'orderby'      => $orderby,
				                'show_count'   => $show_count,
				                'pad_counts'   => $pad_counts,
				                'hierarchical' => $hierarchical,
				                'title_li'     => $title,
				                'hide_empty'   => $empty
				        );
								$subs_cats = get_categories( $args3 );
								if($subs_cats) {
				            foreach($subs_cats as $subs_category) {
												?>
												<li class="childer"><a href="<?php echo get_term_link($subs_category->slug, 'product_cat'); ?>"><?php echo $subs_category->name; ?></a></li>
												<?php
										}
								}
								?>
							</ul>
								<?php
            }
        }
				?>
				<!--</ul>-->
				<?php
    }
}
?>
		</ul>
		<p><?php //echo $category_desc; ?></p>
		</div>
		<div class="col-md-9 products">
<nav aria-label="...">
  <div class="col-md-6  offset-md-2 ">
 <ul id="menu_pag_tax" class="pagination" data-select="0" data-t-cantidad="<?php echo$total_ps ; ?>"  >

<?php 
  $despues_filt=0;
if (isset($_GET['filt'])) {
  $despues_filt=$_GET['filt'];
}

if ( ($total_ps==1) || ($total_ps==0)) {
  


 





}else{

$antest = $despues-1;

if($antest <= -1){
  $antest = 0;
}
?>
<li class=""  id="" >
  <a href="./?cant_en=0&amp;filt=0">
        <label class="page-link"  aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
        </label></a>

</li>

<?php

for ($i = $despues+1; $i <= $total_ps; $i++) {
   $mult=8*$tt++;

if ($tt>=11) {
  
  break;
}


echo'<li  class="page_tax-item " data-idd="'.$i.'" data-cm="'.$total_entradas.'" data-cantidad="'.$mult.'" >
<a class="limp_f" href="./?cant_en='.$i.'">
     <label class="page-link" >'.$i.'</label></a></li>';

}

$sigientes = $despues+1;
if($sigientes >= $total_ps){
  $sigientes = $total_ps;
}

 ?>
    <li class="" id="" >
        <a href="./?cant_en=<?php echo $total_ps; ?>&amp;filt=0"><label class="page-link" aria-label="Next">
        <span  aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </label></a>
    </li>




<?php } ?>


  
  </ul>


</div>
</nav>




			<div class="row productos" id="contendio_pag" >
<?php

$despues=0;
if (isset($_GET['cant_en'])) {
  $despues=(9*$_GET['cant_en']);
}
  //       'posts_per_page'   => 9,
  // 'offset'           => $despues,
  // 'category'         => '',
  // 'category_name'    => '',
  // 'orderby'          =>$el_ord,
  // 'order'            => $nuevo_orden,
  // 'include'          => '',
  // 'exclude'          => '',
  // 'meta_key'         => '',
  // 'meta_value'       => '',
  // 'post_type'        => 'product',
  // 'post_mime_type'   => '',
  // 'post_parent'      => '',
  // 'author'     => '',
  // 'author_name'    => '',
  // 'post_status'      => 'publish',
  // 'suppress_filters' => true 


//echo ''.$despues.' uno' ;
//echo ''.$el_ord.' dos';
//echo ''.$nuevo_orden.' tres';


    $hotelestt = array(
    'post_type' => 'product',
    'posts_per_page'=>9,
    'offset'=>$despues,
    'orderby'=>$el_ord,
    'order'=> $nuevo_orden);


$ererf = get_posts($hotelestt);

 

   
 foreach (get_posts($hotelestt) as $postt) {
//print_r($postt);
//$colores = $product->get_attribute( 'Color' );
  //      $colores = explode("|", $colores);
    //    $id = $product->get_id();
        
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


if (!empty($c1)) {
  $url_color='rosa';
  $img_principalll=get_post_meta($postt->ID, 'rosa_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c2)) {
  $url_color='verde';
  $img_principalll=get_post_meta($postt->ID, 'verde_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c3)) {
  $url_color='azul';
  $img_principalll=get_post_meta($postt->ID, 'azul_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c4)) {
  $url_color='rojo';
  $img_principalll=get_post_meta($postt->ID, 'rojo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c5)) {
  $url_color='blanco';
  $img_principalll=get_post_meta($postt->ID, 'blanco_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c6)){
  $url_color='amarillo';
  $img_principalll=get_post_meta($postt->ID, 'amarillo_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c7)) {
  $url_color='naranja';
  $img_principalll=get_post_meta($postt->ID, 'naranja_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c8)) {
  $url_color='morado';
  $img_principalll=get_post_meta($postt->ID, 'morado_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c9)) {
 $url_color='negro';
  $img_principalll=get_post_meta($postt->ID, 'negro_mas_img1', true);

  echo' <img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}elseif (!empty($c10)) {
  $url_color='s_n';
  $img_principalll=get_post_meta($postt->ID, 'byn_mas_img1', true);
  echo'<img width="300" height="300" src="'.$img_principalll.'" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="" srcset="'.$img_principalll.' 300w,'.$img_principalll.' 768w, '.$img_principalll.'600w, '.$img_principalll.' 1000w" sizes="(max-width: 300px) 100vw, 300px" style="height: calc(100% - 5px);">';
}


      echo' </div>
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
    $color_byn ='s_c';
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
       
  


    wp_reset_query();
?>
</div>
</div>


</div>
</div>
</div>
<?php
do_action( 'storefront_sidebar' );
include 'footer.php';
