<?php

use LightSideSoftware\EVat\V1\Types\ForeignPaymentServiceProviderType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new ForeignPaymentServiceProviderType(
        foreignProviderName: 'Name',
        foreignProviderAddress: 'Address',
        foreignBankAccountOwnerName: 'Name',
        foreignBankAccountNumber: '12345678-12345678-12345678',
        ibanIndicator: true,
        swiftCode: 'ABCDEF56',
        countryCode: 'HR',
        currencyCode: 'HRK',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new ForeignPaymentServiceProviderType(
        foreignProviderName: 'Name',
        foreignProviderAddress: 'Address',
        foreignBankAccountOwnerName: 'Name',
        foreignBankAccountNumber: '12345678-123&5678-1234ł678',
        ibanIndicator: true,
        swiftCode: 'ABCD@EF56',
        countryCode: 'HR',
        currencyCode: 'HRK',
    );
})->throws(ValidationException::class);
