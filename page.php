<?php
include 'header.php'; ?>
<div class="container-fluid nosidepadding maincontent">
<div class="container">

<?php  

$vra1=get_page_by_path('mi-cuenta')->ID;

$vra2=get_page_by_path('mi-cuenta')->ID;

if($vra1==7){ echo'<div class="margen">'; }else{ ?>

	  <div class="row">
		   <div class="col-md-10 offset-md-1">

<?php }


 while ( have_posts() ) : the_post();

				do_action( 'storefront_page_before' );

				get_template_part( 'content', 'page' );

			endwhile; // End of the loop. 





if($vra2==7){echo'</div>'; }else{ ?></div></div><?php } ?>

</div>
</div>
<?php
//do_action( 'storefront_sidebar' );
include 'footer.php'; ?>