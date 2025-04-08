<?php

namespace App\Providers;

use App\Models\Kriteria;
use App\Service\AlternativeService;
use App\Service\AlternativeServiceInterface;
use App\Service\BobotService;
use App\Service\BobotServiceInterface;
use App\Service\KriteriaSeriveInterface;
use App\Service\KriteriaService;
use App\Service\PilihanJawabanInterfaces;
use App\Service\PilihanJawabanService;
use App\Service\PilihanJawabanServiceInterfaces;
use App\Service\TokenService;
use App\Service\TokenServiceInterface;
use App\Service\UserService;
use App\Service\UserServiceInterface;
use App\Service\VektorSService;
use App\Service\VektorSServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    public $singletons = [
        BobotServiceInterface::class => BobotService::class,
        UserServiceInterface::class => UserService::class,
        KriteriaSeriveInterface::class => KriteriaService::class,
        AlternativeServiceInterface::class => AlternativeService::class,
        PilihanJawabanServiceInterfaces::class => PilihanJawabanService::class,
        VektorSServiceInterface::class => VektorSService::class
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
