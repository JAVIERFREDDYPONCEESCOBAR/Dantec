<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
<hr style="margin: 20px 0 10px 0;">
	<footer class='footer'>
      <div class='container-fluid'>
          <div class='row align-items-center justify-content-center'>
              <div class='col-lg-auto col-md-4 text-center copyright'>
                  <p>© 2018 Dantec S.A. de C.V. | Sitio desarrollado por <a href="https://kleinundgross.net/" target="_blank"> KuG </a> </p>
              </div>
              <div class='col-lg-auto col-md-4 text-center aviso-privacidad'>
                  <a data-target='.privacidad' data-toggle='modal' href='#'>Aviso de Privacidad</a>
              </div>
              <div class='col-lg-auto col-md-4 text-center social-media'>
<?php if( get_option('Facebook')=='' ){ }else{ ?>
     <div class='icon'>
       <a href="<?php echo get_option('Facebook'); ?>" target="_blank" >
        <!-- <div class="footer-facebook "></div> -->
        <img class="img-fluid sicon" src="<?php echo get_template_directory_uri(); ?>/assets/facebook-4aa1732d9af58722d3badc3c4026d6d4138410fbb1ce40a92f7d9f86d3c2b7b6.png" alt="Facebook 4aa1732d9af58722d3badc3c4026d6d4138410fbb1ce40a92f7d9f86d3c2b7b6" />
      </a>
      </div>
<?php } ?>

<?php if( get_option('Instagram')=='' ){ }else{ ?>
       <div class='icon'>
     <a href="<?php echo get_option('Instagram'); ?>" target="_blank" >
       <div class="footer-instagram"></div>
     </a>
      </div>
<?php } ?>

<?php if( get_option('LinkedIn')=='' ){ }else{ ?>
       <div class='icon'>
      <a href="<?php echo get_option('LinkedIn'); ?>" target="_blank" >
       <!-- <div class="footer-linkedin"></div> -->
       <img class="img-fluid sicon" src="<?php echo get_template_directory_uri(); ?>/assets/linkedin-f39e989020371bd11ffe5d7d455d9b7841a2c84903a04235c0c005c97301a819.png" alt="Linkedin f39e989020371bd11ffe5d7d455d9b7841a2c84903a04235c0c005c97301a819" />
     </a>
      </div>
<?php } ?>

<?php if( get_option('Youtube')=='' ){ }else{ ?>
     <div class='icon'>
      <a href="<?php echo get_option('Youtube'); ?>" target="_blank" >
       <div class="footer-youtube"></div>
     </a>
      </div>
<?php } ?>

<?php if( get_option('Twitter')=='' ){ }else{ ?>
       <div class='icon'>
     <a href="<?php echo get_option('Twitter'); ?>" target="_blank" >
       <!-- <div class="footer-twitter"></div> -->
        <img class="img-fluid sicon" src="<?php echo get_template_directory_uri(); ?>/assets/twitter-772ca0bf45b18546cc5a7ad9c4a7586f6ea9bcbf55a2b169fba884282cc87173.png" alt="Twitter 772ca0bf45b18546cc5a7ad9c4a7586f6ea9bcbf55a2b169fba884282cc87173" />
     </a>
      </div>
<?php } ?>

<?php if( get_option('Pinterest')=='' ){ }else{ ?>
       <div class='icon'>
        <a href="<?php echo get_option('Pinterest'); ?>" target="_blank" >
       <div class="footer-pinterest"></div>
        </a>
      </div>
<?php } ?>


<?php if( get_option('googleplus')=='' ){ }else{ ?>
       <div class='icon'>
        <a href="<?php echo get_option('googleplus'); ?>" target="_blank" >
       <div class="footer-googleplus"></div>
        </a>
      </div>
<?php } ?>

<?php if( get_option('Vimeo')=='' ){ }else{ ?>
      <div class='icon'>
        <a href="<?php echo get_option('Vimeo'); ?>" target="_blank" >
       <div class="footer-Vimeo"></div>
        </a>
       </div>
<?php } ?>




 <!--                  <div class='icon'>
                      <a target="_blank" href="https://www.facebook.com/DantecMex/">

                        <img class="img-fluid sicon" src="<?php //echo get_template_directory_uri(); ?>/assets/facebook-4aa1732d9af58722d3badc3c4026d6d4138410fbb1ce40a92f7d9f86d3c2b7b6.png" alt="Facebook 4aa1732d9af58722d3badc3c4026d6d4138410fbb1ce40a92f7d9f86d3c2b7b6" /></a>
                  </div>
                  <div class='icon'>
                      <a target="_blank" href="https://www.linkedin.com/company/2691712/"><img class="img-fluid sicon" src="<?php //echo get_template_directory_uri(); ?>/assets/linkedin-f39e989020371bd11ffe5d7d455d9b7841a2c84903a04235c0c005c97301a819.png" alt="Linkedin f39e989020371bd11ffe5d7d455d9b7841a2c84903a04235c0c005c97301a819" /></a>
                  </div>
                  <div class='icon'>
                      <a target="_blank" href="https://twitter.com/DantecMexico"><img class="img-fluid sicon" src="<?php //echo get_template_directory_uri(); ?>/assets/twitter-772ca0bf45b18546cc5a7ad9c4a7586f6ea9bcbf55a2b169fba884282cc87173.png" alt="Twitter 772ca0bf45b18546cc5a7ad9c4a7586f6ea9bcbf55a2b169fba884282cc87173" /></a>
                  </div> -->


              </div>
              <div class='col-lg-auto col-md-12 partner'>
                  <div class='partners'>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/front/logo-ehedg.png" alt="Logo EHEDG" />
                  </div>
                  <div class='partners'>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/issa-c813f6d885e8ec412f01ecd534822c5498b4ce7056baed2a5086cdc360de37c2.png" alt="Issa c813f6d885e8ec412f01ecd534822c5498b4ce7056baed2a5086cdc360de37c2" />
                  </div>
                  <div class='partners'>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/canilec-5900168cf7409c3057625cc387ee5a21b21e917903ca85b8571c2a09f1a37725.png" alt="Canilec 5900168cf7409c3057625cc387ee5a21b21e917903ca85b8571c2a09f1a37725" />
                  </div>
                  <div class='partners'>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/someicca-431b7288566e0b41500c9b03954e452789fa7d4f6f813ff25d904a0e71cfa474.png" alt="Someicca 431b7288566e0b41500c9b03954e452789fa7d4f6f813ff25d904a0e71cfa474" />
                  </div>
                  <div class='partners'>
                      <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/cndcm-ac70e4f63c48367beebfbaa809f560deb479ec4dd37a12a2cfff2771d4fb3dfd.png" alt="Cndcm ac70e4f63c48367beebfbaa809f560deb479ec4dd37a12a2cfff2771d4fb3dfd" />
                  </div>
              </div>
              <div class='clearfix'></div>
          </div>
      </div>
  </footer>



	<div aria-hidden='true' aria-labelledby='myLargeModalLabel' class='modal fade privacidad' role='dialog' tabindex='-1'>
      <div class='modal-dialog modal-lg'>
          <div class='modal-content'>
              <div class='modal-header'>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-4b3a13d353fc41e139657401a974f3b1833f03b94251ce417686e36713f6daa9.png" alt="Logo 4b3a13d353fc41e139657401a974f3b1833f03b94251ce417686e36713f6daa9" />
                  <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
										<span aria-hidden='true'>×</span>
									</button>
              </div>
              <div class='modal-body'>
                  <h2>Aviso de Privacidad</h2>
                  <p>De acuerdo con los requisitos establecidos en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, en sus artículos 8, 15, 16, 17, 18 y 36 expresamos que Dantec S.A. de C.V. con domicilio en Plutarco Elías Calles No.1011, Col. Iztaccihuatl, Benito Juárez, 03520 Ciudad de México es responsable de recabar sus datos personales, del uso que se le dé a los mismos y de su protección.</p>
                  <p>Su información personal será utilizada con la nalidad de proveer los servicios y productos que ha solicitado, informarle sobre cambios en los mismos y evaluar la calidad de los servicios que le brindamos, por lo que requerimos obtener
                      los siguientes datos personales: nombre y dirección de correo electrónico, considerados como sensibles, según la Ley antes mencionada. Dantec S.A. de C.V. no compartirá, sin su consentimiento previo, sus datos personales con
                      terceros, nacionales o extranjeros.</p>
                  <p>
                      Usted como titular de datos personales podrá, solicitar el acceso, recti cación, cancelación u oposición (derechos ARCO), respecto de sus datos personales y el tratamiento de los mismos a través de los procedimientos que hemos implementado. Para
                      conocer dichos procedimientos, los requisitos y plazos, se pueden poner en contacto con nosotros a través de la dirección de correo:
                      <a href='mailto:dantec@dantec.com.mx'>dantec@dantec.com.mx</a> o mediante el formulario de contacto de nuestro sitio en internet:
                      <a href='www.dantec.com.mx'>www.dantec.com.mx</a>
                  </p>
                  <p>Si usted desea dejar de recibir mensajes promocionales de nuestra parte puede solicitarlo a través del link suscrito en cada aviso promocional o solicitarlo directamente a la cuenta de correo dantec@dantec.com.mx o mediante el formulario
                      de contacto de nuestro sitio en internet: www.dantec.com.mx <br> Cualquier modi cación a este aviso de privacidad podrá consultarse en nuestro sitio web www.dantec.com.mx</p>
                  <p>Fecha de última actualización 15/12/2012</p>
                  <hr>
                  <p class='foot text-center'>Dantec, S.A. de C.V. | Plutarco Elías Calles No.1011, Col. Iztaccihuatl, Benito Juárez, 03520 Ciudad de México | Tel.: +52 (55) 5590-6780 | dantec@dantec.com.mx | Aviso de privacidad</p>
              </div>
          </div>
      </div>
  </div>

  <div id="videoPopupModal" class='modal' role='dialog' tabindex='-1'>
      <div class='modal-dialog modal-lg' role="document">
          <div class='modal-content'>
              <div class='modal-header' style="display: block;">
                  <button aria-label='Close' class='' data-dismiss='modal' type='button' style="font-size: 4em;
    vertical-align: middle;
    line-height: 1;
    float: right;
    border: 0;
    background: transparent;
    margin: 0;
    padding: 0;
    position: relative;">
                    <span aria-hidden='true'>×</span>
                  </button>
              </div>
              <div class='modal-body'>
              </div>
          </div>
      </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/application-main.js?v" ></script>
<script crossorigin='anonymous' integrity='sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb' src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/application-d556072dd9f77751e63726f5be49d4b4467870060b07a68ef3f816192c66449b.js" data-turbolinks-track="true"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/storefront/assets/int_tema/js/drupal.js"></script>
<script type="text/javascript" src="/wp-content/themes/storefront/assets/int_tema/js/cloud-zoom.1.0.3.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/storefront/assets/int_tema/js/cloud_zoom.js"></script>
<script type="text/javascript" src="/wp-content/themes/storefront/assets/int_tema/js/states.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fontawesome-all.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script> themeurl = '<?php echo get_template_directory_uri(); ?>';  </script>
<script src="/wp-content/themes/storefront/assets/js/administrador/mi_ajax.js?ver=dexw3"></script>



	</body>
</html>
