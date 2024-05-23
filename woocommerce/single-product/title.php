<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://woo.com/document/template-structure/
 * @package    WooCommerce\Templates
 * @version    1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}?>
<div class="col-12 ps-lg-1 dpt-20 tpt-45 px-p-p">
<div class="classic font-38 leading-40 fw-normal text-2C2924 text-capitalize dmb-20">
<?php the_title( '<h1 class="product_title entry-title">', '</h1>' ); ?>
</div>