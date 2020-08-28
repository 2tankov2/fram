<?php

namespace App\Template;

function render($template, $variables)
{
    ob_start();
    extract($variables);
    include $template;
    return ob_get_clean();
}