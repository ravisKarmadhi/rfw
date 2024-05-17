<?php
/**
 * Checkout Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/form-checkout.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_checkout_form', $checkout );

// If checkout registration is disabled and not logged in, the user cannot checkout.
if ( ! $checkout->is_registration_enabled() && $checkout->is_registration_required() && ! is_user_logged_in() ) {
	echo esc_html( apply_filters( 'woocommerce_checkout_must_be_logged_in_message', __( 'You must be logged in to checkout.', 'woocommerce' ) ) );
	return;
}

?>
<div class="delivery-details d-flex container-checkbox-password ps-0">
	<div class="delivery-btn-main w-100">
		<!-- <input type="radio" checked name="checkout-radio" id="checkout-radio-1">
		<label for="checkout-radio-1" class="font-sackers fontS leading16 spacing1-2 textlight-border position-relative cursor-pointer w-100 fw-400">delivery details</label> -->

		<label class="container-checkbox-password dmsans-regular textblack fontS textblack text-nowrap ms-lg-0 me-4 position-relative d-flex align-items-center" for="checkout-radio-1">
			<span>
				delivery details
			</span>
			<input type="radio" class="position-absolute opacity-0" checked name="checkout-radio" id="checkout-radio-1">
			<span class="checkmark position-absolute top-0 start-0 bg-transparent rounded-circle  border-lightgray"></span>
		</label>
	</div>
	<div class="payment-btn-main w-100">
		<!-- <input type="radio" name="checkout-radio" id="checkout-radio-2">
		<label class="font-sackers w-100 fontS fw-400 leading16 spacing1-2 textlight-border position-relative cursor-pointer payment-details" for="checkout-radio-2">review & payments</label> -->
		<label class="container-checkbox-password disable dmsans-regular textblack fontS textblack text-nowrap ms-lg-0 me-4 position-relative d-flex align-items-center" for="checkout-radio-2">
			<span>
				review & payments
			</span>
			<input type="radio" class="position-absolute opacity-0" checked name="checkout-radio" id="checkout-radio-2">
			<span class="checkmark position-absolute top-0 start-0 bg-transparent rounded-circle  border-lightgray"></span>
		</label>
	</div>
</div>
<form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url(wc_get_checkout_url()); ?>" enctype="multipart/form-data">
	<div class="d-lg-flex justify-content-between billing-method-checkout-page ">
		<div class="checkout-left-content dpb-100">
			<?php if ($checkout->get_checkout_fields()) : ?>

				<?php do_action('woocommerce_checkout_before_customer_details'); ?>

				<div class="" id="customer_details">

					<div class="second-option">
						<?php do_action('woocommerce_checkout_billing'); ?>
					</div>

					<div class="second-option master-second-part">
						<?php do_action('woocommerce_checkout_shipping'); ?>
					</div>
				</div>

				<?php do_action('woocommerce_checkout_after_customer_details'); ?>
			<?php endif; ?>
		</div>

		<?php do_action('woocommerce_checkout_before_order_review_heading'); ?>


		<div class="checkout-right-content tmt-50">
			<?php do_action('woocommerce_checkout_before_order_review'); ?>

			<div id="order_review" class="woocommerce-checkout-review-order">
				<div class="d-flex">
					<h2>Your Order</h2>
					<a href="<?php echo get_home_url(); ?>/cart">Amend</a>
				</div>
				<?php do_action('woocommerce_checkout_order_review'); ?>

			</div>

			<?php do_action('woocommerce_checkout_after_order_review'); ?>
		</div>
	</div>
</form>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>
