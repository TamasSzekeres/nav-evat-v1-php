<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldText40TypeValidation;

beforeEach(function () {
    $this->validation = new BevfeldText40TypeValidation();
});

test('bevfeld text-40 validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['1', false],
    ['0123456789012345678901234567890123456789', false],
    ['', true],
    [' ', true],
    ['01234567890123456789012345678901234567890', true],
]);
