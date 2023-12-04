<?php

declare(strict_types=1);

namespace Denniseilander\AboutApplication\Tests;

use Denniseilander\AboutApplication\AboutApplicationServiceProvider;
use Denniseilander\AboutApplication\Livewire\AboutApplicationCard;
use Livewire\Livewire;
use Livewire\LivewireServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->registerLivewireComponents();
    }

    /**
     * @return array<array-key, class-string>
     */
    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            AboutApplicationServiceProvider::class,
        ];
    }

    protected function registerLivewireComponents(): void
    {
        Livewire::component('pulse.about-application', AboutApplicationCard::class);
    }
}
