<?php

use LightSideSoftware\EVat\V1\Types\DeclarationSummaryType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationSummaryType(
        sumAccountedTax: 123.45,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationSummaryType(
        sumAccountedTax: 1236457423.4623625,
    );
})->throws(ValidationException::class);
