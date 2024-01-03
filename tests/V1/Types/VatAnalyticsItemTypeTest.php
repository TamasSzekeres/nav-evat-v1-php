<?php

use LightSideSoftware\EVat\V1\Types\Enums\PartnerStatusType;
use LightSideSoftware\EVat\V1\Types\Enums\PositionTypeType;
use LightSideSoftware\EVat\V1\Types\PartnerInfoType;
use LightSideSoftware\EVat\V1\Types\TaxInformationType;
use LightSideSoftware\EVat\V1\Types\TaxPositionType;
use LightSideSoftware\EVat\V1\Types\VatAnalyticsItemType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new VatAnalyticsItemType(
        lineNumber: 1,
        sourceDocumentId: '100',
        sourceDocumentIssueDate: new DateTimeImmutable('2023-01-01'),
        taxpointDate: new DateTimeImmutable('2023-01-01'),
        partnerInfo: new PartnerInfoType(
            partnerStatus: PartnerStatusType::DOMESTIC,
        ),
        taxInformations: [
            new TaxInformationType(
                standardTaxCode: '123',
                ownTaxCode: '123',
                taxPositions: [
                    new TaxPositionType(
                        positionType: PositionTypeType::PAYABLE,
                        taxBase: 1000.0,
                        taxAmount: 200.0,
                    ),
                ],
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new VatAnalyticsItemType(
        lineNumber: 1,
        sourceDocumentId: ' ',
        sourceDocumentIssueDate: new DateTimeImmutable('1923-01-01'),
        taxpointDate: new DateTimeImmutable('1923-01-01'),
        partnerInfo: new PartnerInfoType(
            partnerStatus: PartnerStatusType::DOMESTIC,
        ),
        taxInformations: [false],
    );
})->throws(ValidationException::class);
