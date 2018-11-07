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
            <h1 class='mb-1'>Buscar</h1>
            <div class='customborder mb-4'></div>
        </div>
    </div>
		<div class='jumbotron gray'>
				<div class='col-md-8 mx-auto'>
					<form action='/' id='search' method='GET'>
						<div class='row'>
							<div class='col-md-8'>
								<input class='form-control' id='s' name='s' type='text'>
							</div>
							<div class='col-md-4 w-100'>
								<div class='actions'>
									<input class='btn btn-azul mb-2 w-100' type='submit' value='Enviar'>
								</div>
							</div>
						</div>
					</form>
				</div>
		</div>
		<div class='container-fluid contact'>
				<h2 class='text-center mb-1'>Contáctanos</h2>
				<div class='customborder mb-4'></div>
				<div class='row align-items-center'>
						<div class='col-md-6'>
								<div class='col-md-10 col-12 col-center info'>
										<div class='row'>
												<div class='col-md-6 col-12 mx-auto'>
														<div class='text-center'>
																<i aria-hidden='true' class='fa fa-phone'></i>
														</div>
														<p class='big text-center'>Teléfonos</p>
														<p class='text-center'>(55) 55 90 67 80 <br> Internacional: +52 (55) 55 90 67 80</p>
												</div>
												<div class='col-md-6 col-12 text-center'>
														<i aria-hidden='true' class='fa fa-envelope-o'></i>
														<p class='big'>Correo electrónico</p>
														<a href='mailto:dantec@dantec.com.mx'>dantec@dantec.com.mx</a>
												</div>
												<div class='col-md-8 col-12 mx-auto'>
														<div class='text-center'>
																<i aria-hidden='true' class='fa fa-map-marker'></i>
														</div>
														<p class='big text-center'>Dirección</p>
														<p class='text-center'>Plutarco Elías Calles No.1011 <br>Col. Iztaccihuatl, Benito Juárez, 03520, <br>Ciudad de México</p>
												</div>
										</div>
								</div>
								<div class='clearfix'></div>
						</div>
						<div class='col-md-6'>
								<div class='col-10 col-center'>
										<form class="new_contact" id="new_contact" action="/contacts" accept-charset="UTF-8" method="post"><input name="utf8" type="hidden" value="&#x2713;" /><input type="hidden" name="authenticity_token" value="Go08hM2xwvAPpnA0cQXrwa2AlajWLAZoVCy6/hrHPoO5XTnakvP9L2oqg2TaLACaqEUV0XUQ5O6t35bPybjs9A==" />
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
										</form>
								</div>
								<div class='clearfix'></div>
						</div>
				</div>
		</div>
		<script type="text/javascript">
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
