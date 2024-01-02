<?php

use LightSideSoftware\EVat\V1\Types\Annotations\BevfeldForeignAccountTypeValidation;

beforeEach(function () {
    $this->validation = new BevfeldForeignAccountTypeValidation();
});

test('bevfeld foreign account validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['1', false],
    ['01234567890123456789012345678901', false],
    ['', true],
    [' ', true],
    ['012345678901234567890123456789012', true],
]);
