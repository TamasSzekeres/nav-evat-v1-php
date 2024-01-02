<?php

use LightSideSoftware\EVat\V1\Types\Annotations\TaxPayerIdTypeValidation;

beforeEach(function () {
    $this->validation = new TaxPayerIdTypeValidation();
});

test('tax payer id validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['01234567', false],
    ['0123a567', true],
    ['012345676', true],
    ['0123456', true],
]);
