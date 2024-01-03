<?php

use LightSideSoftware\EVat\V1\Types\AdditionalInvoiceTaxCodeQueryParamsType;

it('throws no exceptions', function () {
    new AdditionalInvoiceTaxCodeQueryParamsType(
        claimCheckId: true,
    );
})->throwsNoExceptions();
