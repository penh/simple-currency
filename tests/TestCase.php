<?php

namespace Penh\SimpleCurrency\Tests;

use Penh\SimpleCurrency\SimpleCurrency;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Database\Eloquent\Factories\Factory;
use Penh\SimpleCurrency\SimpleCurrencyServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Penh\\SimpleCurrency\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
        echo "Test formate is ";
        $variable = new SimpleCurrency();
        echo $variable->formate(2);
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
