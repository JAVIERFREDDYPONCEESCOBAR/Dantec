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
            <h1 class='mb-1'>Contáctanos</h1>
            <div class='customborder mb-4'></div>
        </div>
    </div>
        <div class='container-fluid contact'>
                <div class='row row-eq-height'>
                        <div class='col-md-5 offset-md-1'>
                            <div class='row info'>
                                    <div class='col-md-6 col-12 mx-auto'>
                                            <div class='text-center'>
                                                    <i aria-hidden='true' class='fa fa-phone fa-2x'></i>
                                            </div>
                                            <p class='big text-center'>Teléfonos</p>
                                            <p class='text-center'>(55) 5590 6780<br>Internacional: +52 (55) 5590 6780</p>
                                    </div>
                                    <div class='col-md-6 col-12 text-center'>
                                            <i aria-hidden='true' class='fa fa-envelope fa-2x'></i>
                                            <p class='big text-center'>Correo electrónico</p>
                                            <a href='mailto:dantec@dantec.com.mx'>dantec@dantec.com.mx</a>
                                    </div>
                                    <div class='col-md-8 col-12 mx-auto'>
                                            <div class='text-center'>
                                                    <i aria-hidden='true' class='fa fa-map-marker fa-2x'></i>
                                            </div>
                                            <p class='big text-center'>Dirección</p>
                                            <p class='text-center'>Plutarco Elías Calles No. 1011 <br>Col. Iztaccihuatl, Benito Juárez<br> 03520 Ciudad de México, México</p>
                                    </div>
                            </div>
                            <div class='clearfix'></div>
                        </div>
                        <div class='col-md-5'>

                            <?php echo do_shortcode('[contact-form-7 id="46330" title="Contact form 1"]'); ?>

                            <!--<form class="new_contact" id="new_contact" action="/contacts" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Go08hM2xwvAPpnA0cQXrwa2AlajWLAZoVCy6/hrHPoO5XTnakvP9L2oqg2TaLACaqEUV0XUQ5O6t35bPybjs9A==" />
                                    <div class='form-group'>
                                            <label for="contact_nombre"><span class="required">*</span> Nombre:</label><input class="form-control" required="required" type="text" name="contact[nombre]" id="contact_nombre" />
                                    </div>
                                    <div class='form-group'>
                                            <label for="contact_asunto"><span class="required">*</span> Asunto:</label><input class="form-control" required="required" type="text" name="contact[asunto]" id="contact_asunto" />
                                    </div>
                                    <div class='form-group'>
                                            <label for="contact_email"><span class="required">*</span> Correo electrónico:</label><input class="form-control" required="required" type="text" name="contact[email]" id="contact_email" />
                                    </div>
                                    <div class='form-group'>
                                            <label for="contact_telefono"><span class="required">*</span> Teléfono:</label><input class="form-control" required="required" type="text" name="contact[telefono]" id="contact_telefono" />
                                    </div>
                                    <div class='form-group'>
                                            <label for="contact_mensaje"><span class="required">*</span> Mensaje:</label><textarea class="form-control" required="required" name="contact[mensaje]" id="contact_mensaje"></textarea>
                                    </div>
                                    <input type="hidden" name="contact[nickname]" id="contact_nickname" />
                                    <p><span class="required">*</span> Los campos con asterisco son obligatorios.</p>
                                    <div class='actions center text-center'>
                                            <input type="submit" name="commit" value="Enviar" class="btn btn-contact" id="staticcontact" />
                                    </div>
                            </form>-->
                            <div class='clearfix'></div>
                        </div>
                </div>
        </div>
        <script>
            jQuery('#staticcontact').click(function(e){
                e.preventDefault();
                if (!jQuery('#contact_nombre').val()) {
                  alert('Escribe tu nombre, por favor.');
                } else
                if (!jQuery('#contact_asunto').val()) {
                  alert('¿Cuál es tu motivo de contacto?');
                } else
                if (!jQuery('#contact_email').val()) {
                  alert('Escribe tu correo electónico, por favor.');
                } else
                if (!jQuery('#contact_telefono').val()) {
                  alert('Escribe tu número telefónico, por favor.');
                } else
                if (!jQuery('#contact_mensaje').val()) {
                  alert('Escríbenos tu mensaje.');
                }
              });
        </script>

    </div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
