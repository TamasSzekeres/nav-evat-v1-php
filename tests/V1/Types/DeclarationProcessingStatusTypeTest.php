<?php

use LightSideSoftware\EVat\V1\Types\DeclarationProcessingStatusType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationSchemaType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationStatusType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;
use LightSideSoftware\NavApi\V3\Types\CryptoType;

it('throws no exceptions', function () {
    new DeclarationProcessingStatusType(
        declarationStatus: DeclarationStatusType::ABORTED,
        declarationUploadId: 'ID55734',
        contentHash: CryptoType::sha3('test'),
        declarationSchema: DeclarationSchemaType::VAT_DECLARATION,
        originalRequestVersion: '1.0',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeclarationProcessingStatusType(
        declarationStatus: DeclarationStatusType::ABORTED,
        declarationUploadId: 'ID55{}734',
        contentHash: CryptoType::sha3('test'),
        declarationSchema: DeclarationSchemaType::VAT_DECLARATION,
        originalRequestVersion: '1.0',
    );
})->throws(ValidationException::class);
