<?php

use LightSideSoftware\EVat\V1\Types\DeductionOptionsType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DeductionOptionsType(
        deductionAmount: 1000.0,
        deductionRate: 0.2,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DeductionOptionsType(
        deductionAmount: 10064563450.0456345,
        deductionRate: 0.2,
    );
})->throws(ValidationException::class);
