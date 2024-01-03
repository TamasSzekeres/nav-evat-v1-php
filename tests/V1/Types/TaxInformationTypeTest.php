<?php

use LightSideSoftware\EVat\V1\Types\Enums\PositionTypeType;
use LightSideSoftware\EVat\V1\Types\TaxInformationType;
use LightSideSoftware\EVat\V1\Types\TaxPositionType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
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
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new TaxInformationType(
        standardTaxCode: ' ',
        ownTaxCode: ' ',
        taxPositions: [false],
    );
})->throws(ValidationException::class);
