<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$heading = get_field('heading');
$lists = get_field('lists');
do_action( 'woocommerce_before_customer_login_form' ); ?>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

<div class="u-columns col2-set" id="customer_login">

	<div class="u-column1 col-1">

<?php endif; ?>
		<div class="row">
			<div class="col-lg-5 col-12 pe-lg-4 tmb-80">
				<div class="pe-lg-3">
					<h2 class="classic font-35 leading-40 text-2C2924 dmb-45"><?php esc_html_e( 'Login', 'woocommerce' ); ?></h2>
					<form class="woocommerce-form woocommerce-form-login login p-0 border-0 m-0" method="post">
						<?php do_action( 'woocommerce_login_form_start' ); ?>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide p-0 mb-4">
							<label for="username" class="classic font-15 leading-16 text-2C2924 mb-2"><?php esc_html_e( 'Email Address', 'woocommerce' ); ?>&nbsp;<span class="required text-2C2924">*</span></label>
							<input placeholder="Please enter…" type="text" class="woocommerce-Input woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924" name="username" id="username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
						</p>
						<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide p-0 mb-4">
							<label for="password" class="classic font-15 leading-16 text-2C2924 mb-2"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required text-2C2924">*</span></label>
							<input placeholder="Please enter…" class="woocommerce-Input woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924" type="password" name="password" id="password" autocomplete="current-password" />
						</p>
						<?php do_action( 'woocommerce_login_form' ); ?>
						<div class="d-flex flex-wrap align-items-center justify-content-between">
							<p class="form-row p-0 mb-lg-0 tmb-40">
								<!-- <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
									<input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
								</label> -->
								<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
								<button type="submit" class="woocommerce-button woocommerce-form-login__submit<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> btnA w-204px bg-BDA673-btn classic font-15 leading-16 fw-normal" name="login" value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Login', 'woocommerce' ); ?></button>
							</p>
							<p class="woocommerce-LostPassword lost_password classic font-12 leading-16 spacing-1_2 text-2C2924">
								FORGOT YOUR PASSWORD? <a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" class="classic font-12 leading-16 spacing-1_2 text-2C2924"><?php esc_html_e( 'RESET HERE', 'woocommerce' ); ?></a>
							</p>
						</div>
	
						<?php do_action( 'woocommerce_login_form_end' ); ?>
	
					</form>
				</div>
			</div>
			<div class="col-lg-5 col-12 ms-auto">
				<div class="col-lg-10 col-11">
				<?php if(!empty($heading)): ?>
					<h2 class="classic font-31 leading-40 text-2C2924 dmb-40 tmb-25"><?php echo $heading; ?></h2>
					<?php endif; ?>
					<?php if(!empty($lists)): ?>
					<ul class="login-radio-check list-none ps-0 mb-0">
					<?php foreach($lists as $list_custom): ?>
						<li class="classic font-15 leading-20 text-2C2924 d-flex align-items-center dmb-35 main-label">
							<input type="checkbox" checked name="" class="login-check-input me-3">
							<span class="position-absolute top-0 start-0 rounded-circle login-checkmark rounded-circle"></span>
							<?php echo $list_custom['list']; ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			</div>
		</div>

<?php if ( 'yes' === get_option( 'woocommerce_enable_myaccount_registration' ) ) : ?>

	</div>

	<div class="u-column2 col-2">

		<h2><?php esc_html_e( 'Register', 'woocommerce' ); ?></h2>

		<form method="post" class="woocommerce-form woocommerce-form-register register" <?php do_action( 'woocommerce_register_form_tag' ); ?> >

			<?php do_action( 'woocommerce_register_form_start' ); ?>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_username"><?php esc_html_e( 'Username', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" autocomplete="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
				</p>

			<?php endif; ?>

			<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
				<label for="reg_email"><?php esc_html_e( 'Email address', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
				<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( wp_unslash( $_POST['email'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
			</p>

			<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

				<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
					<label for="reg_password"><?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span class="required">*</span></label>
					<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" autocomplete="new-password" />
				</p>

			<?php else : ?>

				<p><?php esc_html_e( 'A link to set a new password will be sent to your email address.', 'woocommerce' ); ?></p>

			<?php endif; ?>

			<?php do_action( 'woocommerce_register_form' ); ?>

			<p class="woocommerce-form-row form-row">
				<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
				<button type="submit" class="woocommerce-Button woocommerce-button button<?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ? ' ' . wc_wp_theme_get_element_class_name( 'button' ) : '' ); ?> woocommerce-form-register__submit" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>"><?php esc_html_e( 'Register', 'woocommerce' ); ?></button>
			</p>

			<?php do_action( 'woocommerce_register_form_end' ); ?>

		</form>

	</div>

</div>
<?php endif; ?>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
