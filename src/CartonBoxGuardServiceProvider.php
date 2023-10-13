<?php

namespace Teresa\CartonBoxGuard;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Teresa\CartonBoxGuard\Commands\CartonBoxGuardCommand;

class CartonBoxGuardServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('carton-box-guard')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_carton-box-guard_table')
            ->hasCommand(CartonBoxGuardCommand::class);
    }
}
