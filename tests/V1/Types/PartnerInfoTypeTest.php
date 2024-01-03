<?php

use LightSideSoftware\EVat\V1\Types\Enums\PartnerStatusType;
use LightSideSoftware\EVat\V1\Types\PartnerInfoType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new PartnerInfoType(
        partnerStatus: PartnerStatusType::DOMESTIC,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new PartnerInfoType(
        partnerStatus: PartnerStatusType::DOMESTIC,
        partnerName: ' ',
    );
})->throws(ValidationException::class);
