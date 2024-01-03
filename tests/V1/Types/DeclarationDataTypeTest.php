<?php

use LightSideSoftware\EVat\V1\Types\DeclarationDataType;
use LightSideSoftware\EVat\V1\Types\DeclarationInfoType;
use LightSideSoftware\EVat\V1\Types\DeclarationSummaryType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;
use LightSideSoftware\NavApi\V3\Types\CryptoType;

it('throws no exceptions', function () {
    new DeclarationDataType(
        declarationInfo: new DeclarationInfoType(
            taxNumber: '12345679',
            declarationType: DeclarationTypeType::BECAME_VAT_FREE,
            declarationKind: DeclarationKindType::UNDER_PROCESS,
            declarationFrequency: DeclarationFrequencyType::ANNUAL,
            declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
            declarationPeriodEnd: new DateTimeImmutable('2023-02-01'),
            version: 1,
        ),
        contentHash: CryptoType::sha3('test'),
        declarationSchema: DeclarationSchemaType::VAT_DECLARATION,
        declarationSummary: new DeclarationSummaryType(
            sumAccountedTax: 1.0,
        ),
        originalRequestVersion: '1.0',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationDataType(
        declarationInfo: new DeclarationInfoType(
            taxNumber: '12345@6789',
            declarationType: DeclarationTypeType::BECAME_VAT_FREE,
            declarationKind: DeclarationKindType::UNDER_PROCESS,
            declarationFrequency: DeclarationFrequencyType::ANNUAL,
            declarationPeriodStart: new DateTimeImmutable('1923-01-01'),
            declarationPeriodEnd: new DateTimeImmutable('1923-02-01'),
            version: 1,
        ),
        contentHash: CryptoType::sha3('test'),
        declarationSchema: DeclarationSchemaType::VAT_DECLARATION,
        declarationSummary: new DeclarationSummaryType(
            sumAccountedTax: 1.0,
        ),
        originalRequestVersion: '1.0',
    );
})->throws(ValidationException::class);
