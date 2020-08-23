<?php

namespace Fram;

function server($url)
{
    if ('/' === $url) {
        return "<p>Welcome to PHP</p>";
    } else if ('/about' === $url) {
        return "about compaty";
    } else if ('/server' === $url) {
        print_r($_SERVER);
    }
}

echo server($_SERVER['REQUEST_URI']);