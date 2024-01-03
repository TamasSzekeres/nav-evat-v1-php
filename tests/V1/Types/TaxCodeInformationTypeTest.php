<?php

use LightSideSoftware\EVat\V1\Types\Enums\PositionTypeType;
use LightSideSoftware\EVat\V1\Types\TaxCodeInformationType;
use LightSideSoftware\EVat\V1\Types\TaxPositionType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new TaxCodeInformationType(
        standardTaxCode: '123',
        taxPositions: [
            new TaxPositionType(
                positionType: PositionTypeType::PAYABLE,
                taxBase: 1000.0,
                taxAmount: 200.0,
            ),
        ],
        lineNumber: 1,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new TaxCodeInformationType(
        standardTaxCode: ' ',
        taxPositions: [
            new TaxPositionType(
                positionType: PositionTypeType::PAYABLE,
                taxBase: 1000.0,
                taxAmount: 200.0,
            ),
        ],
        lineNumber: 1,
    );
})->throws(ValidationException::class);
