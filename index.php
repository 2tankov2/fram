<?php

namespace App;

require_once 'vendor/autoload.php';

require_once 'src/Renderer.php';

use function App\Renderer\render;

$app = new Application();

$app->get('/', function () {
    return render('index');
});

$app->get('/about', function () {
    return render('about', [
        'site' => 'my-mini-fram',
        'subprojects' => ['sign', 'register']]);
});

//$app->post('/sign_in', function () {
//    return 'sign in';
//});

$app->run();
