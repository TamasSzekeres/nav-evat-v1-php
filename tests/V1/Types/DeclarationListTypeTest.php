<?php

use LightSideSoftware\EVat\V1\Types\DeclarationInfoType;
use LightSideSoftware\EVat\V1\Types\DeclarationListItemType;
use LightSideSoftware\EVat\V1\Types\DeclarationListType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationFrequencyType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationKindType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationListType(
        declarationListItems: [
            new DeclarationListItemType(
                declarationProcessingId: 'ID72225',
                declarationSchema: DeclarationSchemaType::VAT_DECLARATION,
                declarationInfo: new DeclarationInfoType(
                    taxNumber: '12345679',
                    declarationType: DeclarationTypeType::BECAME_VAT_FREE,
                    declarationKind: DeclarationKindType::UNDER_PROCESS,
                    declarationFrequency: DeclarationFrequencyType::ANNUAL,
                    declarationPeriodStart: new DateTimeImmutable('2023-01-01'),
                    declarationPeriodEnd: new DateTimeImmutable('2023-02-01'),
                    version: 1,
                ),
                originalRequestVersion: '1.0',
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationListType(
        declarationListItems: [false],
    );
})->throws(ValidationException::class);
