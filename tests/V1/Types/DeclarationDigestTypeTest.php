<?php

use LightSideSoftware\EVat\V1\Types\DeclarationDigestType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationOperationType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationDigestType(
        cdpsId: 'ID54123',
        resolutionId: 'ID6745',
        declarationOperation: DeclarationOperationType::CREATE,
        importerTaxNumber: '12345678',
        importerSelfTaxationIndicator: false,
        taxpointDate: new DateTimeImmutable('2022-01-01'),
        deliveryDate: new DateTimeImmutable('2022-01-01'),
        totalNetAmount: 1000.0,
        totalVatAmount: 200.0,
        indirectRepresentativeTaxNumber: '12345678',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationDigestType(
        cdpsId: 'ID54123',
        resolutionId: 'ID6{7}45',
        declarationOperation: DeclarationOperationType::CREATE,
        importerTaxNumber: '123456789',
        importerSelfTaxationIndicator: false,
        taxpointDate: new DateTimeImmutable('2022-01-01'),
        deliveryDate: new DateTimeImmutable('2022-01-01'),
        totalNetAmount: 1000.0,
        totalVatAmount: 200.0,
        indirectRepresentativeTaxNumber: '12345@6789',
    );
})->throws(ValidationException::class);
