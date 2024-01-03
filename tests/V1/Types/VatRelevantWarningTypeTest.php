<?php

use LightSideSoftware\EVat\V1\Types\VatRelevantWarningType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;
use LightSideSoftware\NavApi\V3\Types\Enums\BusinessResultCodeType;

it('throws no exceptions', function () {
    new VatRelevantWarningType(
        validationResultCode: BusinessResultCodeType::INFO,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new VatRelevantWarningType(
        validationResultCode: BusinessResultCodeType::INFO,
        validationErrorCode: ' ',
    );
})->throws(ValidationException::class);
