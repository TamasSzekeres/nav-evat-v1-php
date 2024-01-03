<?php

use LightSideSoftware\EVat\V1\Types\TaxCodeCatalogType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new TaxCodeCatalogType(
        validFrom: new DateTimeImmutable('2022-01-01'),
        validTo: new DateTimeImmutable('2022-01-02'),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new TaxCodeCatalogType(
        validFrom: new DateTimeImmutable('1922-01-01'),
        validTo: new DateTimeImmutable('1922-01-02'),
    );
})->throws(ValidationException::class);
