<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldPostalCodeTypeValidation;

beforeEach(function () {
    $this->validation = new BevfeldPostalCodeTypeValidation();
});

test('bevfeld postal code validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['1234', false],
    ['9999', false],
    ['', true],
    ['0', true],
    ['12345', true],
]);
