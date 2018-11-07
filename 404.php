<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package storefront
 */

get_header(); ?>

	<section>

		<div class="container-fluid nosidepadding maincontent">
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="error-404 not-found">

						<div class="page-content">

							<header class="page-header">
								<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'storefront' ); ?></h1>
							</header><!-- .page-header -->

							<p>No se encontró la información que buscas.</p>
							<p><a href="/" class="btn btn-contact">Regresar</a></p>
						</div><!-- .page-content -->
					</div><!-- .error-404 -->
				</div>
			</div>
		</div><!-- #main -->
	</section><!-- #primary -->

<?php get_footer();
