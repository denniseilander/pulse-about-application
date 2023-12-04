<?php

declare(strict_types=1);

namespace Denniseilander\AboutApplication;

use Denniseilander\AboutApplication\Livewire\AboutApplicationCard;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AboutApplicationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('pulse-about-application')
            ->hasConfigFile()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        parent::packageBooted();

        Livewire::component('pulse.about-application', AboutApplicationCard::class);
    }
}
