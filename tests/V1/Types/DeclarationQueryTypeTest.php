<?php

use LightSideSoftware\EVat\V1\Types\DeclarationQueryType;
use LightSideSoftware\EVat\V1\Types\MandatoryDeclarationQueryParamsType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationQueryType(
        mandatoryDeclarationQueryParams: new MandatoryDeclarationQueryParamsType(
            declarationDateFrom: new DateTimeImmutable('2023-01-01'),
            declarationDateTo: new DateTimeImmutable('2023-01-01'),
        ),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationQueryType(
        mandatoryDeclarationQueryParams: new MandatoryDeclarationQueryParamsType(
            declarationDateFrom: new DateTimeImmutable('1923-01-01'),
            declarationDateTo: new DateTimeImmutable('1923-01-01'),
        ),
    );
})->throws(ValidationException::class);
