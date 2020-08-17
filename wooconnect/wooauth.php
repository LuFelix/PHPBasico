<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'https://example.com',
    'ck_43591c8ff77bbff0fb0bfb79bbd224045d8af144',
    'cs_6e426604e1a66cac1555eb12e01b8f45b022392b',
    [
        'wp_api' => true,
        'version' => 'wc/v3'
    ]
);
?>