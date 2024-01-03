<?php

use LightSideSoftware\EVat\V1\Types\GeneralLedgerInformationType;
use LightSideSoftware\NavApi\V3\Exceptions\ValidationException;

it('throws no exceptions', function () {
    new GeneralLedgerInformationType(
        glAccountId: ['AB567456'],
        glPostingDate: new DateTimeImmutable('2021-01-01'),
        glTransactionId: 'TX656346',
    );
})->throwsNoExceptions();

it('throws ValidationException', function () {
    new GeneralLedgerInformationType(
        glAccountId: ['AB567456', false, 'sfsdf'],
        glPostingDate: new DateTimeImmutable('1921-01-01'),
        glTransactionId: 'TX656346',
    );
})->throws(ValidationException::class);
