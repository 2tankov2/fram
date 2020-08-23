<?php

namespace Fram;

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