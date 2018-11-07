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
    <div class='container'>
        <div class='jumbotron about text-center'>
            <h1 class='mb-1'>Quiénes somos</h1>
            <div class='customborder mb-4'></div>
        </div>
        <div class='row'>
            <div class='col-md-6 hidden-sm-down'>
                <img class="img-fluid" src="http://0jv.321.myftpupload.com/wp-content/uploads/2018/05/quienes-somos-background.png" alt="Quienes somos dantec 158f6d00f3d993768f2da4259ca749fc5956d4413a93ba6a9c15544fde45a113" />
            </div>
            <div class='col-md-6 col-11 mx-auto about'>
                <p>El objetivo estratégico que Dantec tiene como compañía es ofrecer productos premium y a través de ellos facilitar a las empresas el aseguramiento de food safety, haciendo que sus consumidores puedan Disfrutar sin dudar.</p>
                <p>En México, como en cualquier otro país del mundo, el concepto food safety juega un papel primordial en las actividades cotidianas de las industrias, como son la limpieza de las áreas de trabajo y la higiene en los procesos de producción
                    alimentaria, ¡con las herramientas adecuadas, obtendrás resultados eficientes y seguros!</p>
                <p>Desde 1993 hemos trabajado en la importación, comercialización y distribución de utensilios de limpieza y soluciones de higiene que las industrias, como la alimentaria y la farmacéutica, exigen para mantener sus instalaciones limpias
                    y en óptimas condiciones.</p>
                <p>Queremos proporcionar a nuestros clientes diversas opciones de productos duraderos y funcionales, para ello contamos con la experiencia de proveedores internacionales que enriquecen a Dantec con la calidad de sus materiales y propuestas.</p>
                <p>En Dantec tenemos el compromiso de hacer a tus consumidores Disfrutar sin dudar con nuestras soluciones.</p>
            </div>
        </div>
        <div class='clearfix'></div>
    </div>
    <div class='clearfix'></div>

</div>

<?php
do_action( 'storefront_sidebar' );
get_footer();
