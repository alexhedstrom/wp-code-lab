<?php
/**
 * WooCommerce Currency Symbol Customization
 *
 * Replaces default currency symbols (e.g., €, $, kr) with their
 * ISO 4217 currency codes (EUR, USD, SEK) for clearer display.
 *
 * @package    WP-Code-Lab
 * @subpackage WooCommerce
 * @since      1.0.0
 */

/**
 * Filters the WooCommerce currency symbol.
 *
 * Replaces standard currency symbols with their three-letter currency codes.
 *
 * @param string $currency_symbol The existing currency symbol.
 * @param string $currency        The currency code (e.g., 'EUR', 'USD').
 * @return string Modified currency symbol or original if not mapped.
 */
function change_existing_currency_symbol( string $currency_symbol, string $currency ): string {
    $currency_map = array(
        'EUR' => 'EUR',
        'USD' => 'USD',
        'SEK' => 'SEK',
    );

    return $currency_map[ $currency ] ?? $currency_symbol;
}
add_filter( 'woocommerce_currency_symbol', 'change_existing_currency_symbol', 10, 2 );
