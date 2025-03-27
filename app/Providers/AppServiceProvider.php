<?php

namespace App\Providers;

use App\Service\BobotService;
use App\Service\BobotServiceInterface;
use App\Service\TokenService;
use App\Service\TokenServiceInterface;
use App\Service\UserService;
use App\Service\UserServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public $singletons = [
        BobotServiceInterface::class => BobotService::class,
        UserServiceInterface::class => UserService::class
    ];

    
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
