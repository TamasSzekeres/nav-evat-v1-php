<?php

use LightSideSoftware\EVat\V1\Types\DeclarationStatementsType;
use LightSideSoftware\EVat\V1\Types\Enums\ReturnDecisionType;
use LightSideSoftware\EVat\V1\Types\Enums\TaxpayerStatusCodeType;

it('throws no exceptions', function () {
    new DeclarationStatementsType(
        returnDecision: ReturnDecisionType::NO_RETURN,
        taxpayerStatusCode: TaxpayerStatusCodeType::CODE_4,
    );
})->throwsNoExceptions();
