<?php

use LightSideSoftware\EVat\V1\Types\Annotations\SheetFieldNameTypeValidation;

beforeEach(function () {
    $this->validation = new SheetFieldNameTypeValidation();
});

test('sheet field name validation', function (string $value, bool $hasErrors) {
    expect($this->validation->validateProperty('value', $value)->hasErrors())->toBe($hasErrors);
})->with([
    ['0123', false],
    ['0123567890123', false],
    ['A23', true],
    ['0B235678901234', true],
    ['0B235678_01234', true],
]);
