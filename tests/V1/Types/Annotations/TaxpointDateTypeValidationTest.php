<?php

use LightSideSoftware\EVat\V1\Types\Annotations\TaxpointDateTypeValidation;

test('tax point date validation', function (
    DateTimeImmutable $value,
    bool $hasError,
) {
    $validation = new TaxpointDateTypeValidation();
    expect($validation->validateProperty('value', $value)->hasErrors())->toBe($hasError);
})->with([
    [new DateTimeImmutable('2021-01-01'), false],
    [new DateTimeImmutable('2020-12-31'), true],
]);
