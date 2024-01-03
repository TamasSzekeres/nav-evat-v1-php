<?php

use LightSideSoftware\EVat\V1\Types\DomesticPaymentServiceProviderType;
use LightSideSoftware\EVat\V1\Types\Enums\FactoringTaxCodeType;
use LightSideSoftware\EVat\V1\Types\FactoringContractDataType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;
use LightSideSoftware\EVat\V1\Types\AdditionalAttachmentInfoType;

it('throws no exceptions', function () {
    new AdditionalAttachmentInfoType(
        factoringContractData: new FactoringContractDataType(
            factoringContractNumber: '123',
            factoringContractDate: new DateTimeImmutable('2020-01-01'),
            factoringTaxCode: FactoringTaxCodeType::VAT_104,
            factoringAmount: 1000.0,
            domesticPaymentServiceProvider: new DomesticPaymentServiceProviderType(
                domesticProviderName: 'Name',
                domesticBankAccountNumber: '12345678-93461234-12341234',
            ),
        ),
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new AdditionalAttachmentInfoType(
        factoringContractData: new FactoringContractDataType(
            factoringContractNumber: '123',
            factoringContractDate: new DateTimeImmutable('1960-01-01'),
            factoringTaxCode: FactoringTaxCodeType::VAT_104,
            factoringAmount: 1000.0,
            domesticPaymentServiceProvider: new DomesticPaymentServiceProviderType(
                domesticProviderName: 'Name',
                domesticBankAccountNumber: '12345678-93461234-12341234',
            ),
        ),
    );
})->throws(ValidationException::class);
