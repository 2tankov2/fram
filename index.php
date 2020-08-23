<?php

namespace App;

require_once __DIR__ . '/vendor/autoload.php';

/**
    function server($url)
    {
        if ('/' === $url) {
            return "<p>Welcome to PHP</p>";
        } else if (preg_match('/^\/about\/?$/i', $url)) {
            return "about compaty";
        } else if ('/server' === $url) {
            print_r($_SERVER);
        }
    }

    echo server($_SERVER['REQUEST_URI']);
*/
/**
$routes = [
    ['/', function () {
        return '<p>main page</p>';
    }],
    ['/sign_in', function () {
        return 'you signed in';
    }]
];
*/

$app = new Application();

$app->get('/', function () {
    return 'hello, world!';
});

$app->post('/sign_in', function () {
    return 'sign in';
});
$app->run();