<?php

namespace App\Renderer;

require_once 'src/Template.php';

function render($filepath, $params = [])
{
    $parts = [getcwd(), 'resources', 'views', $filepath];
    $templatepath = implode(DIRECTORY_SEPARATOR, $parts) . '.phtml';
    return \App\Template\render($templatepath, $params);
}