<?php

use LightSideSoftware\EVat\V1\Types\CashRegisterDigestType;
use LightSideSoftware\EVat\V1\Types\Enums\RegisterTypeType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new CashRegisterDigestType(
        taxpointDate: new DateTimeImmutable('2022-01-01'),
        apNumber: '123',
        registerType: RegisterTypeType::C_REGISTER,
        baseReceiptNetAmount: 1.0,
        stornoReceiptNetAmount: 1.0,
        returnReceiptNetAmount: 1.0,
        baseReceiptVatAmount: 1.0,
        stornoReceiptVatAmount: 1.0,
        returnReceiptVatAmount: 1.0,
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new CashRegisterDigestType(
        taxpointDate: new DateTimeImmutable('1920-01-01'),
        apNumber: '12{3}gh',
        registerType: RegisterTypeType::C_REGISTER,
        baseReceiptNetAmount: 1.0,
        stornoReceiptNetAmount: 1.0,
        returnReceiptNetAmount: 1.0,
        baseReceiptVatAmount: 1.0,
        stornoReceiptVatAmount: 1.0,
        returnReceiptVatAmount: 1.0,
    );
})->throws(ValidationException::class);
