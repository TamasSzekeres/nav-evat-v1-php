<?php

use LightSideSoftware\EVat\V1\Types\DomesticPaymentServiceProviderType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new DomesticPaymentServiceProviderType(
        domesticProviderName: 'Name',
        domesticBankAccountNumber: '12345678-12345678-12345678'
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new DomesticPaymentServiceProviderType(
        domesticProviderName: ' ',
        domesticBankAccountNumber: '12345678-12345@78-12345;678'
    );
})->throws(ValidationException::class);
