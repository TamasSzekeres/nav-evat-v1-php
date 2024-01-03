<?php

use LightSideSoftware\EVat\V1\Types\DeclarationInfoType;
use LightSideSoftware\EVat\V1\Types\DeclarationSummaryType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use LightSideSoftware\EVat\V1\Types\VatAnalyticsType;
use LightSideSoftware\EVat\V1\Types\VatDeclarationDataType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new VatDeclarationDataType(
        declarationInfo: new DeclarationInfoType(
            taxNumber: '12345679',
            declarationType: DeclarationTypeType::BECAME_VAT_FREE,
            declarationKind: DeclarationKindType::UNDER_PROCESS,
            declarationFrequency: DeclarationFrequencyType::ANNUAL,
            declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
            declarationPeriodEnd: new DateTimeImmutable('2023-02-01'),
            version: 1,
        ),
        vatAnalytics: new VatAnalyticsType(
            totalRowCount: 1,
        ),
        declarationSummary: new DeclarationSummaryType(
            sumAccountedTax: 123.45,
        ),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new VatDeclarationDataType(
        declarationInfo: new DeclarationInfoType(
            taxNumber: '12345679',
            declarationType: DeclarationTypeType::BECAME_VAT_FREE,
            declarationKind: DeclarationKindType::UNDER_PROCESS,
            declarationFrequency: DeclarationFrequencyType::ANNUAL,
            declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
            declarationPeriodEnd: new DateTimeImmutable('2023-02-01'),
            version: 1,
        ),
        vatAnalytics: new VatAnalyticsType(
            totalRowCount: 1,
        ),
        declarationSummary: new DeclarationSummaryType(
            sumAccountedTax: 123.45,
        ),
        attachments: [false]
    );
})->throws(ValidationException::class);
