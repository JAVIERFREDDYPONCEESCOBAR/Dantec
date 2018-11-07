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

<div class='container-fluid nosidepadding maincontent'>
	<div class="container">
        <div class='jumbotron about text-center'>
            <h1 class='mb-1'>Gracias</h1>
            <div class='customborder mb-4'></div>
        </div>
    </div>
		<div class='jumbotron gray'>
				<div class='col-md-8 mx-auto'>
					<p class="text-center"><strong>Tu solicitud ha sido enviada, pronto recibiras la cotización a tu correo electronico</strong></p>
				</div>
		</div>
</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
