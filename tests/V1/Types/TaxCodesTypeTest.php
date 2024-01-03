<?php

use LightSideSoftware\EVat\V1\Types\Enums\LocalizationType;
use LightSideSoftware\EVat\V1\Types\TaxCodeDescriptionType;
use LightSideSoftware\EVat\V1\Types\TaxCodesType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new TaxCodesType(
        standardTaxCode: '123',
        transactionCode: 'TX336',
        payableTaxCode: true,
        deductibleTaxCode: false,
        taxCodeDescriptions: [
            new TaxCodeDescriptionType(
                localization: LocalizationType::DE,
                description: 'Description',
            ),
            new TaxCodeDescriptionType(
                localization: LocalizationType::EN,
                description: 'Description',
            ),
            new TaxCodeDescriptionType(
                localization: LocalizationType::HU,
                description: 'Leírás',
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new TaxCodesType(
        standardTaxCode: ' ',
        transactionCode: ' ',
        payableTaxCode: true,
        deductibleTaxCode: false,
        taxCodeDescriptions: [
            new TaxCodeDescriptionType(
                localization: LocalizationType::EN,
                description: 'Description',
            ),
            new TaxCodeDescriptionType(
                localization: LocalizationType::HU,
                description: 'Leírás',
            ),
        ],
    );
})->throws(ValidationException::class);
