<?php

use LightSideSoftware\EVat\V1\Types\DeclarationInfoType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationInfoType(
        taxNumber: '12345678',
        declarationType: DeclarationTypeType::BECAME_TAXPAYER,
        declarationKind: DeclarationKindType::NONE,
        declarationFrequency: DeclarationFrequencyType::ANNUAL,
        declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
        declarationPeriodEnd: new DateTimeImmutable('2023-01-01'),
        version: 1,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationInfoType(
        taxNumber: '123456@78',
        declarationType: DeclarationTypeType::BECAME_TAXPAYER,
        declarationKind: DeclarationKindType::NONE,
        declarationFrequency: DeclarationFrequencyType::ANNUAL,
        declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
        declarationPeriodEnd: new DateTimeImmutable('2023-01-01'),
        version: 1,
    );
})->throws(ValidationException::class);
