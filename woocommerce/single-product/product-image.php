<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.8.0
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;
$attachment_ids = $product->get_gallery_image_ids();

?>
<section>
	<div class="container px-p-0">
		<div class="d-flex flex-wrap dmb-100 tmb-0">
<div class="col-lg-6 col-12 pe-lg-5 overflow-hidden">
	<div class="pe-lg-4"> 
		<div class="single-product-slider mb-lg-2 mb-1">
			<div>
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?= $product->get_name(); ?>" class="h-100 w-100 object-cover">
			</div>
			<?php foreach ($attachment_ids as $attachment_id) : ?>
			<div>
				<img src="<?php echo $Original_image_url = wp_get_attachment_url($attachment_id); ?>" alt="<?= $product->get_name(); ?>" class="h-100 w-100 object-cover">
			</div>
			<?php endforeach; ?>
		</div>
		<div class="single-product-group col-lg-12 col-10">
			<div>
				<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="<?= $product->get_name(); ?>" class="h-100 w-100 object-cover">
			</div>
			<?php foreach ($attachment_ids as $attachment_id) : ?>
			<div>
				<img src="<?php echo $Original_image_url = wp_get_attachment_url($attachment_id); ?>" alt="<?= $product->get_name(); ?>" class="h-100 w-100 object-cover">
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>