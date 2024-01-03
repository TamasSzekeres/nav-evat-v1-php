<?php

use LightSideSoftware\EVat\V1\Types\VatAnalyticsType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new VatAnalyticsType(
        totalRowCount: 1,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new VatAnalyticsType(
        totalRowCount: -1,
    );
})->throws(ValidationException::class);
