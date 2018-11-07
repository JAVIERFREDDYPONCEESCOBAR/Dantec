<?php
/**
 * The template for displaying all single posts.
 *
 * @package storefront
 */

get_header(); ?>
<div class="container-fluid nosidepadding maincontent">
<div class='container'>
	<div class="row">
		<div class="col-md-8 offset-md-2">

		<?php while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single' );

		endwhile; // End of the loop. ?>

</div>
</div>
</div>
</div>
<?php
do_action( 'storefront_sidebar' );
get_footer();
