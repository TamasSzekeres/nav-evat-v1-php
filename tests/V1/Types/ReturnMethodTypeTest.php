<?php

use LightSideSoftware\EVat\V1\Types\DomesticPaymentServiceProviderType;
use LightSideSoftware\EVat\V1\Types\ForeignPaymentServiceProviderType;
use LightSideSoftware\EVat\V1\Types\PostalReturnType;
use LightSideSoftware\EVat\V1\Types\ReturnMethodType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new ReturnMethodType(
        domesticPaymentServiceProvider: new DomesticPaymentServiceProviderType(
            domesticProviderName: 'Name',
            domesticBankAccountNumber: '12345678-12345678-12345678',
        ),
        foreignPaymentServiceProvider: new ForeignPaymentServiceProviderType(
            foreignProviderName: 'Name',
            foreignProviderAddress: 'Address',
            foreignBankAccountOwnerName: 'Name',
            foreignBankAccountNumber: '12345678-12345678-12345678',
            ibanIndicator: true,
            swiftCode: 'ABCDEF56',
            countryCode: 'HR',
            currencyCode: 'HRK',
        ),
        postalReturn: new PostalReturnType(
            postalCode: '1234',
            city: 'Budapest',
            additionalAddress: 'Budapest utca 1.',
        ),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new ReturnMethodType(
        domesticPaymentServiceProvider: new DomesticPaymentServiceProviderType(
            domesticProviderName: 'Name',
            domesticBankAccountNumber: '12345678-12345678-12345678',
        ),
        foreignPaymentServiceProvider: new ForeignPaymentServiceProviderType(
            foreignProviderName: 'Name',
            foreignProviderAddress: 'Address',
            foreignBankAccountOwnerName: 'Name',
            foreignBankAccountNumber: '12345678-12345678-12345678',
            ibanIndicator: true,
            swiftCode: 'AB@CDEF56',
            countryCode: 'HR',
            currencyCode: 'HRK',
        ),
        postalReturn: new PostalReturnType(
            postalCode: '1234',
            city: 'Budapest',
            additionalAddress: 'Budapest utca 1.',
        ),
    );
})->throws(ValidationException::class);
