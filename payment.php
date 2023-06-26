<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://api.paymongo.com/v1/sources', [
  'body' => '{"data":{"attributes":{"amount":10000,"redirect":{"success":"http://localhost/se/success.php","failed":"http://localhost/se/failed.php"},"type":"gcash","currency":"PHP"}}}',
  'headers' => [
    'accept' => 'application/json',
    'authorization' => 'Basic cGtfdGVzdF9Cd0hMdW9oRU1vblRzcFRZQlltYVNDNnA6c2tfdGVzdF9XdWU5Ym9IOVhTWTdiNjZUcWpRaHFvSGs=',
    'content-type' => 'application/json',
  ],
]);

echo $response->getBody();
