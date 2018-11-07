<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package storefront
 */

get_header(); ?>
<div class="container-fluid nosidepadding maincontent">
<div class='container'>
	<div class='jumbotron about text-center'>
        <h1 class='mb-1'>Noticias</h1>
        <div class='customborder mb-4'></div>
    </div>
	<div class="row">

<div class="col-md-4 products-list">
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


//print_r($all_categories);



	?>



	
  <ul class="inner-menu">

    <?php 


foreach ($all_categories as $key_cat => $cat_value) {
 if ($cat_value->category_parent==0) { ?>


  <li class='childer'>
          <a class='child' data-attribute-css="<?php echo$cat_value->name; ?>" href='<?php echo get_category_link($cat_value->term_id); ?>'><?php echo$cat_value->name; ?></a>
           
        </li>


<?php
 }
}

 
?>
   <!--  <li>
      <a class='parent' data-attribute-css="Vikan" href='/marcas#vikan'>Vikan</a>
      
        </li>


        <li class=''>
          <a class='child' data-attribute-css="Vikan Línea Microfibra" href='/categoria-producto/vikan/vikan-linea-microfibra/'>Vikan Línea Microfibra</a>
           
        </li>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Línea Transport" href='/categoria-producto/vikan/vikan-linea-transport/'>Vikan Línea Transport</a>
      
           
        </li>
        <li class=''>
          <a class='child' data-attribute-css="Vikan Kits" href='/categoria-producto/vikan/vikan-kits/'>Vikan Kits</a>
        </li>
      </ul>
  -->





  <br>





</div>

		<div class="col-md-8">
<?php
$args = array(
'post_type' => 'post',
'orderby' 	=> 'date',
'order'		=> 'DESC'
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) : ?>

<?php
// Start the loop.
while ( $the_query->have_posts() ) : $the_query->the_post();

/*
* Include the Post-Format-specific template for the content.
* If you want to override this in a child theme, then include a file
* called content-___.php (where ___ is the Post Format name) and that will be used instead.
*/
get_template_part( 'content', 'blog' );

// End the loop.
endwhile;

// Previous/next page navigation.
the_posts_pagination( array(
'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
'next_text'          => __( 'Next page', 'twentyfifteen' ),
'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
) );

// If no content, include the "No posts found" template.
else :
get_template_part( 'content', 'none' );

endif;
?>
</div>
</div>
</div>
</div>
<?php
do_action( 'storefront_sidebar' );
get_footer();
