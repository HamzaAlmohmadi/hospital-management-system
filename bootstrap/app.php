<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(

        web:[
            'web' => __DIR__ . '/../routes/web.php',
            'Backend' => __DIR__ . '/../routes/Backend.php',
            'doctor' => __DIR__ . '/../routes/doctor.php',
            'ray_employee' => __DIR__ . '/../routes/ray_employee.php',
            'laboratorie_employee' => __DIR__ . '/../routes/laboratorie_employee.php',
            'patient' => __DIR__ . '/../routes/patient.php',
        ],
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        api: __DIR__.'/../routes/api.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        
        $middleware->alias([
            /**** OTHER MIDDLEWARE ALIASES ****/
            'localize'                => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRoutes::class,
            'localizationRedirect'    => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationRedirectFilter::class,
            'localeSessionRedirect'   => \Mcamara\LaravelLocalization\Middleware\LocaleSessionRedirect::class,
            'localeCookieRedirect'    => \Mcamara\LaravelLocalization\Middleware\LocaleCookieRedirect::class,
            'localeViewPath'          => \Mcamara\LaravelLocalization\Middleware\LaravelLocalizationViewPath::class, 

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
