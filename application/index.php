<?php

// autoloader for Composer
require 'vendor/autoload.php';

// instanciate Guzzle
$client = new GuzzleHttp\Client();

// simple API call
$res = $client->request('GET', 'http://192.168.33.44/api/test', [
    // username and password
    'auth' => ['demouser', '123']
]);

// simple API data handling, echo out something from result
if ($res->getStatusCode() == 200) {
    // we expect the result to be JSON here, for simplicity no further checks
    $jsonResult = json_decode($res->getBody());
    // demoText should be "yo"
    echo $jsonResult->demoText;
}
