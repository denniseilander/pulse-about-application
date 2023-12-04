<?php

declare(strict_types=1);

namespace Denniseilander\AboutApplication\Livewire;

use Denniseilander\AboutApplication\AboutApplication;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\View as ViewFacade;
use Laravel\Pulse\Livewire\Card;
use Laravel\Pulse\Livewire\Concerns\RemembersQueries;
use Laravel\Pulse\Livewire\Concerns\HasPeriod;
use Livewire\Attributes\Lazy;

#[Lazy]
class AboutApplicationCard extends Card
{
    use HasPeriod;
    use RemembersQueries;

    public function render(): View
    {
        $information = AboutApplication::getInformation();

        return ViewFacade::make('pulse-about-application::about', [
            'information' => $information,
        ]);
    }
}
