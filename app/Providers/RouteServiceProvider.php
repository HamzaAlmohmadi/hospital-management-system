<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Route;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->routes(function () {

            Route::middleware('web')
                ->group(base_path('routes/Backend.php')); 
            
            Route::middleware('web')
                ->group(base_path('routes/doctor.php'));
            
            Route::middleware('web')
                ->group(base_path('routes/ray_employee.php'));

            Route::middleware('web')
                ->group(base_path('routes/laboratorie_employee.php'));
            Route::middleware('web')
            ->group(base_path('routes/patient.php'));
            
            
            
            });

            
    }
}
