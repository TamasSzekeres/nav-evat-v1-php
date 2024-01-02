<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldCityTypeValidation;

beforeEach(function () {
    $this->validation = new BevfeldCityTypeValidation();
});

test('bevfeld city type validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['1', false],
    ['01234567890123456789012345678901234567890123456789', false],
    ['', true],
    [' ', true],
    ['012345678901234567890123456789012345678901234567890', true],
]);
