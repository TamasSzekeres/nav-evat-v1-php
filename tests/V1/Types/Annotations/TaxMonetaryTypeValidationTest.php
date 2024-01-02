<?php

use LightSideSoftware\EVat\V1\Types\Annotations\TaxMonetaryTypeValidation;

beforeEach(function () {
    $this->validation = new TaxMonetaryTypeValidation();
});

test('tax monetary validation', function (float $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    [1.0, false],
    [30012345.12, false],
    [30123450124.1234, true],
    [113534524435457654234.12, true],
]);
