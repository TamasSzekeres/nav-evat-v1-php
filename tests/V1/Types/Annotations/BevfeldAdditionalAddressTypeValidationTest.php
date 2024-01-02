<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldAdditionalAddressTypeValidation;

beforeEach(function () {
    $this->validation = new BevfeldAdditionalAddressTypeValidation();
});

test('bevfeld additional address validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['1', false],
    ['012345678901234567890123', false],
    ['', true],
    [' ', true],
    ['0123456789012345678901234', true],
]);
