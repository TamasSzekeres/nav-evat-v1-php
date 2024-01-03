<?php

use LightSideSoftware\EVat\V1\Types\ReturnStatementsType;

it('throws no exceptions', function () {
    new ReturnStatementsType(
        publicLlcIndicator: true,
        expediteReturnIndicator: true,
    );
})->throwsNoExceptions();
