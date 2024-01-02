<?php

use LightSideSoftware\EVat\V1\Types\Annotations\GenericUnsignedIntegerTypeValidation;

beforeEach(function () {
    $this->validation = new GenericUnsignedIntegerTypeValidation();
});

test('generic unsigned integer validation', function (int $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    [1, false],
    [0, true],
]);
