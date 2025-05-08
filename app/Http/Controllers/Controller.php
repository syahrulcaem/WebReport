<?php

use Inertia\Inertia;

class Controller
{
    public function __construct()
    {
        Inertia::share([
            'appName' => env('APP_NAME'),
        ]);
    }
}
