<?php

use LightSideSoftware\EVat\V1\Types\Annotations\SwiftCodeTypeValidation;

beforeEach(function () {
    $this->validation = new SwiftCodeTypeValidation();
});

test('swift code validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['ABCDEF67', false],
    ['GHIJKLMN111', false],
    ['ABCDEF6', true],
    ['ABCDEF17', true],
]);
