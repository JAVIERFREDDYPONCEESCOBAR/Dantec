
<?php 


$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";



get_header(); ?>
<div class="container-fluid nosidepadding maincontent">
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-3">



<?php wc_print_notices(); ?>







<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>

<!-- <div class="row" id="customer_login" id="customer_login"> -->

	<div class="u-column1 col-md-9"  id="resultado_consulta_r">

<?php endif; ?>

		<h2 id="titulo_web"><?php _e( 'Login', 'woocommerce' ); ?></h2>

		<form class="woocommerce-form woocommerce-form-login login" method="post" id="el_login">

			<?php do_action( 'woocommerce_login_form_start' ); ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
			</p>
			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
				<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
			</p>

			<?php do_action( 'woocommerce_login_form' ); ?>

			<p class="form-row ">
				<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
				<input type="submit" class="woocommerce-Button button" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />



				<input type="button" class="woocommerce-Button button" id="register_one" name="register_one" value="Registrarme">
			</p>

			<p class="form-row">
			<p class="woocommerce-LostPassword lost_password">
				<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a></p>
			

<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
					<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php _e( 'Remember me', 'woocommerce' ); ?></span>
				</label></p>


			
			
			<?php do_action( 'woocommerce_login_form_end' ); ?>



		</form>


<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
</div>
<!-- </div> -->
</div>
</div>
<?php
do_action( 'storefront_sidebar' );
get_footer();

