<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BarCodeTypeValidation;

beforeEach(function () {
    $this->validation = new BarCodeTypeValidation();
});

test('bar code validation', function (int $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    [1000000000, false],
    [9999999999, false],
    [1000000000-1, true],
    [9999999999+1, true],
]);
