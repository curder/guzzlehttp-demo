<?php
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

require('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

try {
    $url = 'https://postman-echo.com/post';
    $response = $client->post($url, [
        'headers' => [
            'api_key' => 'abc',
        ],
        'json' => [
            'foo1' => 'bar1',
            'foo2' => 'bar2',
        ],
    ]);
    print_r($response->getStatusCode());
    echo "\n";

    print_r($response->getBody());

}  catch (\Throwable $e) {
    print_r($e->getResponse()->getStatusCode());
    echo "\n";
    print_r($e->getMessage());
}
