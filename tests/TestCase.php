<?php

declare(strict_types=1);

namespace Denniseilander\AboutApplication\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Denniseilander\AboutApplication\AboutApplicationServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Denniseilander\\AboutApplication\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    /**
     * @param $app
     * @return array<array-key, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            AboutApplicationServiceProvider::class,
            LivewireServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_pulse-about-application_table.php.stub';
        $migration->up();
        */
    }
}
