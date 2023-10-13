<?php

namespace Teresa\CartonBoxGuard\Providers;

use Illuminate\Support\ServiceProvider;
use Teresa\CartonBoxGuard\Repositories\CartonBoxRepository;
use Teresa\CartonBoxGuard\Services\CartonBoxValidationService;

class CartonBoxGuardServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('CartonBoxRepository', CartonBoxRepository::class);
        $this->app->bind(CartonBoxValidationService::class, CartonBoxValidationService::class);
    }
}
