<?php

use Illuminate\Support\Facades\Route;


function setActive($route)
{
    if (is_array($route)) {
        foreach ($route as $r) {
            if (Route::is($r)) {
                return 'active';
            }
        }
    } else {
        if (Route::is($route)) {
            return 'active';
        }
    }
}
