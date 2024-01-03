<?php

use LightSideSoftware\EVat\V1\Types\DomesticTaxDataType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DomesticTaxDataType(
        taxNumber: '12345678',
        groupMemberTaxNumber: '12345678',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DomesticTaxDataType(
        taxNumber: '12345645678',
        groupMemberTaxNumber: '1234567864',
    );
})->throws(ValidationException::class);
