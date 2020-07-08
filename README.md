# Guzzle Http Demo

- [guzzlehttp](https://github.com/guzzlehttp/http) version > 7.0

## Install
```
composer install -vvv
```

use `try-catch` and if using PHP-7 can try to catch Throwable always with a slash as follow:

```
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
```
