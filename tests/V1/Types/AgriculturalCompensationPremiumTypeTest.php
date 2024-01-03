<?php

use LightSideSoftware\EVat\V1\Types\AgriculturalCompensationPremiumType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new AgriculturalCompensationPremiumType(
        sevenPercentCount: 30,
        twelvePercentCount: 70,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AgriculturalCompensationPremiumType(
        sevenPercentCount: 0,
        twelvePercentCount: 0,
    );
})->throws(ValidationException::class);
