<?php

use LightSideSoftware\EVat\V1\Types\Annotations\VpidTypeValidation;

beforeEach(function () {
    $this->validation = new VpidTypeValidation();
});

test('vpid validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['012345678901', false],
    ['0123456789012', true],
    ['01234567890', true],
    ['012345a78901', true],
]);
