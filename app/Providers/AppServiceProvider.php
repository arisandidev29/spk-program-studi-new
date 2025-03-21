<?php

namespace App\Providers;

use App\Service\TokenService;
use App\Service\TokenServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    // public $singletons = [
    //     TokenServiceInterface::class => TokenService::class
    // ];

    
    public function register(): void
    {
        \Livewire\Livewire::forceAssetInjection();
        $this->app->singleton(TokenServiceInterface::class, TokenService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
