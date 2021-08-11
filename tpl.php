<?php

use Jenssegers\Blade\Blade;

function Render($tpl, $obj = [])
{
    $views = __DIR__ . '/app/Views';
    $cache = __DIR__ . '/cache';

    $blade = new Blade($views, $cache);

    echo $blade->render($tpl, $obj);
}