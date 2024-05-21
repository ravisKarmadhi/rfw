<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://woo.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
if (get_the_post_thumbnail_url($pro_id, 'medium_large')) {
	$image = get_the_post_thumbnail_url($pro_id, 'medium_large');
} else {
	$image = '/wp-content/uploads/woocommerce-placeholder.png';
}
?>
<div class="related-item">
	<a href="<?php the_permalink(); ?>" class="d-inline-block text-decoration-none w-100">
		<div class="related-img dmb-30">
			<img src="<?php echo $image; ?>" alt="<?= $product->get_name(); ?>" class="w-100 h-100 object-cover">
		</div>
		<div class="related-content">
			<div class="classic font-14 leading-20 fw-normal text-2C2924 dmb-25 tmb-20">April 4 @ 9.30am - April 5th @ 9.30 am</div>
			<div class="classic font-28 leading-30 fw-normal text-2C2924 res-font-22 res-leading-28"><?= $product->get_name(); ?></div>
		</div>
	</a>
</div>