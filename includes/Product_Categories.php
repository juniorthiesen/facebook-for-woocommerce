<?php
/**
 * Copyright (c) Facebook, Inc. and its affiliates. All Rights Reserved
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 *
 * @package FacebookCommerce
 */

namespace SkyVerge\WooCommerce\Facebook;

defined( 'ABSPATH' ) or exit;

/**
 * Helper class with utility methods for getting and setting various product category values.
 *
 * @since 2.3.0-dev.1
 */
class Product_Categories {


	/**
	 * Gets the category’s stored Products::GOOGLE_PRODUCT_CATEGORY_META_KEY meta.
	 *
	 * Does not fall back to the plugin settings.
	 *
	 * @since 2.3.0-dev.1
	 *
	 * @param int $category_id category ID
	 * @return string
	 */
	public static function get_google_product_category_id( $category_id ) {

		// TODO: implement
		return '';
	}


	/**
	 * Updates the stored Google product category ID for the Products::GOOGLE_PRODUCT_CATEGORY_META_KEY meta.
	 *
	 * @since 2.3.0-dev.1
	 *
	 * @param int $id category ID
	 * @param string $category_id Google product category ID
	 */
	public static function update_google_product_category_id( $id, $category_id ) {

		// TODO: implement
	}


}
