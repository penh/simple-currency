<?php

namespace Penh\SimpleCurrency\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Penh\SimpleCurrency\Facades\SimpleCurrency;
use Penh\SimpleCurrency\SimpleCurrencyServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Penh\\SimpleCurrency\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
        echo SimpleCurrency::formate(2);
        // echo $variable->echoPhrase('Hello, VendorName!');
    }

    protected function getPackageProviders($app)
    {
        return [
            SimpleCurrencyServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_skeleton_table.php.stub';
        $migration->up();
        */
    }
}
