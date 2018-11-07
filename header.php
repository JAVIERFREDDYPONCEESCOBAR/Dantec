<!doctype html>
<html <?php language_attributes(); ?>>

<?php 
if (empty($_COOKIE["micokkie"])) {
  
?>

<div id="form_footer">
<p>Usamos cookies para garantizar que le brindemos la mejor experiencia en nuestro sitio web. Si continúa utilizando este sitio, asumiremos que está satisfecho con él. </p>
 <input type="button" name="uso_kookie" id="uso_kookie" value="Aceptar">
</div>

<?php }else{} ?>

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link crossorigin='anonymous' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css' integrity='sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ' rel='stylesheet'>
<link crossorigin='anonymous' href='<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Abel|Montserrat:500|Open+Sans:400,700' rel='stylesheet'>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/js/css/animate.min.css"/>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/application-bfdbe7904bd4253bcf62b6becd735c5fa32717b92d4ffab87cc2871dea099258.css?ver=drqe3ddzwxwr3e4437d4y3d3dea"/>

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/estilos.css"/>


<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#000000">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">



<?php 

$actual_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
if (($actual_url=='http://0jv.321.myftpupload.com/')&&(!empty(get_option('promociones')) )) { ?>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Promociones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="<?php echo get_option('promociones'); ?>">
      </div>
<!--       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<?php }else{ } ?>

<?php wp_head(); ?>


</head>








<body <?php
$img_uso_de_producto = get_post_meta($post->ID, 'img_uso_product', true);
$video_ejemplo = get_post_meta($post->ID, 'mi_url_video', true);

 ?> >
















	<div style='position: relative;'>
      <nav class='navbar navbar-toggleable-md navbar-light'>
          <button aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation' class='navbar-toggler navbar-toggler-right' data-target='#navbarNav' data-toggle='collapse' type='button'>
						<span class='navbar-toggler-icon'></span>
					</button>
          <div class='navbar-brand'><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo-4b3a13d353fc41e139657401a974f3b1833f03b94251ce417686e36713f6daa9.png" alt="Logo 4b3a13d353fc41e139657401a974f3b1833f03b94251ce417686e36713f6daa9" /></a></div>
          <div class='collapse navbar-collapse' id='navbarNav'>
              <ul class='navbar-nav ml-auto'>
                  <!--<li class='nav-item text-center'>
                      <a class='nav-link' href='/'>
												<i aria-hidden='true' class='fa fa-home'></i>
											</a>
                  </li>-->
                  <li class='nav-item text-center'>
                      <a class="nav-link" href="/marcas">marcas</a>
                  </li>
                  <li class='nav-item text-center hidden-xs-down'>
                      <a class="dsprod nav-link" id="productos" href="/categoria-producto/vikan/">productos</a>
                  </li>
                  <li class="nav-item text-center dropdown hidden-sm-up">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class='dropdown-item marca' href='/categoria-producto/vikan/'>Vikan</a>
                      <a class='dropdown-item marca' href='/categoria-producto/robert-scott/'>Robert Scott</a>
                      <a class='dropdown-item marca' href='/categoria-producto/detectamet/'>Detectamet</a>
                      <a class='dropdown-item marca' href='/categoria-producto/cmt/'>CMT</a>
                      <a class='dropdown-item marca' href='/categoria-producto/paxxo/'>Paxxo</a>
                      <a class='dropdown-item marca' href='/categoria-producto/ntf-aalborg/'>NTF Aalborg</a>
                      <a class='dropdown-item marca' href='/categoria-producto/blucher/'>Blücher</a>
                      <a class='dropdown-item marca red' href='/outlet'>Outlet</a>
                    </div>
                  </li>
                  <li class='nav-item text-center'>
                      <a class="nav-link" href="/catalogo">catálogo</a>
                  </li>
                  <!-- <li class='nav-item text-center'>
                      <a class="nav-link" href="/quienes-somos">quiénes somos</a>
                  </li> -->
                  <li class='nav-item text-center'>
                      <a class='nav-link' href='/blog'>Noticias</a>
                  </li>
                  <li class='nav-item text-center'>
                      <a class="nav-link" href="/contacto">contacto</a>
                  </li>
                  <li class='nav-item text-center'>
                      <a class="nav-link" href="/mi-cuenta">Login</a>
                  </li>
      <!--             <li class='nav-search d-none'>
                    <form style="margin: 0;
                                vertical-align: bottom;
                                line-height: 1;" action="/">
                      <input type="text" name="s" value="" style="
                        margin: 0;
                        padding: 0;
                        max-width: 150px;
                        display: inline-block;
                        vertical-align: bottom;">
                      <input class="btn btn-contact" type="submit" value="Buscar" style="
                        height: 25px;
                        max-width: 80px;
                        padding: 0;
                        border-radius: 0;
                        font-size: 10px;
                        text-transform: uppercase;
                        line-height: 1;
                        width: 100%;
                        margin: auto;
                        vertical-align: bottom;
                        display: block;">
                    </form>
                  </li> -->
                  <li class='nav-item searcher text-center'>
                      <a id="lupa_buscar" class="nav-link">&nbsp;<i class="fa fa-search" aria-hidden="true"></i>&nbsp;</a>
                  </li>
                  <li class='nav-item chat'>
                      <a class='nav-link' href='https://hostedusa5.whoson.com/chat/chatstart.aspx?domain=www.dantec.mx&amp;AspxAutoDetectCookieSupport=1&amp;SID=0' target='_blank'>
                        <img class="img-responsive" src="<?php echo home_url(); ?>/wp-content/themes/storefront/assets/iconno_chat.png"/></a>
                  </li>


<?php if ( is_user_logged_in() ) { ?>


                  <li class="nav-item carrito">

 <div class="menu-shop">
<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>">
  <div style="font-size:1em; color:white">
  <i class="fas fa-cart-plus"></i>

<?php echo sprintf (_n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> <!-- - --> <?php //echo WC()->cart->get_cart_total(); ?>

</div>
</a>
</div>
                  </li>

<?php } else { ?>

<?php } ?>

              </ul>
          </div>
      </nav>

<div class="mi_buscador" id="mi_buscador">
  <div class="container">
    <div class="col-md-12">
                    <form action="/" class="form-inline">
                      <input class="busqueda_texto" type="text" name="s" value="" >
                       <!--<input type="hidden" name="post_type" value="product" />
                      <input class="btn btn-contact" type="submit" value="Buscar"> -->
                    </form>
    </div>
  </div>
</div>


      <div class='white menumarca dsprod hidden'>
          <div class='row'>
              <div class='col-md-4 col-12'>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/vikan/'>Vikan</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <a class='linea' href='/categoria-producto/vikan/vikan-hygiene-system/'>Vikan Hygiene System</a>
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/cepillos-de-mano/'>Cepillos de mano</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/cepillos-para-equipos/'>Cepillos para equipos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/escobillones-vikan-hygiene-system/'>Escobillones</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/escobas-y-cepillos-para-pisos-o-paredes/'>Escobas y cepillos para pisos o paredes</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/escobas-y-cepillos-ust/'>Escobas y cepillos UST</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/jalador-para-condensado/'>Jalador para condensado</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/jaladores-y-repuestos-de-casete/'>Jaladores y repuestos de casete</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/mangos/'>Mangos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/espatulas-y-raspadores/'>Espátulas y raspadores</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/cubetas-y-recogedores/'>Cubetas y recogedores</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/portautensilios/'>Portautensilios</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/portafibras-y-fibras/'>Portafibras y fibras</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/cucharas/'>Cucharas</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/palas/'>Palas</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/agitadores/'>Agitadores</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/utensilios-detectables/'>Utensilios detectables</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/espumadoras-vikan-hygiene-system/'>Espumadoras</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/pistolas-de-agua-y-mangueras/'>Pistolas de agua y mangueras</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-hygiene-system/coples/'>Coples</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class='hidden-sm-down'>
                                  <a class='linea' href='/categoria-producto/vikan/vikan-linea-microfibra/'>Vikan Línea Microfibra</a>
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-microfibra/mops-y-trapos/'>Mops y trapos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-microfibra/portamops/'>Portamops</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-microfibra/mangos-con-sistema-clic-y-accesorios/'>Mangos con sistema clic y accesorios</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-microfibra/carritos-de-limpieza/'>Carritos de limpieza</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class='hidden-sm-down'>
                                  <a class='linea' href='/categoria-producto/vikan/vikan-linea-transport/'>Vikan Línea Transport</a>
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-transport/escobas-y-cepillos/'>Escobas y cepillos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-transport/mangos-vikan-linea-transport/'>Mangos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/vikan/vikan-linea-transport/varios/'>Varios</a>
                                      </li>
                                  </ul>
                              </li>
                              <li class='hidden-sm-down'>
                                  <a class='linea' href='/categoria-producto/vikan/vikan-kits/'>Vikan Kits</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class='col-md-4 col-12'>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/robert-scott/'>Robert Scott</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <!--<a class='linea' href='/categoria-producto/robert-scott/'>Robert Scott – Trapeadores</a>-->
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/robert-scott/robert-scott-trapeadores/trapeadores/'>Trapeadores</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/robert-scott/robert-scott-trapeadores/robert-scott-trapeadores-mangos/'>Mangos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/robert-scott/robert-scott-trapeadores/cubetas/'>Cubetas</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/detectamet/'>Detectamet</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <!--<a class='linea' href='/categoria-producto/detectamet/detectamet-productos-detectables/'>Detectamet – Productos detectables</a>-->
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/boligrafos/'>Bolígrafos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/articulos-de-oficina-detectables/'>Artículos de oficina detectables</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/utensilios-y-accesorios-para-proceso-detectables/'>Utensilios y accesorios para proceso detectables</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/identificadores-detectables/'>Identificadores detectables</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/articulos-de-proteccion-personal-detectables/'>Artículos de protección personal detectables</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/cortadores-de-seguridad-detectables/'>Cortadores de seguridad detectables</a>
                                      </li>

                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/detectamet/detectamet-productos-detectables/sujetadores-y-cintillos-detectables/'>Sujetadores y cintillos detectables</a>
                                      </li>


                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/cmt/'>CMT</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <!--<a class='linea' href='/categoria-producto/cmt/cmt-ropa-desechable/'>CMT – Ropa desechable</a>-->
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/cmt/cmt-ropa-desechable/cofias-cubremangas-y-cubrezapatos/'>Cofias, cubremangas y cubrezapatos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/cmt/cmt-ropa-desechable/mandiles/'>Mandiles</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/cmt/cmt-ropa-desechable/batas-y-cubrebocas/'>Batas y cubrebocas</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
              <div class='col-md-4 col-12'>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/paxxo/'>Paxxo</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <!--<a class='linea' href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/'>Paxxo – Manejo de desechos</a>-->
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/longopac-stand/'>Longopac Stand ®</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/paxxo/paxxo-manejo-de-desechos/longopac/'>Longopac ®</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/ntf-aalborg/'>NTF Aalborg</a>
                          <ul class='px-0'>
                              <li class='hidden-sm-down'>
                                  <!--<a class='linea' href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/'>NTF – Colgadores de acero inoxidable</a>-->
                                  <ul class='px-0'>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/colgadores/'>Colgadores</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/secabotas-ntf-colgadores-de-acero-inoxidable/'>Secabotas</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/cestos/'>Cestos</a>
                                      </li>
                                      <li class='hidden-sm-down'>
                                          <a class='grupo' href='/categoria-producto/ntf-aalborg/ntf-colgadores-de-acero-inoxidable/varios-ntf-colgadores-de-acero-inoxidable/'>Varios</a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
                  <ul>
                      <li>
                          <a class='marca' href='/categoria-producto/blucher/'>Blücher</a>
                          <ul class='px-0'>
                            <li class='hidden-sm-down'>
                                <!--<a class='linea' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/'>Blücher – Drenajes de acero inoxidable</a>-->
                              <ul class='px-0'>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/hygienicpro/'>HygienicPro®</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-industriales/'>Coladeras industriales</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-kitchen/'>Coladreas Kitchen</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/canaletas-industriales/'>Canaletas industriales</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/tapas-para-registros/'>Tapas para registros</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/coladeras-semi-industriales/'>Coladeras semi-industriales</a>
                                </li>
                                <li class='hidden-sm-down'>
                                    <a class='grupo' href='/categoria-producto/blucher/blucher-drenajes-de-acero-inoxidable/tuberia-europipe/'>Tubería Europipe</a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                      </li>
                  </ul>
				  <ul>
                      <li>
                          <a class='marca red' href='/outlet'>Outlet</a>
                      </li>
                  </ul>

              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
		jQuery(".dsprod").hover(function(){
		  jQuery('.menumarca').removeClass('hidden');
		});
		jQuery(".dsprod").hover(function(){
		    jQuery('.menumarca').removeClass('hidden');
		},function(){
		    jQuery('.menumarca').addClass('hidden');
		});
  </script>
