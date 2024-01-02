<?php

use LightSideSoftware\EVat\V1\Types\Annotations\DeclarationBaseDateTypeValidation;

test('declaration base date validation', function (
    DateTimeImmutable $value,
    bool $hasError,
) {
    $validation = new DeclarationBaseDateTypeValidation();
    expect($validation->validateProperty('value', $value)->hasErrors())->toBe($hasError);
})->with([
    [new DateTimeImmutable('1970-01-01'), false],
    [new DateTimeImmutable('1969-12-31'), true],
]);
