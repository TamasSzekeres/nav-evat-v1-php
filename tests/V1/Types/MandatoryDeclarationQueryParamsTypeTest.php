<?php

use LightSideSoftware\EVat\V1\Types\MandatoryDeclarationQueryParamsType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new MandatoryDeclarationQueryParamsType(
        declarationDateFrom: new DateTimeImmutable('2021-01-01'),
        declarationDateTo: new DateTimeImmutable('2021-01-01'),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new MandatoryDeclarationQueryParamsType(
        declarationDateFrom: new DateTimeImmutable('2011-01-01'),
        declarationDateTo: new DateTimeImmutable('2011-01-01'),
    );
})->throws(ValidationException::class);
