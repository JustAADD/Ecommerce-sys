<?php

require_once "../SE/vendor/autoload.php";

use Omnipay\Omnipay;

define('CLIENT_ID', 'AQ_OnfGaNhsDAThQAM1NrMq3dEXxlpNHCiZOofBQib6wx4BbweYfSSVNYxZn_LYkEV33DluLm2FUZhVa');
define('CLIENT_SECRET', 'EK6q2RgAV-U08y81dnoOJz1q8fywdD9cblHFtjgIbs0TFj8xPTHt4ISHTT-Bf2RMP4qS0yU3lyuyFdKU');

define('PAYPAL_RETURN_URL', 'http://localhost/se/success.php');
define('PAYPAL_CANCEL_URL', 'http://localhost/se/cancel.php');
define('PAYPAL_CURRENCY', 'USD');


// Connect with the database
include('connection/connect.php');

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
