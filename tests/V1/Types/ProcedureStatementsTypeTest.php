<?php

use LightSideSoftware\EVat\V1\Types\Enums\OutOfTurnDeclarationCodeType;
use LightSideSoftware\EVat\V1\Types\ProcedureStatementsType;

it('throws no exceptions', function () {
    new ProcedureStatementsType(
        thresholdExceededIndicator: false,
        interimFrequencyChangeIndicator: false,
        midYearCommunityTaxNumberIndicator: false,
        becomesLiveAgainIndicator: false,
        animalDiseaseDefermentIndicator: false,
        taxLiabilityBesideExemptmentIndicator: false,
        outOfTurnDeclarationCode: OutOfTurnDeclarationCodeType::FOREIGN_CURRENCY_CHANGE,
    );
})->throwsNoExceptions();
