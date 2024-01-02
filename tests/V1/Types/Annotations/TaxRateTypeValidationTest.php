<?php

use LightSideSoftware\EVat\V1\Types\Annotations\TaxRateTypeValidation;

beforeEach(function () {
    $this->validation = new TaxRateTypeValidation();
});

test('tax rate validation', function (float $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    [0.001, false],
    [0.999, false],
    [0.0, true],
    [1.0, true],
    [0.55555555, true],
]);
