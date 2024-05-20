<?php
/**
 * Lost password form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-lost-password.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_lost_password_form');
?>

<form method="post" class="woocommerce-ResetPassword lost_reset_password">
	<div class="col-lg-5">
		<div class="col-lg-11 pe-lg-3">
			<h2 class="classic font-35 leading-40 text-2C2924 dmb-40 tmb-30"><?php esc_html_e('Password Reset', 'woocommerce');?></h2>
			<p class="classic font-15 leading-26 text-2C2924 opacity-72 dmb-25 tmb-35"><?php echo apply_filters('woocommerce_lost_password_message', esc_html__('Please enter your email below to receive a password reset link', 'woocommerce')); ?></p><?php // @codingStandardsIgnoreLine ?>

			<p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first w-100 p-0 mb-lg-4 tmb-35">
				<label for="user_login" class="classic font-15 leading-16 text-2C2924 mb-2"><?php esc_html_e('Email Address', 'woocommerce');?></label>
				<input placeholder="Please enter…" class="woocommerce-Input woocommerce-Input--text input-text login-input border-0 px-4 dpt-20 dpb-20 classic font-15 leading-16 text-2C2924" type="text" name="user_login" id="user_login" autocomplete="username" />
			</p>

			<div class="clear"></div>

			<?php do_action('woocommerce_lostpassword_form');?>

			<div class="d-flex align-items-center flex-wrap">
				<p class="woocommerce-form-row form-row p-0 mb-lg-0 me-5 tmb-30">
					<input type="hidden" name="wc_reset_password" value="true" />
					<button type="submit" class="woocommerce-Button <?php echo esc_attr(wc_wp_theme_get_element_class_name('button') ? ' ' . wc_wp_theme_get_element_class_name('button') : ''); ?> btnA w-204px bg-BDA673-btn classic font-15 leading-16 fw-normal" value="<?php esc_attr_e('Reset password', 'woocommerce');?>"><?php esc_html_e('Reset My password', 'woocommerce');?></button>
				</p>
				<div class="classic font-12 leading-16 spacing-1_2 text-2C2924">
					BACK TO <a href="<?php echo get_home_url(); ?>/my-account" class="classic font-12 leading-16 spacing-1_2 text-2C2924">LOGIN</a>
				</div>
			</div>

			<?php wp_nonce_field('lost_password', 'woocommerce-lost-password-nonce');?>
		</div>
	</div>
</form>
<?php
do_action('woocommerce_after_lost_password_form');
