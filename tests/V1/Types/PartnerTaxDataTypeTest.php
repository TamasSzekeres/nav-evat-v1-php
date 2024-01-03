<?php

use LightSideSoftware\EVat\V1\Types\DomesticTaxDataType;
use LightSideSoftware\EVat\V1\Types\PartnerTaxDataType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new PartnerTaxDataType(
        domesticTaxData: new DomesticTaxDataType(
            taxNumber: '12345678',
            groupMemberTaxNumber: '12345678',
        ),
        communityVatNumber: 'AZ12345678',
        thirdStateTaxId: '12345678',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new PartnerTaxDataType(
        domesticTaxData: new DomesticTaxDataType(
            taxNumber: '12345678',
            groupMemberTaxNumber: '12345678',
        ),
        communityVatNumber: 'AZ1234@5678',
        thirdStateTaxId: ' ',
    );
})->throws(ValidationException::class);
