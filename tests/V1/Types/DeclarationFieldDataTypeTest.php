<?php

use LightSideSoftware\EVat\V1\Types\DeclarationFieldDataType;
use LightSideSoftware\EVat\V1\Types\Enums\FieldTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeclarationFieldDataType(
        fieldId: 'ID54123',
        fieldType: FieldTypeType::QUANTITY,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationFieldDataType(
        fieldId: 'ID54123645674734623',
        fieldType: FieldTypeType::QUANTITY,
    );
})->throws(ValidationException::class);
