<?php

use Denniseilander\AboutApplication\AboutApplication;
use Illuminate\Support\Collection;

it('formats information correctly', function () {
    $information = new Collection([
        'strings' => [
            'filled' => 'foo',
            'empty_string' => '',
        ],
        'booleans' => [
            'true_value' => true,
            'false_value' => false,
        ],
        'numbers' => [
            'integer' => 12345,
            'float' => 123.45,
        ],
        'arrays' => [
            'simple_array' => ['one', 'two', 'three'],
            'empty_array' => [],
        ],
        'nullables' => [
            'null_value' => null,
            'empty_string' => '',
        ],
    ]);

    // Simulate the configuration for categories to hide.
    config(['pulse-about-application.hide' => ['nullables']]);

    $formatted = AboutApplication::formatInformation($information);

    // Assert the structure and transformations.
    expect($formatted)->toBeInstanceOf(Collection::class);

    // Ensure hidden categories are removed.
    expect($formatted->has('nullables'))->toBeFalse();

    // Validate transformations.
    expect($formatted['strings']['filled'])->toBe('foo');
    expect($formatted['strings']['empty_string'])->toBe('-');

    expect($formatted['booleans']['true_value'])->toBe('Yes');
    expect($formatted['booleans']['false_value'])->toBe('No');

    expect($formatted['numbers']['integer'])->toBe('12,345');
    expect($formatted['numbers']['float'])->toBe('123.45');

    expect($formatted['arrays']['simple_array'])->toBe('one, two, three');
    expect($formatted['arrays']['empty_array'])->toBe('');
});
