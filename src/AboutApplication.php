<?php

declare(strict_types=1);

namespace Denniseilander\AboutApplication;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;

class AboutApplication
{
    public static function getInformation(): Collection
    {
        $information = Cache::remember('about_application', now()->addHour(), function () {
            Artisan::call(AboutCommand::class, ['--json' => true]);

            return Artisan::output();
        });

        $information = new Collection(json_decode($information, true, 512, JSON_THROW_ON_ERROR));

        return self::formatInformation($information);
    }

    /**
     * @param  Collection<array-key, mixed>  $information
     * @return Collection<array-key, mixed>
     */
    public static function formatInformation(Collection $information): Collection
    {
        return $information
            ->reject(function (array $items, string $category) {
                return in_array($category, config('pulse-about-application.hide', []), true);
            })
            ->map(function (array $items, string $category) {
                return (new Collection($items))->transform(function (mixed $value, string $key) {
                    return match (true) {
                        is_bool($value) => $value === true ? 'Yes' : 'No',
                        is_array($value) => implode(', ', $value),
                        is_string($value) => $value,
                        $value === '', $value === null => '-',
                    };
                });
            });
    }
}
