<?php

use LightSideSoftware\EVat\V1\Types\DeclarationFieldDataType;
use LightSideSoftware\EVat\V1\Types\DeclarationLineDataType;
use LightSideSoftware\EVat\V1\Types\Enums\FieldTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationLineDataType(
        declarationLineNumber: 1,
        declarationFieldData: [
            new DeclarationFieldDataType(
                fieldId: 'ID54123',
                fieldType: FieldTypeType::QUANTITY,
            ),
        ],
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationLineDataType(
        declarationLineNumber: -1,
        declarationFieldData: [false],
    );
})->throws(ValidationException::class);
