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
            <h1 class='mb-1'>Catálogo</h1>
            <div class='customborder mb-4'></div>
        </div>
    </div>    
        <div class='container-fluid gray'>
                <div class='row catalog'>
                        <div class='col-md-4'>
                                <div class='col-md-12'>
                                    <a href='//pageflipadmin-vps.webproof.com/407/197381/publication.html?sess_key=6dc5790c6e5d28c20d5ea615100c7fbb#/page=1' target='_black'>
                                        <div class='cat1'>
                                            <p>CATÁLOGO 2018</p>
                                            <p>Versión Flip</p>
                                        </div>
                                    </a>
                                </div>
                                <div class='col-md-12'>
                                    <?php $c_interactivo = get_post_meta( get_the_ID(), 'Interactivo', true ); ?>
                                    <a href='<?php echo $c_interactivo ?>' target='_black'>
                                        <div class='cat2'>
                                            <p>CATÁLOGO 2018</p>
                                            <p>Versión Interactivo<br>(Sólo para PC y Mac)</p>
                                        </div>
                                    </a>
                                </div>
                        </div>
                        <div class='col-md-4'>
                                <div class='mx-auto' style='width: 315px;'>
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/catalogo_1-3d6329cf133d0b5afca50d50cac28f521a8623b63c37881f8b6910f67fa96fa2.png" alt="Catalogo 1 3d6329cf133d0b5afca50d50cac28f521a8623b63c37881f8b6910f67fa96fa2" />
                                </div>
                        </div>
                        <div class='col-md-4'>
                                <div class='col-md-12'>
                                    <a href='//www.dantec.mx/Catalogo_Dantec2018.pdf' target='_black'>
                                        <div class='cat3'>
                                            <p>CATÁLOGO 2018</p>
                                            <p>Versión PDF</p>
                                        </div>
                                    </a>
                                </div>
                                <div class='col-md-12'>
                                    <a href='//beta.dantec.mx.php56-11.dfw3-2.websitetestlink.com/ManualInteractivo_2016.pdf' target='_black'>
                                        <div class='cat4'>
                                            <p>MANUAL CATÁLOGO INTERACTIVO</p>
                                            <p>Ver PDF</p>
                                        </div>
                                    </a>
                                </div>
                        </div>
                </div>
        </div>
</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
