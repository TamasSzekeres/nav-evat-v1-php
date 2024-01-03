<?php

use LightSideSoftware\EVat\V1\Types\AdditionalDeclarationQueryParamsType;
use LightSideSoftware\EVat\V1\Types\Enums\DeclarationOperationType;

it('throws no exceptions', function () {
    new AdditionalDeclarationQueryParamsType(
        declarationOperation: DeclarationOperationType::CREATE,
        returnDualAgentDeclarationsOnly: false,
    );
})->throwsNoExceptions();
