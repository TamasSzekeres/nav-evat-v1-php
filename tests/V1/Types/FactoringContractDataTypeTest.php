<?php

use LightSideSoftware\EVat\V1\Types\DomesticPaymentServiceProviderType;
use LightSideSoftware\EVat\V1\Types\Enums\FactoringTaxCodeType;
use LightSideSoftware\EVat\V1\Types\FactoringContractDataType;
use LightSideSoftware\EVat\V1\Types\ForeignPaymentServiceProviderType;

const DOMESTIC_PAYMENT_SERVICE_PROVIDER_EXAMPLE = new DomesticPaymentServiceProviderType(
    domesticProviderName: 'Name',
    domesticBankAccountNumber: '12345678-12345678-12345678'
);

const FOREIGN_PAYMENT_SERVICE_PROVIDER_EXAMPLE = new ForeignPaymentServiceProviderType(
    foreignProviderName: 'Name',
    foreignProviderAddress: 'Address',
    foreignBankAccountOwnerName: 'Name',
    foreignBankAccountNumber: '12345678-12345678-12345678',
    ibanIndicator: true,
    swiftCode: 'ABCDEF56',
    countryCode: 'HR',
    currencyCode: 'HRK',
);

it('throws no exceptions', function () {
    new FactoringContractDataType(
        factoringContractNumber: '674574567',
        factoringContractDate: new DateTimeImmutable('2021-01-01'),
        factoringTaxCode: FactoringTaxCodeType::SELF_CHECK_ALLOWANCE_215,
        factoringAmount: 100.0,
        domesticPaymentServiceProvider: DOMESTIC_PAYMENT_SERVICE_PROVIDER_EXAMPLE,
    );
})->throwsNoExceptions();

it('throws ValidationException', function (
    ?DomesticPaymentServiceProviderType $domesticPaymentServiceProvider,
    ?ForeignPaymentServiceProviderType  $foreignPaymentServiceProvider,
) {
    new FactoringContractDataType(
        factoringContractNumber: '674574567',
        factoringContractDate: new DateTimeImmutable('2021-01-01'),
        factoringTaxCode: FactoringTaxCodeType::SELF_CHECK_ALLOWANCE_215,
        factoringAmount: 100.0,
        domesticPaymentServiceProvider: $domesticPaymentServiceProvider,
        foreignPaymentServiceProvider: $foreignPaymentServiceProvider,
    );
})->with([
    [null, null],
    [DOMESTIC_PAYMENT_SERVICE_PROVIDER_EXAMPLE, FOREIGN_PAYMENT_SERVICE_PROVIDER_EXAMPLE],
])->throws(InvalidArgumentException::class);
