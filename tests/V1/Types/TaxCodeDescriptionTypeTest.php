<?php

use LightSideSoftware\EVat\V1\Types\Enums\LocalizationType;
use LightSideSoftware\EVat\V1\Types\TaxCodeDescriptionType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new TaxCodeDescriptionType(
        localization: LocalizationType::EN,
        description: 'Description',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new TaxCodeDescriptionType(
        localization: LocalizationType::EN,
        description: ' ',
    );
})->throws(ValidationException::class);
