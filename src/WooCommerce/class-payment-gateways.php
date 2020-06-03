<?php

namespace TripleA_Payment_Gateway_For_WooCommerce\WooCommerce;

use WC_Payment_Gateway;

class Payment_Gateways {

	/**
	 * Register the payment gateway with WooCommerce.
	 *
	 * @hooked woocommerce_payment_gateways
	 * @see WC_Payment_Gateways::init()
	 *
	 * @param WC_Payment_Gateway[] $methods
	 *
	 * @return WC_Payment_Gateway[]
	 */
	public function add_triplea_payment_gateway_to_woocommerce( $methods ) {
		$methods[] = TripleA_Payment_Gateway::class;
		return $methods;
	}
}
