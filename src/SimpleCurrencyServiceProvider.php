<?php

namespace Penh\SimpleCurrency;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Penh\SimpleCurrency\Commands\SimpleCurrencyCommand;

class SimpleCurrencyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('simple-currency')
            ->hasConfigFile()
            ->hasViews()
            // ->hasMigration('create_skeleton_table')
            ->hasCommand(SimpleCurrencyCommand::class);
    }
}
